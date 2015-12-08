

Fox.define('crm:views/campaign/detail', 'views/detail', function (Dep) {

    return Dep.extend({

        relatedAttributeMap: {
            'massEmails': {
                'targetListsIds': 'targetListsIds',
                'targetListsNames': 'targetListsNames'
            },
        },

    });
});


