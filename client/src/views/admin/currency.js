
Fox.define('views/admin/currency', 'views/settings/record/edit', function (Dep) {

    return Dep.extend({

        layoutName: 'currency',

        setup: function () {
            Dep.prototype.setup.call(this);
        },

        afterRender: function () {
            var currencyListField = this.getFieldView('currencyList');
            var defaultCurrencyField = this.getFieldView('defaultCurrency');
            var baseCurrencyField = this.getFieldView('baseCurrency');

            var currencyRatesField = this.getFieldView('currencyRates');

            if (currencyListField) {
                this.listenTo(currencyListField, 'change', function () {
                    var data = currencyListField.fetch();
                    var options = data.currencyList;
                    if (defaultCurrencyField) {
                        defaultCurrencyField.params.options = options;
                        defaultCurrencyField.render();
                    }
                    if (baseCurrencyField) {
                        baseCurrencyField.params.options = options;
                        baseCurrencyField.render();
                    }
                    if (currencyRatesField) {
                        currencyRatesField.render();
                    }
                }, this);
            }

            if (baseCurrencyField) {
                this.listenTo(baseCurrencyField, 'change', function () {
                    if (currencyRatesField) {
                        currencyRatesField.render();
                    }
                }, this);
            }
        },

    });

});

