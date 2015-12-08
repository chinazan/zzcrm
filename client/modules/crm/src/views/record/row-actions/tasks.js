
Fox.define('crm:views/record/row-actions/tasks', 'views/record/row-actions/relationship-no-unlink', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            var list = [{
                action: 'viewRelated',
                label: 'View',
                data: {
                    id: this.model.id
                }
            }];
            if (this.options.acl.edit) {
                list.push({
                    action: 'editRelated',
                    label: 'Edit',
                    data: {
                        id: this.model.id
                    }
                });

                if (!~['Completed', 'Canceled'].indexOf(this.model.get('status'))) {
                    list.push({
                        action: 'Complete',
                        html: this.translate('Complete', 'labels', 'Task'),
                        data: {
                            id: this.model.id
                        }
                    });
                }


                list.push({
                    action: 'removeRelated',
                    label: 'Remove',
                    data: {
                        id: this.model.id
                    }
                });

            }
            return list;
        }

    });

});

