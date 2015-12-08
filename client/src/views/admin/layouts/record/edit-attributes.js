

Fox.define('Views.Admin.Layouts.Record.EditAttributes', 'Views.Record.Base', function (Dep) {

    return Dep.extend({

        template: 'admin.layouts.record.edit-attributes',

        data: function () {
            return {
                attributeList: this.attributeList
            };
        },

        setup: function () {
            Dep.prototype.setup.call(this);

            this.attributeList = this.options.attributeList || [];
            this.attributeDefs = this.options.attributeDefs || {};

            this.attributeList.forEach(function (field) {
                var params = this.attributeDefs[field] || {};
                var type = params.type || 'base';

                var viewName = params.view || this.getFieldManager().getViewName(type);
                this.createField(field, viewName, params);
            }, this);
        }

    });
});
