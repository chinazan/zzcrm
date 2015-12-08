
Fox.define('views/record/panels/side', 'view', function (Dep) {

    return Dep.extend({

        template: 'record/panels/side',

        fieldList: null,

        data: function () {
            return {
                fieldList: this.getFieldList(),
                dates: this.dates,
            };
        },

        events: {
            'click .action': function (e) {
                var $el = $(e.currentTarget);
                var action = $el.data('action');
                var method = 'action' + Fox.Utils.upperCaseFirst(action);
                if (typeof this[method] == 'function') {
                    var data = $el.data();
                    this[method](data, e);
                    e.preventDefault();
                }
            }
        },

        mode: 'detail',

        actionList: null,

        buttonList: null,

        readOnly: false,

        inlineEditDisabled: false,

        init: function () {
            this.panelName = this.options.panelName;
            this.defs = this.options.defs || {};
        },

        setup: function () {
            this.buttonList = _.clone(this.defs.buttonList || this.buttonList || []);
            this.actionList = _.clone(this.defs.actionList || this.actionList || []);

            this.fieldList = this.options.fieldList || this.fieldList || [];
            this.dates = ('dates' in this.options) ? this.options.dates : false;
            this.mode = this.options.mode || this.mode;
            if (!this.readOnly) {
                if ('readOnly' in this.options) {
                    this.readOnly = this.options.readOnly;
                }
            }
            if (!this.inlineEditDisabled) {
                if ('inlineEditDisabled' in this.options) {
                    this.inlineEditDisabled = this.options.inlineEditDisabled;
                }
            }
            this.createFields();
        },

        getFieldList: function () {
            var fieldList = [];
            this.fieldList.forEach(function (item) {
                var field;
                if (typeof item === 'object') {
                    field = item.name;
                } else {
                   field = item;
                }
                if (field in this.model.defs.fields) {
                    fieldList.push(field);
                }
            }, this);
            return fieldList;
        },

        createField: function (field, readOnly, viewName) {
            var type = this.model.getFieldType(field) || 'base';
            viewName = viewName || this.model.getFieldParam(field, 'view') || this.getFieldManager().getViewName(type);

            var o = {
                model: this.model,
                el: this.options.el + ' .field-' + field,
                defs: {
                    name: field,
                    params: {},
                },
                mode: this.mode
            };
            if (this.readOnly) {
                o.readOnly = true;
            } else {
                if (readOnly !== null) {
                    o.readOnly = readOnly
                }
            }
            if (this.inlineEditDisabled) {
                o.inlineEditDisabled = true;
            }

            this.createView(field, viewName, o);
        },

        createFields: function () {
            this.fieldList.forEach(function (item) {
                var view = null;
                var field;
                var readOnly = null;
                if (typeof item === 'object') {
                    field = item.name;
                    view = item.view;
                    if ('readOnly' in item) {
                        readOnly = item.readOnly;
                    }
                } else {
                   field = item;
                }
                if (!(field in this.model.defs.fields)) {
                    return;
                }
                this.createField(field, readOnly, view);

            }, this);
        },

        getFields: function () {
            var fields = {};

            this.getFieldList().forEach(function (name) {
                fields[name] = this.getView(name);
            }, this);
            return fields;
        },

        getActionList: function () {
            return this.actionList || [];
        },

        getButtonList: function () {
            return this.buttonList || [];
        },

        actionRefresh: function () {
            this.model.fetch();
        }

    });
});

