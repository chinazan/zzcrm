
Fox.define('views/notifications/items/message', 'views/notifications/notification', function (Dep) {

    return Dep.extend({

        template: 'notifications/items/message',

        data: function () {
            return _.extend({
                style: this.style,
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            var data = this.model.get('data') || {};

            this.style = data.style || 'text-muted';

            this.messageTemplate = this.model.get('message') || data.message || '';

            this.userId = data.userId;

            this.messageData['entityType'] = Fox.Utils.upperCaseFirst((this.translate(data.entityType, 'scopeNames') || '').toLowerCase());

            this.messageData['user'] = '<a href="#User/view/' + data.userId + '">' + data.userName + '</a>';
            this.messageData['entity'] = '<a href="#'+data.entityType+'/view/' + data.entityId + '">' + data.entityName + '</a>';

            this.createMessage();
        }

    });
});

