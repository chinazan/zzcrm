
Fox.define('Views.GlobalSearch.Panel', 'View', function (Dep) {

    return Dep.extend({

        template: 'global-search.panel',

        afterRender: function () {

            this.listenToOnce(this.collection, 'sync', function () {
                this.createView('list', 'Record.ListExpanded', {
                    el: this.options.el + ' .list-container',
                    collection: this.collection,
                    listLayout: {
                        rows: [
                            [
                                {
                                    name: 'name',
                                    view: 'GlobalSearch.NameField',
                                    params: {
                                        containerEl: this.options.el
                                    },
                                }
                            ]
                        ],
                        right: {
                            name: 'read',
                            view: 'GlobalSearch.ScopeBadge',
                            width: '80px'
                        }
                    }
                }, function (view) {
                    view.render();
                });
            }.bind(this));
            this.collection.maxSize = this.getConfig().get('recordsPerPageSmall') || 10;
            this.collection.fetch();
        }

    });

});

