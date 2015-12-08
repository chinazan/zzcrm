Fox.define('models/preferences', 'model', function (Dep) {

    return Dep.extend({

        name: "Preferences",

        settings: null,

        getTimeZoneOptions: function () {
            if (this.settings) {
                return this.settings.getFieldParam('timeZone', 'options');
            }
        },

        getLanguageOptions: function () {
            if (this.settings) {
                return this.settings.getFieldParam('language', 'options');
            }
        },

        getDefaultCurrencyOptions: function () {
            if (this.settings) {
                return this.settings.getDefaultCurrencyOptions();
            }
        },

        getDashletOptions: function (id) {
            var value = this.get('dashletOptions') || {};
            return value[id] || false;
        },

    });

});
