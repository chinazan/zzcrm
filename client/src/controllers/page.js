Fox.define('controllers/page', 'controller', function (Dep) {

    return Dep.extend({

        view: function (options) {
            var page = options.id;
            this.main(null, {template: 'pages.' + Fox.Utils.convert(page, 'c-h')});
        }
    });
});
