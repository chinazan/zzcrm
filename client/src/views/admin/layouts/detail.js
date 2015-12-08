
Fox.define('views/admin/layouts/detail', 'views/admin/layouts/grid', function (Dep) {

    return Dep.extend({

        dataAttributes: ['name', 'fullWidth'],

        dataAttributesDefs: {
            fullWidth: {
                type: 'float'
            }
        },

        ignoreList: ['modifiedAt', 'createdAt', 'modifiedBy', 'createdBy', 'assignedUser', 'teams'],

        setup: function () {
            Dep.prototype.setup.call(this);

            this.wait(true);
            this.loadLayout(function () {
                this.wait(false);
            }.bind(this));
        },

        loadLayout: function (callback) {
            this.getModelFactory().create(this.scope, function (model) {
                this.getHelper().layoutManager.get(this.scope, this.type, function (layout) {
                    this.readDataFromLayout(model, layout);
                    if (callback) {
                        callback();
                    }
                }.bind(this), false);
            }.bind(this));
        },

        readDataFromLayout: function (model, layout) {
            var allFields = [];
            for (var field in model.defs.fields) {
                if (this.isFieldEnabled(model, field)) {
                    allFields.push(field);
                }
            }

            this.enabledFields = [];
            this.disabledFields = [];

            this.panels = layout;

            layout.forEach(function (panel) {
                panel.rows.forEach(function (row) {
                    row.forEach(function (cell, i) {
                        if (i == this.columnCount) {
                            return;
                        }
                        this.enabledFields.push(cell.name);
                    }.bind(this));
                }.bind(this));
            }.bind(this));

            allFields.sort(function (v1, v2) {
                return this.translate(v1, 'fields', this.scope).localeCompare(this.translate(v2, 'fields', this.scope));
            }.bind(this));


            for (var i in allFields) {
                if (!_.contains(this.enabledFields, allFields[i])) {
                    this.disabledFields.push(allFields[i]);
                }
            }
        },

        isFieldEnabled: function (model, name) {
            if (this.ignoreList.indexOf(name) != -1) {
                return false;
            }
            return !model.getFieldParam(name, 'disabled') && !model.getFieldParam(name, 'layoutDetailDisabled');
        }
    });
});

