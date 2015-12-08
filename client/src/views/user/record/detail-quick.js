
Fox.define('Views.User.Record.DetailQuick', 'Views.Record.Detail', function (Dep) {

    return Dep.extend({

        sideView: 'User.Record.DetailQuickSide',

        editModeEnabled: false,

        setup: function () {
            Dep.prototype.setup.call(this);

        }

    });

});

