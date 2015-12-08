Fox.define('Views.Settings.Record.Edit', 'Views.Record.Edit', function (Dep) {

    return Dep.extend({

        sideView: null,
        
        layoutName: 'settings',

        buttons: [
            {
                name: 'save',
                label: 'Save',
                style: 'primary',
            },
            {
                name: 'cancel',
                label: 'Cancel',
            }
        ],
        
        setup: function () {
            Dep.prototype.setup.call(this);
            
            this.listenTo(this.model, 'after:save', function () {
                this.getConfig().set(this.model.toJSON());
                this.getConfig().storeToCache();
            }.bind(this));
        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);
            
            var currencyListField = this.getFieldView('currencyList');
            var defaultCurrencyField = this.getFieldView('defaultCurrency');
            if (currencyListField && defaultCurrencyField) {
                this.listenTo(currencyListField, 'change', function () {
                    var data = currencyListField.fetch();
                    var options = data.currencyList;
                    defaultCurrencyField.params.options = options;
                    defaultCurrencyField.render();
                }.bind(this));
            }
        },

        exit: function (after) {
            if (after == 'cancel') {
                this.getRouter().navigate('#Admin', {trigger: true});
            }
        },
    });
});

