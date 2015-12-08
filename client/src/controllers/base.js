Fox.define('controllers/base', 'controller', function (Dep) {

    return Dep.extend({

        login: function () {
            this.entire('Login', {}, function (login) {
                login.render();
                login.on('login', function (data) {
                    this.trigger('login', data);
                }.bind(this));
            }.bind(this));
        },

        logout: function () {
            this.trigger('logout');
        },

        clearCache: function (options) {
            var cache = this.getCache();
            if (cache) {
                cache.clear();
                this.getRouter().navigateBack();
                window.location.reload();
            } else {
                Fox.Ui.notify('Cache is not enabled', 'error', 3000);
                this.getRouter().navigateBack();
            }
        },

        error404: function () {
            this.entire('Base', {template: 'errors.404'}, function (view) {
                view.render();
            });
        },

        error403: function () {
            this.entire('Base', {template: 'errors.403'}, function (view) {
                view.render();
            });
        },

    });
});

