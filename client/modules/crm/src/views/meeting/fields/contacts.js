Fox.define('Crm:Views.Meeting.Fields.Contacts', 'Crm:Views.Meeting.Fields.Attendees', function (Dep) {

    return Dep.extend({
    
        getSelectFilters: function () {
            if (this.model.get('parentType') == 'Account' && this.model.get('parentId')) {
                return {
                    'account': {
                        type: 'equals',
                        field: 'accountId',
                        value: this.model.get('parentId'),
                        valueName: this.model.get('parentName'),
                    }
                };                
            }
        },
    });

});
