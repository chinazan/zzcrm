
Fox.define('layout-manager', [], function () {

    var LayoutManager = function (options) {
        var options = options || {};
        this.cache = options.cache || null;
        this.data = {};
        this.ajax = $.ajax;
    }

    _.extend(LayoutManager.prototype, {

        cache: null,

        data: null,

        _getKey: function (scope, type) {
            return scope + '-' + type;
        },

        _getUrl: function (scope, type) {
            return scope + '/layout/' + type;
        },

        get: function (scope, type, callback, cache) {
            if (typeof cache == 'undefined') {
                cache = true;
            }

            var key = this._getKey(scope, type);

            if (cache) {
                if (key in this.data) {
                    if (typeof callback === 'function') {
                        callback(this.data[key]);
                    }
                    return;
                }
            }

            if (this.cache !== null && cache) {
                var cached = this.cache.get('app-layout', key);
                if (cached) {
                    if (typeof callback === 'function') {
                        callback(cached);
                    }
                    this.data[key] = cached;
                    return;
                }
            }

            this.ajax({
                url: this._getUrl(scope, type),
                type: 'GET',
                dataType: 'json',
                success: function (layout) {
                    if (typeof callback === 'function') {
                        callback(layout);
                    }
                    this.data[key] = layout;
                    if (this.cache !== null) {
                        this.cache.set('app-layout', key, layout);
                    }
                }.bind(this)
            });
        },

        set: function (scope, type, layout, callback) {
            var key = this._getKey(scope, type);

            this.ajax({
                url: this._getUrl(scope, type),
                type: 'PUT',
                data: JSON.stringify(layout),
                success: function () {
                    if (this.cache !== null) {
                        this.cache.set('app-layout', key, layout);
                    }
                    this.data[key] = layout;
                    this.trigger('sync');
                    if (typeof callback === 'function') {
                        callback();
                    }
                }.bind(this)
            });
        },

        resetToDefault: function (scope, type, callback) {
            var key = this._getKey(scope, type);

            this.ajax({
                url: 'Layout/action/resetToDefault',
                type: 'POST',
                data: JSON.stringify({
                    scope: scope,
                    name: type
                }),
                success: function (layout) {
                    if (this.cache !== null) {
                        this.cache.clear('app-layout', key);
                    }
                    this.data[key] = layout;
                    this.trigger('sync');
                    if (typeof callback === 'function') {
                        callback();
                    }
                }.bind(this)
            });
        }

    }, Backbone.Events);

    return LayoutManager;

});


