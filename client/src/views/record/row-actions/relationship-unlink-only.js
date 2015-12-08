
Fox.define('Views.Record.RowActions.RelationshipUnlinkOnly', 'Views.Record.RowActions.Relationship', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            if (this.options.acl.edit) {
                return [
                    {
                        action: 'unlinkRelated',
                        label: 'Unlink',
                        data: {
                            id: this.model.id
                        }
                    }
                ];
            }
        },
    });

});

