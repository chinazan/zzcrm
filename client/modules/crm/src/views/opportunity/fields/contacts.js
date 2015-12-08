Fox.define('Crm:Views.Opportunity.Fields.Contacts', 'Views.Fields.LinkMultipleWithRole', function (Dep) {

    return Dep.extend({
    
        getSelectFilters: function () {
            if (this.model.get('accountId')) {
                return {
                    'account': {
                        type: 'equals',
                        field: 'accountId',
                        value: this.model.get('accountId'),
                        valueName: this.model.get('accountName'),
                    }
                };                
            }
        },
    });

});
