Fox.define('Crm:Views.Dashlets.Leads', 'Views.Dashlets.Abstract.RecordList', function (Dep) {

    return Dep.extend({

        name: 'Leads',

        scope: 'Lead',

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
                        {
                            name: 'addressCity'
                        }
                    ],
                    [
                        {
                            name: 'status'
                        },
                        {
                            name: 'source'
                        }
                    ]
                ]
            },
            searchData: {
                bool: {
                    onlyMy: true,
                },
                primary: 'active'
            },
        },

    });
});

