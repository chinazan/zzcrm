
Fox.define('Crm:Views.Task.Record.List', 'Views.Record.List', function (Dep) {

    return Dep.extend({

        rowActionsView: 'Crm:Task.Record.RowActions.Default',

        actionSetCompleted: function (data) {
            var id = data.id;
            if (!id) {
                return;
            }
            var model = this.collection.get(id);
            if (!model) {
                return;
            }

            model.set('status', 'Completed');

            this.listenToOnce(model, 'sync', function () {
                this.notify(false);
                this.collection.fetch();
            }, this);

            this.notify('Saving...');
            model.save();

        },

    });

});
