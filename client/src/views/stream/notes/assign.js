
Fox.define('Views.Stream.Notes.Assign', 'Views.Stream.Note', function (Dep) {

    return Dep.extend({

        template: 'stream.notes.assign',

        messageName: 'assign',

        data: function () {
            return _.extend({
            }, Dep.prototype.data.call(this));
        },

        init: function () {
            if (this.getUser().isAdmin()) {
                this.isRemovable = true;
            }
            Dep.prototype.init.call(this);
        },

        setup: function () {
            var data = this.model.get('data');

            this.assignedUserId = data.assignedUserId || null;
            this.assignedUserName = data.assignedUserName || null;

            this.messageData['assignee'] = '<a href="#User/view/' + data.assignedUserId + '">' + data.assignedUserName + '</a>';

            if (this.isUserStream) {
                if (this.assignedUserId == this.getUser().id) {
                    this.messageData['assignee'] = this.translate('you');
                }
            }

            this.createMessage();
        },

    });
});

