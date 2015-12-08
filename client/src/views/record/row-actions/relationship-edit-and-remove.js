
Fox.define('views/record/row-actions/relationship-edit-and-remove', 'views/record/row-actions/relationship', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            if (this.options.acl.edit) {
                return [
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
                ];
            }
        },

    });

});

