
Fox.define('Views.Fields.Currency', 'Views.Fields.Float', function (Dep) {

    return Dep.extend({

        type: 'currency',

        editTemplate: 'fields.currency.edit',

        detailTemplate: 'fields.currency.detail',

        listTemplate: 'fields.currency.detail',

        data: function () {
            return _.extend({
                currencyFieldName: this.currencyFieldName,
                currencyValue: this.model.get(this.currencyFieldName) || this.getPreferences().get('defaultCurrency') || this.getConfig().get('defaultCurrency'),
                currencyOptions: this.currencyOptions,
                currencyList: this.currencyList
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            Dep.prototype.setup.call(this);
            this.currencyFieldName = this.name + 'Currency';
            this.currencyList = this.getConfig().get('currencyList') || ['USD', 'EUR'];
            var currencyValue = this.currencyValue = this.model.get(this.currencyFieldName) || this.getConfig().get('defaultCurrency');

        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);
            if (this.mode == 'edit') {
                this.$currency = this.$el.find('[name="' + this.currencyFieldName + '"]');
            }
        },

        fetch: function () {
            var value = this.$element.val();
            value = this.parse(value);

            var data = {};

            var currencyValue = this.$currency.val();
            if (value === null) {
                currencyValue = null;
            }

            data[this.name] = value;
            data[this.currencyFieldName] = currencyValue
            return data;
        },
    });
});

