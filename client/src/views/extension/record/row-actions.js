
Fox.define('Views.Extension.Record.RowActions', 'Views.Record.RowActions.Default', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            if (this.options.acl.edit) {

                if (this.model.get('isInstalled')) {
                    return [
                        {
                            action: 'uninstall',
                            label: 'Uninstall',
                            data: {
                                id: this.model.id
                            }
                        },

                    ];
                } else {
                    return [
                        {
                            action: 'install',
                            label: 'Install',
                            data: {
                                id: this.model.id
                            }
                        },
                        {
                            action: 'quickRemove',
                            label: 'Remove',
                            data: {
                                id: this.model.id
                            }
                        }
                    ];
                }
            }
        },

    });

});

