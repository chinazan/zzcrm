
Fox.define('views/stream', 'view', function (Dep) {

    return Dep.extend({

        template: 'stream',

        events: {
            'click button[data-action="refresh"]': function () {
                if (!this.hasView('list')) return;
                this.getView('list').showNewRecords();
            },
        },

        data: function () {
            return {
                displayTitle: this.options.displayTitle
            };
        },

        setup: function () {

        },

        afterRender: function () {
            this.notify('Loading...');
            this.getCollectionFactory().create('Note', function (collection) {
                this.collection = collection;
                collection.url = 'Stream';

                this.listenToOnce(collection, 'sync', function () {
                    this.createView('list', 'Stream.List', {
                        el: this.options.el + ' .list-container',
                        collection: collection,
                        isUserStream: true,
                    }, function (view) {
                        view.notify(false);
                        view.render();
                    });
                }.bind(this));
                collection.fetch();

            }, this);
        },

    });
});

