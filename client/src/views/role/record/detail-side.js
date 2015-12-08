
Fox.define('Views.Role.Record.DetailSide', 'Views.Record.DetailSide', function (Dep) {

    return Dep.extend({

        panelList: [
            {
                name: 'default',
                label: false,
                view: 'Role.Record.Panels.Side'
            }
        ],

    });
});


