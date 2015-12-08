
Fox.define('Views.Dashlets.Stream', 'Views.Dashlets.Abstract.Base', function (Dep) {

    return Dep.extend({

        name: 'Stream',

        defaultOptions: {
            displayRecords: 5,
            autorefreshInterval: 0.5,
            isDoubleHeight: false
        },

        _template: '<div class="list-container">{{{list}}}</div>',

        optionsFields: _.extend(_.clone(Dep.prototype.optionsFields), {
            'displayRecords': {
                type: 'enumInt',
                options: [3,4,5,10,15]
            },
            'isDoubleHeight': {
                type: 'bool',
            },
        }),

        actionRefresh: function () {
            this.getView('list').showNewRecords();
        },

        afterRender: function () {

            this.getCollectionFactory().create('Note', function (collection) {
                this.collection = collection;

                collection.url = 'Stream';
                collection.maxSize = this.getOption('displayRecords');

                this.listenToOnce(collection, 'sync', function () {
                    this.createView('list', 'Stream.List', {
                        el: this.options.el + ' > .list-container',
                        collection: collection,
                        isUserStream: true,
                        noEdit: true,
                    }, function (view) {
                        view.render();
                    });
                }.bind(this));
                collection.fetch();

            }, this);
        },


    });
});


