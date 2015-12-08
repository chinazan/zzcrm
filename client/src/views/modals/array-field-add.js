
Fox.define('Views.Modals.ArrayFieldAdd', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'add-modal',

        template: 'modals/array-field-add',

        data: function () {
            return {
                optionList: this.options.options,
                translatedOptions: this.options.translatedOptions
            };
        },

        events: {
            'click button[data-action="add"]': function (e) {
                var value = $(e.currentTarget).data('value');
                this.trigger('add', value);
            },
        },

        setup: function () {

            this.header = this.translate('Add Item');

            this.buttonList = [
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

