
Fox.define('Views.Fields.Url', 'Views.Fields.Varchar', function (Dep) {

    return Dep.extend({

        type: 'url',

        listTemplate: 'fields.url.list',

        detailTemplate: 'fields.url.detail',

        setup: function () {
            Dep.prototype.setup.call(this);
            this.params.trim = true;
        },

        data: function () {
            return _.extend({
                url: this.getUrl()
            }, Dep.prototype.data.call(this));
        },

        getUrl: function () {
            var url = this.model.get(this.name);
            if (url && url != '') {
                if (!(url.indexOf('http://') === 0) && !(url.indexOf('https://') === 0)) {
                    url = 'http://' + url;
                }
                return url;
            }
            return url;
        }

    });
});

