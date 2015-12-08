
Fox.define('Views.Record.RowActions.RelationshipNoUnlink', 'Views.Record.RowActions.Relationship', function (Dep) {

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

