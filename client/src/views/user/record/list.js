
Fox.define('Views.User.Record.List', 'Views.Record.List', function (Dep) {

    return Dep.extend({

        quickEditDisabled: true,

        massActionList: ['remove', 'massUpdate', 'export'],

        checkAllResultDisabled: true

    });

});

