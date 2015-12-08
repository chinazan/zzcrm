
Fox.define('Crm:Views.Dashlets.Cases', 'Views.Dashlets.Abstract.RecordList', function (Dep) {

    return Dep.extend({

        name: 'Cases',

        scope: 'Case',

        defaultOptions: {
            sortBy: 'number',
            asc: false,
            displayRecords: 5,
            expandedLayout: {
                rows: [
                    [
                        {
                            name: 'number',
                        },
                        {
                            name: 'name',
                            link: true,
                        },
                        {
                            name: 'type',
                        },
                    ],
                    [
                        {
                            name: 'status'
                        },
                        {
                            name: 'priority'
                        }
                    ]
                ]
            },
            searchData: {
                bool: {
                    onlyMy: true,
                },
                primary: 'open'
            },
        },

    });
});


