
Fox.define('crm:views/task/record/list-expanded', ['views/record/list-expanded', 'crm:views/task/record/list'], function (Dep, List) {

    return Dep.extend({

        rowActionsView: 'Crm:Task.Record.RowActions.Default',

        actionSetCompleted: function (data) {
            List.prototype.actionSetCompleted.call(this, data);
        },

    });

});
