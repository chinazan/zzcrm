
Fox.define('Views.Stream.Notes.EmailReceived', 'Views.Stream.Note', function (Dep) {

    return Dep.extend({

        template: 'stream.notes.email-received',

        isRemovable: true,

        isSystemAvatar: true,

        data: function () {
            return _.extend({
                emailId: this.emailId,
                emailName: this.emailName,
                hasPost: this.hasPost,
                hasAttachments: this.hasAttachments
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            var data = this.model.get('data') || {};

            this.emailId = data.emailId;
            this.emailName = data.emailName;

            if (
                this.parentModel
                &&
                (this.model.get('parentType') == this.parentModel.name && this.model.get('parentId') == this.parentModel.id)
            ) {
                if (this.model.get('post')) {
                    this.createField('post', null, null, 'Stream.Fields.Post');
                    this.hasPost = true;
                }
                if ((this.model.get('attachmentsIds') || []).length) {
                    this.createField('attachments', 'attachmentMultiple', {}, 'Stream.Fields.AttachmentMultiple');
                    this.hasAttachments = true;
                }
            }

            this.messageData['email'] = '<a href="#Email/view/' + data.emailId + '">' + data.emailName + '</a>';

            this.messageName = 'emailReceived';

            if (data.isInitial) {
                this.messageName += 'Initial';
            }

            if (data.personEntityId) {
                this.messageName += 'From';
                this.messageData['from'] = '<a href="#'+data.personEntityType+'/view/' + data.personEntityId + '">' + data.personEntityName + '</a>';
            }

            if (this.model.get('parentType') === data.personEntityType && this.model.get('parentId') == data.personEntityId) {
                this.isThis = true;
            }

            if (this.isThis) {
                this.messageName += 'This';
            }

            this.createMessage();
        },

    });
});

