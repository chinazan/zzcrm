
Fox.define('crm:views/target-list/record/panels/opted-out', ['views/record/panels/relationship', 'multi-collection'], function (Dep, MultiCollection) {

    return Dep.extend({

        name: 'optedOut',

        template: 'crm:target-list/record/panels/opted-out',

        scopeList: ['Contact', 'Lead', 'User', 'Account'],

        listLayout: {
            'Account': {
                rows: [
                    [
                        {
                            name: 'name',
                            link: true
                        }
                    ]
                ]
            },
            'Contact': {
                rows: [
                    [
                        {
                            name: 'name',
                            link: true
                        }
                    ]
                ]
            },
            'Lead': {
                rows: [
                    [
                        {
                            name: 'name',
                            link: true
                        }
                    ]
                ]
            },
            'User': {
                rows: [
                    [
                        {
                            name: 'name',
                            link: true
                        }
                    ]
                ]
            }
        },

        data: function () {
            return {
                currentTab: this.currentTab,
                scopeList: this.scopeList
            };
        },

        getStorageKey: function () {
            return 'target-list-opted-out-' + this.model.name + '-' + this.name;
        },

        setup: function () {
            this.seeds = {};

            this.wait(true);
            var i = 0;
            this.scopeList.forEach(function (scope) {
                this.getModelFactory().getSeed(scope, function (seed) {
                    this.seeds[scope] = seed;
                    i++;
                    if (i == this.scopeList.length) {
                        this.wait(false);
                    }
                }.bind(this));
            }.bind(this));
        },

        afterRender: function () {
            var url = 'TargetList/' + this.model.id + '/' + this.name;

            this.collection = new MultiCollection();
            this.collection.seeds = this.seeds;
            this.collection.url = url;

            this.collection.maxSize = this.getConfig().get('recordsPerPageSmall') || 5;

            this.listenToOnce(this.collection, 'sync', function () {
                this.createView('list', 'views/record/list-expanded', {
                    el: this.$el.selector + ' > .list-container',
                    pagination: false,
                    type: 'listRelationship',
                    rowActionsView: 'crm:views/target-list/record/row-actions/opted-out',
                    checkboxes: false,
                    collection: this.collection,
                    listLayout: this.listLayout,
                }, function (view) {
                    view.render();
                });
            }.bind(this));
            this.collection.fetch();
        },

        actionRefresh: function () {
            this.collection.fetch();
        },

        actionCancelOptOut: function (data) {
            if (confirm(this.translate('confirmation', 'messages'))) {
                $.ajax({
                    url: 'TargetList/action/cancelOptOut',
                    type: 'POST',
                    data: JSON.stringify({
                        id: this.model.id,
                        targetId: data.id,
                        targetType: data.type
                    })
                }).done(function () {
                    this.collection.fetch();
                }.bind(this));
            }
        }

    });
});

