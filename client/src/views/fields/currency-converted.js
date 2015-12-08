Fox.define('Views.Fields.CurrencyConverted', 'Views.Fields.Float', function (Dep) {

    return Dep.extend({
    
        detailTemplate: 'fields.currency.detail',

        listTemplate: 'fields.currency.detail',
    
        data: function () {
            return _.extend({
                currencyValue: this.getConfig().get('baseCurrency'),
            }, Dep.prototype.data.call(this));
        },

    });
});

