
Fox.define('Views.User.Modals.Access', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'user-access',

        multiple: false,

        template: 'user.modals.access',

        header: false,

        data: function () {
            return {
                assignmentPermission: this.options.aclData.assignmentPermission,
                userPermission: this.options.aclData.userPermission,
                levelListTranslation: this.getLanguage().get('Role', 'options', 'levelList') || {}
            };
        },

        setup: function () {
            this.buttons = [
                {
                    name: 'cancel',
                    label: 'Cancel',
                    onClick: function (dialog) {
                        dialog.close();
                    }
                }
            ];

            this.createView('table', 'Role.Record.Table', {
                aclData: this.options.aclData.table,
                final: true,
            });

            this.header = this.translate('Access');

        },

    });
});

