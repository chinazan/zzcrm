
Fox.define('Views.User.Record.EditSide', 'Views.Record.EditSide', function (Dep) {

    return Dep.extend({

        panelList: [
            {
                name: 'default',
                label: false,
                view: 'Record.Panels.Side',
                options: {
                    fieldList: ['avatar'],
                    mode: 'edit',
                }
            }
        ],

    });

});

