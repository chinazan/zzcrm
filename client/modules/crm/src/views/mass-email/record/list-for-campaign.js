
Fox.define('crm:views/mass-email/record/list-for-campaign', 'views/record/list', function (Dep) {

    return Dep.extend({

        actionSendTest: function (data) {
            var id = data.id;

            var model = this.collection.get(id);
            if (!model) return;

            this.createView('sendTest', 'crm:views/mass-email/modals/send-test', {
                model: model
            }, function (view) {
                view.render();
            }, this);
        }

    });
});

