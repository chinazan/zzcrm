
Fox.define('views/admin/auth-token/record/list', 'views/record/list', function (Dep) {

    return Dep.extend({

        rowActionsView: 'views/record/row-actions/remove-only',

        massActionList: ['remove'],

        rowActionsColumnWidth: '5%',

    });
});

