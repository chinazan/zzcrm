
Fox.define('views/admin/field-manager/fields/options', 'views/fields/array', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);

            this.translatedOptions = this.getLanguage().get(this.options.scope, 'options', this.options.field) || {};
        },

        getItemHtml: function (value) {
            var translatedValue = this.translatedOptions[value] || value;

            var html = '' +
            '<div class="list-group-item link-with-role form-inline" data-value="' + value + '">' +
                '<div class="pull-left" style="width: 92%; display: inline-block;">' +
                    '<input name="translatedValue" data-value="' + value + '" class="role form-control input-sm pull-right" value="'+translatedValue+'">' + 
                    '<div>' + value + '</div>' +
                '</div>' +
                '<div style="width: 8%; display: inline-block; vertical-align: top;">' +
                    '<a href="javascript:" class="pull-right" data-value="' + value + '" data-action="removeValue"><span class="glyphicon glyphicon-remove"></a>' +
                '</div><br style="clear: both;" />' +
            '</div>';

            return html;
        },

        fetch: function () {
            var data = Dep.prototype.fetch.call(this);
            data.translatedOptions = {};
            (data[this.name] || []).forEach(function (value) {
                data.translatedOptions[value] = this.$el.find('input[name="translatedValue"][data-value="'+value+'"]').val() || value;
            }, this);

            return data;
        }

    });

});
