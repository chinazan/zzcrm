
Fox.define('Views.Record.EditSide', 'Views.Record.DetailSide', function (Dep) {

    return Dep.extend({

        mode: 'edit',

        panelList: [
            {
                name: 'default',
                label: false,
                view: 'Record.Panels.Side',
                options: {
                    fieldList: [
                        {
                            name: 'assignedUser',
                            view: 'Fields.AssignedUser'
                        },
                        {
                            name: 'teams',
                            view: 'Fields.Teams'
                        }
                    ],
                    mode: 'edit',
                }
            }
        ]

    });
});


