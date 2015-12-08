
Fox.define('views/list', ['views/main', 'search-manager'], function (Dep, SearchManager) {

    return Dep.extend({

        template: 'list',

        el: '#main',

        scope: null,

        name: 'List',

        views: {
            header: {
                el: '#main > .page-header',
                view: 'Header'
            }
        },

        searchPanel: true,

        searchManager: null,

        createButton: true,

        quickCreate: false,

        setup: function () {
            this.collection.maxSize = this.getConfig().get('recordsPerPage') || this.collection.maxSize;

            if (this.getMetadata().get('clientDefs.' + this.scope + '.searchPanelDisabled')) {
                this.searchPanel = false;
            }

            if (this.searchPanel) {
                this.setupSearchManager();
            }

            this.setupSorting();

            if (this.searchPanel) {
                this.setupSearchPanel();

            }

            if (this.createButton) {
                this.setupCreateButton();
            }
        },

        setupCreateButton: function () {
            if (this.quickCreate) {
                this.menu.buttons.unshift({
                    action: 'quickCreate',
                    label: 'Create ' + this.scope,
                    style: 'primary',
                    acl: 'edit'
                });
            } else {
                this.menu.buttons.unshift({
                    link: '#' + this.scope + '/create',
                    action: 'create',
                    label: 'Create ' +  this.scope,
                    style: 'primary',
                    acl: 'edit'
                });
            }
        },

        setupSearchPanel: function () {
            this.createView('search', 'Record.Search', {
                collection: this.collection,
                el: '#main > .search-container',
                searchManager: this.searchManager,
            }, function (view) {
                this.listenTo(view, 'reset', function () {
                    this.collection.sortBy = this.defaultSortBy;
                    this.collection.asc = this.defaultAsc;
                    this.getStorage().clear('listSorting', this.collection.name)
                }, this);
            }.bind(this));
        },

        getSearchDefaultData: function () {
            return this.getMetadata().get('clientDefs.' + this.scope + '.defaultFilterData');
        },

        setupSearchManager: function () {
            var collection = this.collection;

            var searchManager = new SearchManager(collection, 'list', this.getStorage(), this.getDateTime(), this.getSearchDefaultData());

            searchManager.loadStored();
            collection.where = searchManager.getWhere();
            this.searchManager = searchManager;
        },

        setupSorting: function () {
            if (!this.searchPanel) return;

            var collection = this.collection;

            var sortingParams = this.getStorage().get('listSorting', collection.name) || {};

            this.defaultSortBy = collection.sortBy;
            this.defaultAsc = collection.asc;

            if ('sortBy' in sortingParams) {
                collection.sortBy = sortingParams.sortBy;
            }
            if ('asc' in sortingParams) {
                collection.asc = sortingParams.asc;
            }
        },

        getRecordViewName: function () {
            return this.getMetadata().get('clientDefs.' + this.scope + '.recordViews.list') || 'Record.List';
        },

        afterRender: function () {
            if (!this.isRendered()) {
                this.loadList();
            }
        },

        loadList: function () {
            this.notify('Loading...');
            if (this.collection.isFetched) {
                this.createListRecordView(false);
            } else {
                this.listenToOnce(this.collection, 'sync', function () {
                    this.createListRecordView();
                }, this);
                this.collection.fetch();
            }
        },

        createListRecordView: function (fetch) {
            var listViewName = this.getRecordViewName();
            this.createView('list', listViewName, {
                collection: this.collection,
                el: this.options.el + ' .list-container',
            }, function (view) {
                view.render();
                view.notify(false);
                if (this.searchPanel) {
                    this.listenTo(view, 'sort', function (obj) {
                        this.getStorage().set('listSorting', this.collection.name, obj);
                    }, this);
                }
                if (fetch) {
                    setTimeout(function () {
                        this.collection.fetch();
                    }.bind(this), 2000);
                }
            });
        },

        getHeader: function () {
            return this.buildHeaderHtml([
                this.getLanguage().translate(this.collection.name, 'scopeNamesPlural')
            ]);
        },

        updatePageTitle: function () {
            this.setPageTitle(this.getLanguage().translate(this.collection.name, 'scopeNamesPlural'));
        },

        getCreateAttributes: function () {},

        actionQuickCreate: function () {
            var attributes = this.getCreateAttributes() || {};

            this.notify('Loading...');
            var viewName = this.getMetadata().get('clientDefs.' + this.scope + '.modalViews.edit') || 'Modals.Edit';
            this.createView('quickCreate', 'Modals.Edit', {
                scope: this.scope,
                attributes: attributes,
            }, function (view) {
                view.render();
                view.notify(false);
                this.listenToOnce(view, 'after:save', function () {
                    this.collection.fetch();
                }, this);
            }.bind(this));
        },

        actionCreate: function () {
            var router = this.getRouter();

            var url = '#' + this.scope + '/create';
            var attributes = this.getCreateAttributes() || {};

            router.dispatch(this.scope, 'create', {
                attributes: attributes
            });
            router.navigate(url, {trigger: false});
        }

    });
});

