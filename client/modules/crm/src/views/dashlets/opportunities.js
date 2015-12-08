Fox.define('Crm:Views.Dashlets.Opportunities', 'Views.Dashlets.Abstract.RecordList', function (Dep) {

    return Dep.extend({

        name: 'Opportunities',

        scope: 'Opportunity',

        defaultOptions: {
            sortBy: 'createdAt',
            asc: false,
            displayRecords: 5,
            expandedLayout: {
                rows: [
                    [
                        {
                            name: 'name',
                            link: true,
                        },

                    ],
                    [
                        {
                            name: 'stage'
                        },
                        {
                            name: 'amount'
                        }
                    ]
                ]
            },
            searchData: {
                bool: {
                    onlyMy: true
                },
                primary: 'open'
            },
        },

    });
});


