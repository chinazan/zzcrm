Fox.define('metadata', [], function () {

    var Metadata = function (cache) {
        this.cache = cache || null;

        this.data = {};
        this.ajax = $.ajax;
    }

    _.extend(Metadata.prototype, {

        cache: null,

        data: null,

        url: 'Metadata',

        load: function (callback, disableCache, sync) {
            var sync = (typeof sync == 'undefined') ? false: sync;
            this.off('sync');
            this.once('sync', callback);
            if (!disableCache) {
                 if (this.loadFromCache()) {
                    this.trigger('sync');
                    return;
                }
            }
            this.fetch(sync);
        },

        fetch: function (sync) {
            var self = this;
            this.ajax({
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

        get: function (path, defaultValue) {
            defaultValue = defaultValue || null;

            var pointer = this.data;
            var arr = path.split('.');
            var result = defaultValue;
            arr.forEach(function (key, i) {
                if (!(key in pointer)) {
                    result = defaultValue;
                    return;
                }
                if (arr.length - 1 == i) {
                    result = pointer[key];
                }
                pointer = pointer[key];
            });
            return result;
        },

        loadFromCache: function () {
            if (this.cache) {
                var cached = this.cache.get('app', 'metadata');
                if (cached) {
                    this.data = cached;
                    return true;
                }
            }
            return null;
        },

        storeToCache: function () {
            if (this.cache) {
                this.cache.set('app', 'metadata', this.data);
            }
        },

    }, Backbone.Events);

    return Metadata;

});
