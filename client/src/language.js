
Fox.define('language', [], function () {

    var Language = function (cache) {
        this.cache = cache || null;
        this.data = {};
    };

    _.extend(Language.prototype, {

        data: null,

        cache: null,

        url: 'I18n',

        has: function (name, category, scope) {
            if (scope in this.data) {
                if (category in this.data[scope]) {
                    if (name in this.data[scope][category]) {
                        return true;
                    }
                }
            }
        },

        get: function (scope, category, name) {
            if (scope in this.data) {
                if (category in this.data[scope]) {
                    if (name in this.data[scope][category]) {
                        return this.data[scope][category][name];
                    }
                }
            }
            if (scope == 'Global') {
                return name;
            }
            return false;
        },

        translate: function (name, category, scope) {
            scope = scope || 'Global';
            category = category || 'labels';
            var res = this.get(scope, category, name);
            if (res === false && scope != 'Global') {
                res = this.get('Global', category, name);
            }
            return res;
        },

        translateOption: function (value, field, scope) {
            var translation = this.translate(field, 'options', scope);
            if (typeof translation != 'object') {
                translation = {};
            }
            return translation[value] || value;
        },

        loadFromCache: function () {

            if (this.cache) {
                var cached = this.cache.get('app', 'language');
                if (cached) {
                    this.data = cached;
                    return true;
                }
            }
            return null;
        },

        clearCache: function () {
            if (this.cache) {
                this.cache.clear('app', 'language');
            }
        },

        storeToCache: function () {
            if (this.cache) {
                this.cache.set('app', 'language', this.data);
            }
        },

        load: function (callback, disableCache) {
            this.once('sync', callback);

            if (!disableCache) {
                if (this.loadFromCache()) {
                    this.trigger('sync');
                    return;
                }
            }

            this.fetch();
        },

        fetch: function (sync) {
            var self = this;
            $.ajax({
                url: this.url,
                type: 'GET',
                dataType: 'JSON',
                async: !(sync || false),
                success: function (data) {
                    self.data = data;
                    self.storeToCache();
                    self.trigger('sync');
                }
            });
        },

    }, Backbone.Events);

    return Language;

});


