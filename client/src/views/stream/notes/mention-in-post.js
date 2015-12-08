
Fox.define('Views.Stream.Notes.MentionInPost', 'Views.Stream.Note', function (Dep) {

    return Dep.extend({

        template: 'stream.notes.post',

        messageName: 'mentionInPost',

        setup: function () {
            if (this.model.get('post')) {
                this.createField('post', null, null, 'Stream.Fields.Post');
            }
            if ((this.model.get('attachmentsIds') || []).length) {
                this.createField('attachments', 'attachmentMultiple', {}, 'Stream.Fields.AttachmentMultiple');
            }

            var data = this.model.get('data');

            this.messageData['mentioned'] = this.options.userId;

            if (this.isUserStream) {
                if (this.options.userId == this.getUser().id) {
                    this.messageData['mentioned'] = this.translate('you');
                }
            }

            this.createMessage();
        }

    });
});

