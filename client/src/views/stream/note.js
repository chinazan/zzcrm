
Fox.define('Views.Stream.Note', 'View', function (Dep) {

    return Dep.extend({

        messageName: null,

        messageTemplate: null,

        messageData: null,

        isEditable: false,

        isRemovable: false,

        isSystemAvatar: false,

        data: function () {
            return {
                isUserStream: this.isUserStream,
                noEdit: this.options.noEdit,
                acl: this.options.acl,
                onlyContent: this.options.onlyContent,
                avatar: this.getAvatarHtml()
            };
        },

        init: function () {
            this.createField('createdAt', null, null, 'Fields.DatetimeShort');
            this.isUserStream = this.options.isUserStream;
            this.isThis = !this.isUserStream;

            this.parentModel = this.options.parentModel;

            if (!this.isUserStream) {
                if (this.parentModel) {
                    if (
                        this.parentModel.name != this.model.get('parentType') ||
                        this.parentModel.id != this.model.get('parentId')
                    ) {
                        this.isThis = false;
                    }
                }
            }


            if (this.messageName && this.isThis) {
                this.messageName += 'This';
            }

            if (!this.isThis) {
                this.createField('parent');
            }

            this.messageData = {
                'user': 'field:createdBy',
                'entity': 'field:parent',
                'entityType': (this.translate(this.model.get('parentType'), 'scopeNames') || '').toLowerCase(),
            };

            if (!this.options.noEdit && (this.isEditable || this.isRemovable)) {
                this.createView('right', 'Stream.RowActions.Default', {
                    el: this.options.el + ' .right-container',
                    acl: this.options.acl,
                    model: this.model,
                    isEditable: this.isEditable,
                    isRemovable: this.isRemovable
                });
            }
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
            if (!this.messageTemplate) {
                this.messageTemplate = this.translate(this.messageName, 'streamMessages') || '';
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
            var id = this.model.get('createdById');
            if (this.isSystemAvatar) {
                id = 'system';
            }
            return '<img class="avatar" width="20" src="?entryPoint=avatar&size=small&id=' + id + '&t='+t+'">';
        }

    });
});

