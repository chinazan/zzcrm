Fox.define('controllers/dashboard', 'controller', function (Dep) {

    return Dep.extend({

        defaultAction: 'index',

        index: function () {
            this.main('Dashboard', {
                displayTitle: true,
            }, function (view) {
                view.render();
            });
        }

    });

});
