
Fox.define('Views.User.Record.DetailQuickSide', 'Views.Record.DetailSide', function (Dep) {

    return Dep.extend({

        panelList: [
            {
                name: 'default',
                label: false,
                view: 'Record.Panels.Side',
                options: {
                    fieldList: ['avatar'],
                    mode: 'detail',
                }
            }
        ]

    });

});

