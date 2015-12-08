
Fox.define('views/about', 'view', function (Dep) {

    return Dep.extend({

        template: 'about',

        el: '#main',

        data: function () {
            return {
                version: this.getConfig().get('version')
            };
        }

    });
});

