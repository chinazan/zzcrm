
Fox.define('Views.Record.RowActions.RelationshipViewAndEdit', 'Views.Record.RowActions.Relationship', function (Dep) {

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
            }
            return list;
        },

    });

});

