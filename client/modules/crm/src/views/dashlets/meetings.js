
Fox.define('Crm:Views.Dashlets.Meetings', 'Views.Dashlets.Abstract.RecordList', function (Dep) {

    return Dep.extend({

        name: 'Meetings',

        scope: 'Meeting',

        listViewName: 'Crm:Meeting.Record.ListExpanded',

        rowActionsView: 'Crm:Meeting.Record.RowActions.Dashlet',

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
                primary: 'Planned',
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

