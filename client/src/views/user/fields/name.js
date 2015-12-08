Fox.define('Views.User.Fields.Name', 'Views.Fields.PersonName', function (Dep) {

    return Dep.extend({

        listTemplate: 'user.fields.name.list-link',

        listLinkTemplate: 'user.fields.name.list-link',

        data: function () {
            return _.extend({
                avatar: this.getAvatarHtml()
            }, Dep.prototype.data.call(this));
        },

        getAvatarHtml: function () {
            if (this.getConfig().get('avatarsDisabled')) {
                return '';
            }
            var t;
            var cache = this.getCache();
            if (cache) {
                t = cache.get('app', 'timestamp');
            } else {
                t = Date.now();
            }
            return '<img class="avatar avatar-link" width="16" src="?entryPoint=avatar&size=small&id=' + this.model.id + '&t='+t+'">';
        },

    });

});
