
Fox.define('Views.Modals.Duplicate', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'duplicate-modal',

        header: false,

        template: 'modals.duplicate',

        data: function () {
            return {
                scope: this.scope,
                duplicates: this.duplicates
            };
        },

        setup: function () {
            this.buttons = [
                {
                    name: 'save',
                    label: 'Save',
                    style: 'danger',
                    onClick: function (dialog) {
                        this.trigger('save');
                        dialog.close();
                    }.bind(this),
                },
                {
                    name: 'cancel',
                    label: 'Cancel',
                    onClick: function (dialog) {
                        dialog.close();
                    }
                }
            ];
            this.scope = this.options.scope;
            this.duplicates = this.options.duplicates;
        },

    });
});

