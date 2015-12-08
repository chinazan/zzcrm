
Fox.define('crm:views/record/row-actions/activities', 'views/record/row-actions/relationship', function (Dep) {

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
                if (this.model.name == 'Meeting' || this.model.name == 'Call') {
                    list.push({
                        action: 'setHeld',
                        html: this.translate('Set Held', 'labels', 'Meeting'),
                        data: {
                            id: this.model.id
                        }
                    });
                    list.push({
                        action: 'setNotHeld',
                        html: this.translate('Set Not Held', 'labels', 'Meeting'),
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

