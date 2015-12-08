
Fox.define('Views.Record.Edit', 'Views.Record.Detail', function (Dep) {

    return Dep.extend({

        template: 'record.edit',

        type: 'edit',

        name: 'edit',

        fieldsMode: 'edit',

        mode: 'edit',

        buttonList: [
            {
                name: 'save',
                label: 'Save',
                style: 'primary',
            },
            {
                name: 'cancel',
                label: 'Cancel',
            }
        ],

        dropdownItemList: [],

        sideView: 'Record.EditSide',

        bottomView: 'Record.EditBottom',

        actionSave: function () {
            this.save();
        },

        actionCancel: function () {
            this.setConfirmLeaveOut(false);
            this.cancel();
        },

        cancel: function () {
            this.exit('cancel');
        },

        setup: function () {
            Dep.prototype.setup.call(this);
        },

    });
});


