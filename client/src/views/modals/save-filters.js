

Fox.define('Views.Modals.SaveFilters', ['Views.Modal', 'Model'], function (Dep, Model) {

    return Dep.extend({

        cssName: 'save-filters',

        template: 'modals.save-filters',

        data: function () {
            return {
                dashletList: this.dashletList,
            };
        },

        setup: function () {
            this.buttons = [
                {
                    name: 'save',
                    label: 'Save',
                    style: 'primary',
                    onClick: function (dialog) {
                        this.save();
                    }.bind(this)
                },
                {
                    name: 'cancel',
                    label: 'Cancel',
                    onClick: function (dialog) {
                        dialog.close();
                    }
                }
            ];

            this.header = this.translate('Save Filters');

            var model = new Model();
            this.createView('name', 'Fields.Varchar', {
                el: this.options.el + ' .field-name',
                defs: {
                    name: 'name',
                    params: {
                        required: true
                    }
                },
                mode: 'edit',
                model: model
            });
        },

        save: function () {
            var nameView = this.getView('name');
            nameView.fetchToModel();
            if (nameView.validate()) {
                return;
            }
            this.trigger('save', nameView.model.get('name'));
            return true;
        },
    });
});


