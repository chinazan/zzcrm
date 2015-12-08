
Fox.define('Views.Fields.EnumInt', 'Views.Fields.Enum', function (Dep) {

    return Dep.extend({

        type: 'enumInt',

        listTemplate: 'fields.enum.detail',

        detailTemplate: 'fields.enum.detail',

        editTemplate: 'fields.enum.edit',

        searchTemplate: 'fields.enum.search',

        validations: [],

        fetch: function () {
            var value = parseInt(this.$el.find('[name="' + this.name + '"]').val());
            var data = {};
            data[this.name] = value;
            return data;
        },

        fetchSearch: function () {
            var list = this.$element.val().split(':,:');

            list.forEach(function (item, i) {
                list[i] = parseInt(list[i]);
            }, this);

            if (list.length == 1 && list[0] == '') {
                list = [];
            }

            if (list.length == 0) {
                return false;
            }

            var data = {
                type: 'in',
                value: list
            };
            return data;
        },

    });
});

