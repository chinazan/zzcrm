
Fox.define('Views.Admin.Layouts.Rows', 'Views.Admin.Layouts.Base', function (Dep) {

    return Dep.extend({

        template: 'admin.layouts.rows',


        events: _.extend({
            'click #layout a[data-action="editField"]': function (e) {
                var data = {};
                this.dataAttributes.forEach(function (attr) {
                    data[attr] =  $(e.target).closest('li').data(Fox.Utils.toDom(attr))
                });
                this.openEditDialog(data);
            },
        }, Dep.prototype.events),

        dataAttributes: null,

        dataAttributesDefs: {},

        editable: false,

        data: function () {
            return {
                scope: this.scope,
                type: this.type,
                buttonList: this.buttonList,
                enabledFields: this.enabledFields,
                disabledFields: this.disabledFields,
                layout: this.rowLayout,
                dataAttributes: this.dataAttributes,
                dataAttributesDefs: this.dataAttributesDefs,
                editable: this.editable,
            };
        },

        afterRender: function () {
            $('#layout ul.enabled, #layout ul.disabled').sortable({
                connectWith: '#layout ul.connected'
            });
        },

        fetch: function () {
            var layout = [];
            $("#layout ul.enabled > li").each(function (i, el) {
                var o = {};
                this.dataAttributes.forEach(function (attr) {
                    var value = $(el).data(Fox.Utils.toDom(attr)) || null;
                    if (value) {
                        o[attr] = value;
                    }
                });
                layout.push(o);
            }.bind(this));
            return layout;
        },

        validate: function (layout) {
            if (layout.length == 0) {
                this.notify('Layout cannot be empty', 'error');
                return false;
            }
            return true;
        }
    });
});

