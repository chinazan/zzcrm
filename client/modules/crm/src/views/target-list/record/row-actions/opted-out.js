
Fox.define('crm:views/target-list/record/row-actions/opted-out', 'views/record/row-actions/default', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            return [
                {
                    action: 'cancelOptOut',
                    label: 'Cancel Opt-Out',
                    data: {
                        id: this.model.id,
                        type: this.model.name
                    }
                }
            ];
        }
    });
});

