
Fox.define('Views.Fields.UserWithAvatar', 'Views.Fields.Link', function (Dep) {

    return Dep.extend({

        listTemplate: 'fields.user-with-avatar.detail',

        detailTemplate: 'fields.user-with-avatar.detail',

        data: function () {
            var o = _.extend({}, Dep.prototype.data.call(this));
            if (this.mode == 'detail' || this.mode == 'list') {
                o.avatar = this.getAvatarHtml();
            }
            return o;
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
            return '<img class="avatar avatar-link" width="14" src="?entryPoint=avatar&size=small&id=' + this.model.get(this.idName) + '&t='+t+'">';
        },

    });
});

