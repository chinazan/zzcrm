
Fox.define('Crm:Views.Task.Detail', 'Views.Detail', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            if (!~['Completed', 'Canceled'].indexOf(this.model.get('status'))) {
                if (this.getAcl().checkModel(this.model, 'edit')) {
                    this.menu.buttons.push({
                        'label': 'Complete',
                        'action': 'setCompleted',
                        icon: 'glyphicon glyphicon-ok',
                        'acl': 'edit',
                    });
                }
                this.listenToOnce(this.model, 'sync', function () {
                    if (~['Completed', 'Canceled'].indexOf(this.model.get('status'))) {
                        this.$el.find('[data-action="setCompleted"]').remove();
                    }
                }, this);
            }
        },

        actionSetCompleted: function (data) {
            var id = data.id;

            this.model.save({
                status: 'Completed'
            }, {
                patch: true,
                success: function () {
                    Fox.Ui.success(this.translate('Saved'));
                    this.$el.find('[data-action="setCompleted"]').remove();
                }.bind(this),
            });

        },

    });

});
