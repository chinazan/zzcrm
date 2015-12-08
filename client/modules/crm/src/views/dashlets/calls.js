
Fox.define('crm:views/dashlets/calls', 'views/dashlets/abstract/record-list', function (Dep) {

    return Dep.extend({

        name: 'Calls',

        scope: 'Call',

        listViewName: 'Crm:Call.Record.ListExpanded',

        rowActionsView: 'Crm:Call.Record.RowActions.Dashlet',

        defaultOptions: {
            sortBy: 'dateStart',
            asc: true,
            displayRecords: 5,
            expandedLayout: {
                rows: [
                    [
                        {
                            name: 'name',
                            link: true,
                        }
                    ],
                    [
                        {
                            name: 'dateStart'
                        }
                    ]
                ]
            },
            searchData: {
                bool: {
                    onlyMy: true,
                },
                primary: 'planned',
                advanced: {
                    '1': {
                        type: 'or',
                        value: {
                            '1': {
                                type: 'today',
                                field: 'dateStart',
                                dateTime: true
                            },
                            '2': {
                                type: 'future',
                                field: 'dateEnd',
                                dateTime: true
                            }
                        }
                    }
                }
            },
        },

    });
});

