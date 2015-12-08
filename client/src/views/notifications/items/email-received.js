
Fox.define('views/notifications/items/email-received', 'views/notifications/notification', function (Dep) {

    return Dep.extend({

        messageName: 'emailReceived',

        template: 'notifications/items/email-received',

        data: function () {
            return _.extend({
                emailId: this.emailId,
                emailName: this.emailName
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            var data = this.model.get('data') || {};

            this.userId = data.userId;

            this.messageData['entityType'] = Fox.Utils.upperCaseFirst((this.translate(data.entityType, 'scopeNames') || '').toLowerCase());
            if (data.personEntityId) {
                this.messageData['from'] = '<a href="#' + data.personEntityType + '/view/' + data.personEntityId + '">' + data.personEntityName + '</a>';
            } else {
                this.messageData['from'] = data.fromString || this.translate('empty address');
            }

            this.emailId = data.emailId;
            this.emailName = data.emailName;

            this.createMessage();
        }

    });
});

