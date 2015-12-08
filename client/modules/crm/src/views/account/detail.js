Fox.define('Crm:Views.Account.Detail', 'Views.Detail', function (Dep) {

    return Dep.extend({
    
        relatedAttributeMap: {
            'contacts': {
                'billingAddressCity': 'addressCity',
                'billingAddressStreet': 'addressStreet',
                'billingAddressPostalCode': 'addressPostalCode',
                'billingAddressState': 'addressState',
                'billingAddressCountry': 'addressCountry',
                'id': 'accountId',
                'name': 'accountName'
            },
        },
        
    });
});

