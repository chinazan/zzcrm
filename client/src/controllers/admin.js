Fox.define('controllers/admin', ['controller', 'search-manager'], function (Dep, SearchManager) {

    return Dep.extend({

        checkAccessGlobal: function () {
            if (this.getUser().isAdmin()) {
                return true;
            }
            return false;
        },

        index: function () {
            this.main('Admin.Index', null);
        },

        layouts: function (options) {
            var scope = options.scope || null;
            var type = options.type || null;

            this.main('Admin.Layouts.Index', {scope: scope, type: type});
        },

        fieldManager: function (options) {
            var scope = options.scope || null;
            var field = options.field || null;

            this.main('Admin.FieldManager.Index', {scope: scope, field: field});
        },

        entityManager: function (options) {
            var scope = options.scope || null;

            this.main('Admin.EntityManager.Index', {scope: scope});
        },

        linkManager: function (options) {
            var scope = options.scope || null;

            this.main('Admin.LinkManager.Index', {scope: scope});
        },

        upgrade: function (options) {
            this.main('Admin.Upgrade.Index');
        },

        getSettingsModel: function () {
            var model = this.getConfig().clone();
            model.defs = this.getConfig().defs;

            return model;
        },

        settings: function () {
            var model = this.getSettingsModel();

            model.once('sync', function () {
                model.id = '1';
                this.main('Edit', {
                    model: model,
                    views: {
                        header: {template: 'admin.settings.header'},
                        body: {view: 'Admin.Settings'},
                    },
                });
            }, this);
            model.fetch();
        },

        notifications: function () {
            var model = this.getSettingsModel();

            model.once('sync', function () {
                model.id = '1';
                this.main('Edit', {
                    model: model,
                    views: {
                        header: {template: 'admin.settings.header-notifications'},
                        body: {view: 'Admin.Notifications'}
                    },
                });
            }, this);
            model.fetch();
        },

        outboundEmails: function () {
            var model = this.getSettingsModel();

            model.once('sync', function () {
                model.id = '1';
                this.main('Edit', {
                    model: model,
                    views: {
                        header: {template: 'admin/settings/header-outbound-emails'},
                        body: {view: 'Admin.OutboundEmails'},
                    },
                });
            }, this);
            model.fetch();
        },

        inboundEmails: function () {
            var model = this.getSettingsModel();

            model.once('sync', function () {
                model.id = '1';
                this.main('Edit', {
                    model: model,
                    views: {
                        header: {template: 'admin/settings/header-inbound-emails'},
                        body: {view: 'Admin.InboundEmails'},
                    },
                });
            }, this);
            model.fetch();
        },

        currency: function () {
            var model = this.getSettingsModel();

            model.once('sync', function () {
                model.id = '1';
                this.main('Edit', {
                    model: model,
                    views: {
                        header: {template: 'admin.settings.header-currency'},
                        body: {view: 'Admin.Currency'},
                    },
                });
            }, this);
            model.fetch();
        },

        authTokens: function () {
            this.collectionFactory.create('AuthToken', function (collection) {
                var searchManager = new SearchManager(collection, 'list', this.getStorage(), this.getDateTime());
                searchManager.loadStored();
                collection.where = searchManager.getWhere();
                collection.maxSize = this.getConfig().get('recordsPerPage') || collection.maxSize;

                this.main('Admin.AuthToken.List', {
                    scope: 'AuthToken',
                    collection: collection,
                    searchManager: searchManager,
                });
            }, this);
        },

        jobs: function () {
            this.collectionFactory.create('Job', function (collection) {
                var searchManager = new SearchManager(collection, 'list', this.getStorage(), this.getDateTime());
                searchManager.loadStored();
                collection.where = searchManager.getWhere();
                collection.maxSize = this.getConfig().get('recordsPerPage') || collection.maxSize;

                this.main('Admin.Job.List', {
                    scope: 'Job',
                    collection: collection,
                    searchManager: searchManager,
                });
            }, this);
        },

        userInterface: function () {
            var model = this.getSettingsModel();

            model.once('sync', function () {
                model.id = '1';
                this.main('Edit', {
                    model: model,
                    views: {
                        header: {template: 'admin.settings.header-user-interface'},
                        body: {view: 'Admin.UserInterface'},
                    },
                });
            }, this);
            model.fetch();
        },

        authentication: function () {
            var model = this.getSettingsModel();

            model.once('sync', function () {
                model.id = '1';
                this.main('Edit', {
                    model: model,
                    views: {
                        header: {template: 'admin.settings.header-authentication'},
                        body: {view: 'Admin.Authentication'},
                    },
                });
            }, this);
            model.fetch();
        },

        integrations: function (options) {
            var integration = options.name || null;

            this.main('Admin.Integrations.Index', {integration: integration});
        },

        extensions: function (options) {
            this.main('Admin.Extensions.Index');
        },

        rebuild: function (options) {
            var master = this.get('master');
            Fox.Ui.notify(master.translate('Please wait...'));
            this.getRouter().navigate('#Admin');
            $.ajax({
                url: 'Admin/rebuild',
                timeout: 0,
                type: 'POST',
                success: function () {
                    var msg = master.translate('Rebuild has been done', 'labels', 'Admin');
                    Fox.Ui.success(msg);
                }.bind(this)
            });
        },

        clearCache: function (options) {
            var master = this.get('master');
            Fox.Ui.notify(master.translate('Please wait...'));
            this.getRouter().navigate('#Admin');
            $.ajax({
                url: 'Admin/clearCache',
                type: 'POST',
                success: function () {
                    var msg = master.translate('Cache has been cleared', 'labels', 'Admin');
                    Fox.Ui.success(msg);
                }.bind(this)
            });
        }
    });

});
