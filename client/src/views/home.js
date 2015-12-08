
Fox.define('views/home', 'view', function (Dep) {

    return Dep.extend({

        template: 'home',

        el: '#main',

        views: {
            dashboard: {
                view: 'Dashboard',
                selector: '> .home-content',
            }
        },
    });
});

