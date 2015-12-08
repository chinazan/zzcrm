
Fox.define('views/notifications/items/assign', 'views/notifications/notification', function (Dep) {

    return Dep.extend({

        messageName: 'assign',

        template: 'notifications/items/assign',

        setup: function () {
            var data = this.model.get('data') || {};

            this.userId = data.userId;

            this.messageData['entityType'] = Fox.Utils.upperCaseFirst((this.translate(data.entityType, 'scopeNames') || '').toLowerCase());
            this.messageData['entity'] = '<a href="#' + data.entityType + '/view/' + data.entityId + '">' + data.entityName + '</a>';

            this.createMessage();
        },

    });
});

