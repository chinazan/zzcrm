
Fox.define('Views.InboundEmail.Modals.SelectFolder', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'select-folder-modal',

        template: 'inbound-email.modals.select-folder',

        data: function () {
            return {
                folders: this.options.folders,
            };
        },

        events: {
            'click button[data-action="select"]': function (e) {
                var value = $(e.currentTarget).data('value');
                this.trigger('select', value);
            },
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

        },

    });
});

