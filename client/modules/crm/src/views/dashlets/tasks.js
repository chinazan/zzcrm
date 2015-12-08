
Fox.define('Crm:Views.Dashlets.Tasks', 'Views.Dashlets.Abstract.RecordList', function (Dep) {

    return Dep.extend({

        name: 'Tasks',

        scope: 'Task',

        listViewName: 'Crm:Task.Record.ListExpanded',

        rowActionsView: 'Crm:Task.Record.RowActions.Dashlet',

        defaultOptions: {
            sortBy: 'dateEnd',
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
                            name: 'status'
                        },
                        {
                            name: 'dateEnd'
                        }
                    ]
                ]
            },
            searchData: {
                bool: {
                    onlyMy: true
                },
                primary: 'actualNotDeferred'
            },
        },

    });
});

