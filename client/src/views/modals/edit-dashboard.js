

Fox.define('Views.Modals.EditDashboard', ['Views.Modal', 'Model'], function (Dep, Model) {

    return Dep.extend({

        cssName: 'edit-dashboard',

        template: 'modals.edit-dashboard',

        data: function () {
            return {

            };
        },

        events: {
            'click button.add': function (e) {
                var name = $(e.currentTarget).data('name');
                this.getParentView().addDashlet(name);
                this.close();
            },
        },

        setup: function () {
            this.buttons = [
                {
                    name: 'save',
                    label: 'Save',
                    style: 'primary',
                    onClick: function (dialog) {
                        if (this.save()) {
                            dialog.close();
                        }
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

            var dashboardLayout = this.options.dashboardLayout || [];

            var dashboardTabList = [];
            dashboardLayout.forEach(function (item) {
                if (item.name) {
                    dashboardTabList.push(item.name);
                }
            }, this);

            var model = new Model();
            model.name = 'Preferences';

            model.set('dashboardTabList', dashboardTabList);
            this.createView('dashboardTabList', 'Fields.Array', {
                el: this.options.el + ' .field-dashboardTabList',
                defs: {
                    name: 'dashboardTabList',
                    params: {
                        required: true,
                        noEmptyString: true,
                    }
                },
                mode: 'edit',
                model: model
            });

            this.header = this.translate('Edit Dashboard');

            this.dashboardLayout = this.options.dashboardLayout;
        },

        save: function () {
            var dashboardTabListView = this.getView('dashboardTabList');
            dashboardTabListView.fetchToModel();
            if (dashboardTabListView.validate()) {
                return;
            }

            var attributes = {};
            attributes.dashboardTabList = dashboardTabListView.model.get('dashboardTabList');

            this.trigger('after:save', attributes);
            return true;
        },
    });
});


