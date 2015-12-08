
Fox.define('Views.Stream.Notes.Post', 'Views.Stream.Note', function (Dep) {

    return Dep.extend({

        template: 'stream.notes.post',

        messageName: 'post',

        isEditable: true,

        isRemovable: true,

        setup: function () {
            if (this.model.get('post')) {
                this.createField('post', null, null, 'Stream.Fields.Post');
            }
            if ((this.model.get('attachmentsIds') || []).length) {
                this.createField('attachments', 'attachmentMultiple', {}, 'Stream.Fields.AttachmentMultiple');

                if (!this.model.get('post')) {
                    this.messageName = 'attach';
                    if (this.isThis) {
                        this.messageName += 'This';
                    }
                }
            }

            this.createMessage();
        },
    });
});

