
Fox.define('crm:views/case/fields/contacts', 'views/fields/link-multiple-with-primary', function (Dep) {

    return Dep.extend({

        primaryLink: 'contact',

        getSelectFilters: function () {
            if (this.model.get('accountId')) {
                return {
                    'account': {
                        type: 'equals',
                        field: 'accountId',
                        value: this.model.get('accountId'),
                        valueName: this.model.get('accountName')
                    }
                };
            }
        }

    });

});
