
Fox.define('Views.Fields.EnumFloat', 'Views.Fields.EnumInt', function (Dep) {

    return Dep.extend({

        type: 'enumFloat',

        fetch: function () {
            var value = parseFloat(this.$el.find('[name="' + this.name + '"]').val());
            var data = {};
            data[this.name] = value;
            return data;
        },

        fetchSearch: function () {
            var list = this.$element.val().split(':,:');

            list.forEach(function (item, i) {
                list[i] = parseFloat(list[i]);
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

