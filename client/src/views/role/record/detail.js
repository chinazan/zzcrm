
Fox.define('Views.Role.Record.Detail', 'Views.Record.Detail', function (Dep) {

    return Dep.extend({

        sideView: 'Role.Record.DetailSide',

        editModeEnabled: false,

        getDetailLayout: function (callback) {
            var simpleLayout = [
                {
                    label: '',
                    cells: [
                        {
                            name: 'name',
                            type: 'base',
                        },
                    ]
                }
            ];
            callback({
                type: 'record',
                layout: this._convertSimplifiedLayout(simpleLayout)
            });
        },

        setup: function () {
            Dep.prototype.setup.call(this);
            this.createView('extra', 'Role.Record.Table', {
                aclData: this.model.get('data') || {}
            });
        },
    });
});


