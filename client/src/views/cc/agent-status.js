
Fox.define('views/cc/agent-status', 'views/list', function (Dep) {

    return Dep.extend({

        searchPanel: true,

        setup: function () {
            Dep.prototype.setup.call(this);

            this.menu.buttons = [];

            setInterval(function () {
                //console.log('fetch');
                this.collection.fetch();
            }.bind(this), 2000);

        },

        getHeader: function () {
            return '<a href="#Admin">' + this.translate('Administration') + "</a> » " + this.getLanguage().translate('Agent Status', 'labels', 'Admin');
        },

        updatePageTitle: function () {
            this.setPageTitle(this.getLanguage().translate('Agent Status', 'labels', 'Admin'));
        },

        createListRecordView: function (fetch) {
            var listViewName = this.getRecordViewName();
            this.createView('list', listViewName, {
                type: 'status',
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
    });
});

