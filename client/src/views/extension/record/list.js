
Fox.define('Views.Extension.Record.List', 'Views.Record.List', function (Dep) {

    return Dep.extend({

        rowActionsView: 'Extension.Record.RowActions',

        checkboxes: false,

    	quickDetailDisabled: true,

        quickEditDisabled: true,

        massActionList: []

    });

});

