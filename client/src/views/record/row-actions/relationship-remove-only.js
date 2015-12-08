
Fox.define('Views.Record.RowActions.RelationshipRemoveOnly', 'Views.Record.RowActions.Relationship', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            if (this.options.acl.edit) {
                return [
                    {
                        action: 'removeRelated',
                        label: 'Remove',
                        data: {
                            id: this.model.id
                        }
                    }
                ];
            }
        },

    });

});

