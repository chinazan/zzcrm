
Fox.define('Views.Notifications.Field', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        type: 'notification',

        listTemplate: 'notifications.field',

        detailTemplate: 'notifications.field',

        setup: function () {
            switch (this.model.get('type')) {
                case 'Note':
                    this.processNote(this.model.get('noteData'));
                    break;
                case 'MentionInPost':
                    this.processMentionInPost(this.model.get('noteData'));
                    break;
                default:
                    this.process();
            }
        },

        process: function () {
            var type = this.model.get('type');
            if (!type) return;
            type = type.replace(/ /g, '');

            var viewName = (this.getMetadata().get('clientDefs.Notification.itemViews.' + type)) || 'Notifications.Items.' + type.replace(/ /g, '');
            this.createView('notification', viewName, {
                model: this.model,
                el: this.params.containerEl + ' li[data-id="' + this.model.id + '"]',
            });
        },

        processNote: function (data) {
            this.wait(true);
            this.getModelFactory().create('Note', function (model) {
                model.set(data);
                var viewName = 'Stream.Notes.' + data.type;
                this.createView('notification', viewName, {
                    model: model,
                    isUserStream: true,
                    el: this.params.containerEl + ' li[data-id="' + this.model.id + '"]',
                    onlyContent: true,
                });
                this.wait(false);
            }, this);
        },

        processMentionInPost: function (data) {
            this.wait(true);
            this.getModelFactory().create('Note', function (model) {
                model.set(data);
                var viewName = 'Stream.Notes.MentionInPost';
                this.createView('notification', viewName, {
                    model: model,
                    userId: this.model.get('userId'),
                    isUserStream: true,
                    el: this.params.containerEl + ' li[data-id="' + this.model.id + '"]',
                    onlyContent: true,
                });
                this.wait(false);
            }, this);
        },

    });
});

