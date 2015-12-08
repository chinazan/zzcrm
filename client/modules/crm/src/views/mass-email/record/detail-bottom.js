

Fox.define('crm:views/mass-email/record/detail-bottom', 'views/record/detail-bottom', function (Dep) {

    return Dep.extend({

        setupPanels: function () {
            Dep.prototype.setupPanels.call(this);

            this.panelList.unshift({
                name: 'queueItems',
                label: this.translate('queueItems', 'links', 'MassEmail'),
                view: 'views/record/panels/relationship',
                select: false,
                create: false,
                layout: 'listForMassEmail',
                rowActionsView: 'views/record/row-actions/empty',
                filterList: ['all', 'pending', 'sent', 'failed']
            });
        },

        afterRender: function () {
            Dep.prototype.setupPanels.call(this);
        }

    });
});


