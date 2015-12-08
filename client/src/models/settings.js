Fox.define('models/settings', 'model-offline', function (Dep) {

    return Dep.extend({

        name: 'Settings',

        getDefaultCurrencyOptions: function () {
            return this.get('currencyList') || [];
        },

        getBaseCurrencyOptions: function () {
            return this.get('currencyList') || [];
        },

    });

});
