
Fox.define('views/notifications/items/system', 'views/notifications/notification', function (Dep) {

    return Dep.extend({

        template: 'notifications/items/system',

        data: function () {
            var data = Dep.prototype.data.call(this);
            data['message'] = this.model.get('message');
            return data;
        },

        setup: function () {
            var data = this.model.get('data') || {};
            this.userId = data.userId;
        }

    });
});

