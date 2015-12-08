
Fox.define('Views.Fields.Varchar', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        type: 'varchar',

        searchTemplate: 'fields.varchar.search',

        setupSearch: function () {
            this.searchParams.typeOptions = ['startsWith', 'contains', 'equals'];
        },

        fetch: function () {
            var data = {};
            var value = this.$element.val();
            if (this.params.trim) {
                if (typeof value.trim === 'function') {
                    value = value.trim();
                }
            }
            data[this.name] = value;
            return data;
        },

        fetchSearch: function () {
            var value = this.$element.val();
            if (typeof value.trim === 'function') {
                value = value.trim();
            }
            var type = this.$el.find('[name="'+this.name+'-type"]').val() || 'startsWith';
            if (value) {
                var data = {
                    value: value,
                    type: type
                }
                return data;
            }
            return false;
        }

    });
});

