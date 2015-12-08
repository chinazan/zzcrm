

Fox.define('crm:views/campaign/record/detail-bottom', 'views/record/detail-bottom', function (Dep) {

    return Dep.extend({

        setupPanels: function () {
            Dep.prototype.setupPanels.call(this);

            this.panelList.unshift({
                name: 'massEmails',
                label: this.translate('massEmails', 'links', 'Campaign'),
                view: 'views/record/panels/relationship',
                sticked: true,
                hidden: true,
                select: false,
                recordListView: 'crm:views/mass-email/record/list-for-campaign',
                rowActionsView: 'crm:views/mass-email/record/row-actions/for-campaign'
            });

            this.panelList.unshift({
                name: 'trackingUrls',
                label: this.translate('trackingUrls', 'links', 'Campaign'),
                view: 'views/record/panels/relationship',
                sticked: true,
                hidden: true,
                select: false,
                rowActionsView: 'views/record/row-actions/relationship-no-unlink'
            });

            this.listenTo(this.model, 'change', function () {
                this.manageMassEmails();
            }, this);
        },

        afterRender: function () {
            Dep.prototype.setupPanels.call(this);
            this.manageMassEmails();
        },

        manageMassEmails: function () {
            var parentView = this.getParentView();
            if (!parentView) return;
            if (~['Email', 'Newsletter'].indexOf(this.model.get('type'))) {
                parentView.showPanel('massEmails');
                parentView.showPanel('trackingUrls');
            } else {
                parentView.hidePanel('massEmails');
                parentView.hidePanel('trackingUrls');
            }
        }


    });
});


