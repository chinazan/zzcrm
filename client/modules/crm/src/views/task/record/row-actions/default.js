
Fox.define('Crm:Views.Task.Record.RowActions.Default', 'Views.Record.RowActions.Default', function (Dep) {

    return Dep.extend({

        getActionList: function () {
            var actions = Dep.prototype.getActionList.call(this);

            if (this.options.acl.edit && !~['Completed', 'Canceled'].indexOf(this.model.get('status'))) {
                actions.push({
                    action: 'setCompleted',
                    label: 'Complete',
                    data: {
                        id: this.model.id
                    }
                });
            }

            return actions;
        }
    });

});
