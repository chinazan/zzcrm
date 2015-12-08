
Fox.define('Views.Admin.Layouts.Relationships', 'Views.Admin.Layouts.Rows', function (Dep) {

    return Dep.extend({

        dataAttributes: ['name'],

        editable: false,

        setup: function () {
            Dep.prototype.setup.call(this);

            this.wait(true);

            this.getModelFactory().create(this.scope, function (model) {
                this.getHelper().layoutManager.get(this.scope, this.type, function (layout) {

                    var allFields = [];
                    for (var field in model.defs.links) {
                        if (['hasMany', 'hasChildren'].indexOf(model.defs.links[field].type) != -1) {
                            if (this.isLinkEnabled(model, field)) {
                                allFields.push(field);
                            }
                        }
                    }
                    allFields.sort(function (v1, v2) {
                        return this.translate(v1, 'links', this.scope).localeCompare(this.translate(v2, 'links', this.scope));
                    }.bind(this));

                    this.enabledFieldsList = [];

                    this.enabledFields = [];
                    this.disabledFields = [];
                    for (var i in layout) {
                        this.enabledFields.push({
                            name: layout[i],
                            label: this.getLanguage().translate(layout[i], 'links', this.scope)
                        });
                        this.enabledFieldsList.push(layout[i]);
                    }

                    for (var i in allFields) {
                        if (!_.contains(this.enabledFieldsList, allFields[i])) {
                            this.disabledFields.push({
                                name: allFields[i],
                                label: this.getLanguage().translate(allFields[i], 'links', this.scope)
                            });
                        }
                    }
                    this.rowLayout = this.enabledFields;

                    for (var i in this.rowLayout) {
                        this.rowLayout[i].label = this.getLanguage().translate(this.rowLayout[i].name, 'links', this.scope);
                    }

                    this.wait(false);
                }.bind(this), false);
            }.bind(this));
        },

        fetch: function () {
            var layout = [];
            $("#layout ul.enabled > li").each(function (i, el) {
                layout.push($(el).data('name'));
            }.bind(this));
            return layout;
        },

        validate: function () {
            return true;
        },

        isLinkEnabled: function (model, name) {
            return !model.getLinkParam(name, 'disabled') && !model.getLinkParam(name, 'layoutRelationshipsDisabled');
        }
    });
});

