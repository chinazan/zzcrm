
Fox.define('views/dashlets/abstract/record-list', ['views/dashlets/abstract/base', 'search-manager'], function (Dep, SearchManager) {

    return Dep.extend({

        name: 'Leads',

        scope: null,

        listViewColumn: 'views/record/list',

        listViewExpanded: 'views/record/list-expanded',

        listViewName: null,

        _template: '<div class="list-container">{{{list}}}</div>',

        layoutType: 'expanded',

        optionsFields: _.extend(_.clone(Dep.prototype.optionsFields), {
            'displayRecords': {
                type: 'enumInt',
                options: [3,4,5,10,15],
            },
            'isDoubleHeight': {
                type: 'bool',
            }
        }),

        rowActionsView: 'views/record/row-actions/view-and-edit',

        afterRender: function () {
            this.getCollectionFactory().create(this.scope, function (collection) {
                var searchManager = this.searchManager = new SearchManager(collection, 'list', null, this.getDateTime(), this.getOption('searchData'));

                if (!this.getAcl().check(this.scope, 'read')) {
                    this.$el.find('.list-container').html(this.translate('No Access'));
                    return;
                }

                this.collection = collection;
                collection.sortBy = this.getOption('sortBy') || this.collection.sortBy;
                collection.asc = this.getOption('asc') || this.collection.asc;
                collection.maxSize = this.getOption('displayRecords');
                collection.where = searchManager.getWhere();

                var viewName = this.listViewName || ((this.layoutType == 'expanded') ? this.listViewExpanded : this.listViewColumn);

                this.listenToOnce(collection, 'sync', function () {
                    this.createView('list', viewName, {
                        collection: collection,
                        el: this.$el.selector + ' .list-container',
                        pagination: this.getOption('pagination') ? 'bottom' : false,
                        type: 'listDashlet',
                        rowActionsView: this.rowActionsView,
                        checkboxes: false,
                        showMore: true,
                        listLayout: this.getOption(this.layoutType + 'Layout')
                    }, function (view) {
                        view.render();
                    });
                }, this);

                collection.fetch();

            }, this);
        },

        setupActionList: function () {
            this.actionList.unshift({
                name: 'create',
                html: this.translate('Create ' + this.scope, 'labels', this.scope),
                iconHtml: '<span class="glyphicon glyphicon-plus"></span>'
            });
        },

        actionRefresh: function () {
            this.collection.where = this.searchManager.getWhere();
            this.collection.fetch();
        },

        actionCreate: function () {
            var attributes = this.getCreateAttributes() || {};

            this.notify('Loading...');
            var viewName = this.getMetadata().get('clientDefs.' + this.scope + '.modalViews.edit') || 'views/modals/edit';
            this.createView('modal', viewName, {
                scope: this.scope,
                attributes: attributes,
            }, function (view) {
                view.render();
                view.notify(false);
                this.listenToOnce(view, 'after:save', function () {
                    this.actionRefresh();
                }, this);
            }.bind(this));
        },

        getCreateAttributes: function () {

        }
    });
});

