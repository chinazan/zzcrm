
Fox.define('Views.Notifications.List', 'Views.Record.ListExpanded', function (Dep) {

    return Dep.extend({

        actionViewRecord: function (data) {
            var id = data.id;
            var scope = data.scope;

            var viewName = this.getMetadata().get('clientDefs.' + scope + '.modalViews.detail') || 'Modals.Detail';

            this.notify('Loading...');
            this.createView('quickDetail', viewName, {
                scope: scope,
                id: id
            }, function (view) {
                view.once('after:render', function () {
                    Fox.Ui.notify(false);
                });
                view.render();
            }.bind(this));
        }

    });

});
