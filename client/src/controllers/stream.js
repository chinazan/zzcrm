Fox.define('controllers/stream', 'controller', function (Dep) {

    return Dep.extend({

        defaultAction: 'index',

        index: function () {
            this.main('Stream', {
                displayTitle: true,
            }, function (view) {
                view.render();
            });
        }

    });

});
