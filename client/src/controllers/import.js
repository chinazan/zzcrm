Fox.define('controllers/import', 'controllers/record', function (Dep) {

    return Dep.extend({

        defaultAction: 'index',

        checkAccess: function () {
            if (this.getUser().isAdmin()) {
                return true;
            }
            return false;
        },

        index: function () {
            this.main('Import.Index', null);
        }

    });

});
