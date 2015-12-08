
Fox.define('crm:views/case/record/detail', 'views/record/detail', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            if (this.getAcl().checkModel(this.model, 'edit')) {
                if (['Closed', 'Rejected', 'Duplicate'].indexOf(this.model.get('status')) == -1) {
                    this.dropdownItemList.push({
                        'label': 'Close',
                        'name': 'close'
                    });
                    this.dropdownItemList.push({
                        'label': 'Reject',
                        'name': 'reject'
                    });
                }
            }
        },

        actionClose: function () {
                this.model.save({
                    status: 'Closed'
                }, {
                    patch: true,
                    success: function () {
                        Fox.Ui.success(this.translate('Closed', 'labels', 'Case'));
                        this.removeButton('close');
                        this.removeButton('reject');
                    }.bind(this),
                });
        },

        actionReject: function () {
                this.model.save({
                    status: 'Rejected'
                }, {
                    patch: true,
                    success: function () {
                        Fox.Ui.success(this.translate('Rejected', 'labels', 'Case'));
                        this.removeButton('close');
                        this.removeButton('reject');
                    }.bind(this),
                });
        },

    });
});

