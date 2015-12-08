
Fox.define('Views.Notifications.Notification', 'View', function (Dep) {

    return Dep.extend({

        messageName: null,

        messageTemplate: null,

        messageData: null,

        isSystemAvatar: true,

        data: function () {
            return {
                avatar: this.getAvatarHtml()
            };
        },

        init: function () {
            this.createField('createdAt', null, null, 'Fields.DatetimeShort');

            this.messageData = {};
        },

        createField: function (name, type, params, view) {
            type = type || this.model.getFieldType(name) || 'base';
            this.createView(name, view || this.getFieldManager().getViewName(type), {
                model: this.model,
                defs: {
                    name: name,
                    params: params || {}
                },
                el: this.options.el + ' .cell-' + name,
                mode: 'list'
            });
        },

        createMessage: function () {
            if (!this.messageTemplate && this.messageName) {
                this.messageTemplate = this.translate(this.messageName, 'notificationMessages') || '';
            }

            this.createView('message', 'Stream.Message', {
                messageTemplate: this.messageTemplate,
                el: this.options.el + ' .message',
                model: this.model,
                messageData: this.messageData
            });
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
            var id = this.userId;
            if (this.isSystemAvatar) {
                id = 'system';
            }
            if (!id) {
                return '';
            }
            return '<img class="avatar" width="20" src="?entryPoint=avatar&size=small&id=' + id + '&t='+t+'">';
        }

    });
});

