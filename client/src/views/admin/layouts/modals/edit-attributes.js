

Fox.define('Views.Admin.Layouts.Modals.EditAttributes', ['Views.Modal', 'Model'], function (Dep, Model) {

    return Dep.extend({

        _template: '<div class="edit-container">{{{edit}}}</div>',

        setup: function () {
            this.buttons = [
                {
                    name: 'save',
                    text: this.translate('Apply'),
                    style: 'primary',
                    onClick: function (dialog) {
                        this.save();
                    }.bind(this)
                },
                {
                    name: 'cancel',
                    text: 'Cancel',
                    onClick: function (dialog) {
                        dialog.close();
                    }
                }
            ];

            var model = new Model();
            model.name = 'LayoutManager';
            model.set(this.options.attributes || {});

            this.header = this.translate(this.options.name, 'fields', this.options.scope);

            var attributeList = Fox.Utils.clone(this.options.attributeList || []);
            var index = attributeList.indexOf('name');
            if (~index) {
                attributeList.splice(index, 1);
            }

            this.createView('edit', 'Admin.Layouts.Record.EditAttributes', {
                el: this.options.el + ' .edit-container',
                attributeList: attributeList,
                attributeDefs: this.options.attributeDefs,
                model: model
            });
        },

        save: function () {
            var editView = this.getView('edit');
            var attrs = editView.fetch();

            editView.model.set(attrs, {silent: true});
            if (editView.validate()) {
                return;
            }

            var attributes = {};
            attributes = editView.model.attributes;

            this.trigger('after:save', attributes);
            return true;
        },
    });
});
