
Fox.define('crm:views/mass-email/detail', 'views/detail', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            if (~['Draft', 'Pending'].indexOf(this.model.get('status'))) {
                if (this.getAcl().checkModel(this.model, 'edit')) {
                    this.menu.buttons.push({
                        'label': 'Sent Test',
                        'action': 'sendTest',
                        'acl': 'edit'
                    });
                }
            }
        },

        actionSendTest: function () {
            this.createView('sendTest', 'crm:views/mass-email/modals/send-test', {
                model: this.model
            }, function (view) {
                view.render();
            }, this);
        }

    });
});

