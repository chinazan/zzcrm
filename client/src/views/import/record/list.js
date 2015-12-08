
Fox.define('Views.Import.Record.List', 'Views.Record.List', function (Dep) {

    return Dep.extend({

    	quickDetailDisabled: true,

        quickEditDisabled: true,

        checkAllResultDisabled: true,

        massActionList: ['remove'],

        rowActionsView: 'Record.RowActions.RemoveOnly'

    });
});

