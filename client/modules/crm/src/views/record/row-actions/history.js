
Fox.define('Crm:Views.Record.RowActions.History', 'Views.Record.RowActions.Relationship', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            var list = [{
                action: 'viewRelated',
                label: 'View',
                data: {
                    id: this.model.id
                }
            }];
            if (this.model.name == 'Email') {
                list.push({
                    action: 'reply',
                    html: this.translate('Reply', 'labels', 'Email'),
                    data: {
                        id: this.model.id
                    }
                });
            }
            if (this.options.acl.edit) {
                list = list.concat([
                    {
                        action: 'editRelated',
                        label: 'Edit',
                        data: {
                            id: this.model.id
                        }
                    },
                    {
                        action: 'removeRelated',
                        label: 'Remove',
                        data: {
                            id: this.model.id
                        }
                    }
                ]);
            }
            return list;
        }

    });

});

