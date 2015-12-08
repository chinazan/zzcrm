
Fox.define('Views.Notifications.Panel', 'View', function (Dep) {

    return Dep.extend({

        template: 'notifications.panel',

        events: {
            'click [data-action="markAllNotificationsRead"]': function () {
                $.ajax({
                    url: 'Notification/action/markAllRead',
                    type: 'POST'
                }).done(function (count) {
                    this.trigger('all-read');
                }.bind(this));
            },
        },

        setup: function () {
            this.wait(true);
            this.getCollectionFactory().create('Notification', function (collection) {
                this.collection = collection;
                collection.maxSize = 5;
                this.wait(false);
            }, this);
        },

        afterRender: function () {
            this.listenToOnce(this.collection, 'sync', function () {
                this.createView('list', 'Notifications.List', {
                    el: this.options.el + ' .list-container',
                    collection: this.collection,
                    showCount: false,
                    listLayout: {
                        rows: [
                            [
                                {
                                    name: 'data',
                                    view: 'Notifications.Field',
                                    params: {
                                        containerEl: this.options.el
                                    },
                                }
                            ]
                        ],
                        right: {
                            name: 'read',
                            view: 'Notifications.Read',
                            width: '10px'
                        }
                    }
                }, function (view) {
                    view.render();
                });
            }.bind(this));
            this.collection.fetch();
        }

    });

});
