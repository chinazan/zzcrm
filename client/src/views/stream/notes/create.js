
Fox.define('Views.Stream.Notes.Create', 'Views.Stream.Note', function (Dep) {

    return Dep.extend({

        template: 'stream.notes.create',

        assigned: false,

        messageName: 'create',

        isRemovable: true,

        data: function () {
            return _.extend({
                statusText: this.statusText,
                statusStyle: this.statusStyle
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            if (this.model.get('data')) {
                var data = this.model.get('data');

                this.assignedUserId = data.assignedUserId || null;
                this.assignedUserName = data.assignedUserName || null;

                this.messageData['assignee'] = '<a href="#User/view/' + this.assignedUserId + '">' + this.assignedUserName + '</a>';

                if (this.assignedUserId) {
                    this.messageName = 'createAssigned';
                    if (this.isThis) {
                        this.messageName += 'This';
                    }
                }

                if (this.isUserStream) {
                    if (this.assignedUserId == this.getUser().id) {
                        this.messageData['assignee'] = this.translate('you');
                    }
                }

                if (data.statusField) {
                    var statusField = this.statusField = data.statusField;
                    var statusValue = data.statusValue;
                    this.statusStyle = data.statusStyle || 'default';
                    this.statusText = this.getLanguage().translateOption(statusValue, statusField, this.model.get('parentType'));
                }
            }

            this.createMessage();
        },
    });
});

