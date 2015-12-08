
Fox.define('Crm:Views.Record.Panels.Tasks', 'Views.Record.Panels.Relationship', function (Dep) {

    return Dep.extend({

        name: 'tasks',

        template: 'crm:record.panels.tasks',

        tabList: ['actual', 'completed'],

        defaultTab: 'actual',

        sortBy: 'createdAt',

        asc: false,

        buttonList: [
            {
                action: 'createTask',
                title: 'Create Task',
                acl: 'edit',
                aclScope: 'Task',
                html: '<span class="glyphicon glyphicon-plus"></span>',
            }
        ],

        listLayout: {
            rows: [
                [
                    {
                        name: 'name',
                        link: true,
                    },
                    {
                        name: 'isOverdue'
                    }
                ],
                [
                    {name: 'assignedUser'},
                    {name: 'status'},
                    {name: 'dateEnd'},
                ]
            ]
        },


        events: _.extend({
            'click button.tab-switcher': function (e) {
                var $target = $(e.currentTarget);
                this.$el.find('button.tab-switcher').removeClass('active');
                $target.addClass('active');

                this.currentTab = $target.data('tab');

                this.collection.where = this.where = [
                    {
                        type: 'primary',
                        value: this.currentTab
                    }
                ];

                this.listenToOnce(this.collection, 'sync', function () {
                    this.notify(false);
                }.bind(this));
                this.notify('Loading...');
                this.collection.fetch();

                this.getStorage().set('state', this.getStorageKey(), this.currentTab);
            }
        }, Dep.prototype.events),

        data: function () {
            return {
                currentTab: this.currentTab,
                tabList: this.tabList
            };
        },

        getStorageKey: function () {
            return 'tasks-' + this.model.name + '-' + this.name;
        },

        setup: function () {
            this.scope = this.model.name;

            this.currentTab = this.getStorage().get('state', this.getStorageKey()) || this.defaultTab;

            this.where = [
                {
                    type: 'primary',
                    value: this.currentTab
                }
            ];
        },

        afterRender: function () {
            var link = 'tasks';

            if (this.scope == 'Account') {
                link = 'tasksPrimary';
            }
            var url = this.model.name + '/' + this.model.id + '/' + link;

            if (!this.getAcl().check('Task', 'read')) {
                this.$el.find('.list-container').html(this.translate('No Access'));
                this.$el.find('.button-container').remove();
                return;
            };

            this.getCollectionFactory().create('Task', function (collection) {
                this.collection = collection;
                collection.seeds = this.seeds;
                collection.url = url;
                collection.where = this.where;
                collection.sortBy = this.sortBy;
                collection.asc = this.asc;
                collection.maxSize = this.getConfig().get('recordsPerPageSmall') || 5;

                var rowActionsView = 'crm:views/record/row-actions/tasks';

                this.listenToOnce(this.collection, 'sync', function () {
                    this.createView('list', 'Record.ListExpanded', {
                        el: this.$el.selector + ' > .list-container',
                        pagination: false,
                        type: 'listRelationship',
                        rowActionsView: rowActionsView,
                        checkboxes: false,
                        collection: collection,
                        listLayout: this.listLayout,
                    }, function (view) {
                        view.render();
                    });
                }.bind(this));
                this.collection.fetch();
            }, this);
        },

        actionCreateTask: function (data) {
            var self = this;
            var link = 'tasks';
            var scope = 'Task';
            var foreignLink = this.model.defs['links'][link].foreign;

            this.notify('Loading...');

            this.createView('quickCreate', 'Modals.Edit', {
                scope: scope,
                relate: {
                    model: this.model,
                    link: foreignLink,
                }
            }, function (view) {
                view.render();
                view.notify(false);
                view.once('after:save', function () {
                    self.collection.fetch();
                });
            });

        },

        actionRefresh: function () {
            this.collection.fetch();
        },

        actionComplete: function (data) {
            var id = data.id;
            if (!id) {
                return;
            }
            var model = this.collection.get(id);
            model.save({
                status: 'Completed'
            }, {
                patch: true,
                success: function () {
                    this.collection.fetch();
                }.bind(this)
            });
        },

    });
});

