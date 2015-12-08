Fox.define('controllers/cc', ['controller', 'search-manager'], function (Dep, SearchManager) {

    return Dep.extend({

        checkAccessGlobal: function () {
            if (this.getUser().isAdmin()) {
                return true;
            }
            return false;
        },

        index: function () {
            this.main('Cc.Index', null);
        },

        agentStatus: function () {
            this.collectionFactory.create('Agent', function (collection) {
                var searchManager = new SearchManager(collection, 'list', this.getStorage(), this.getDateTime());
                searchManager.loadStored();
                collection.where = searchManager.getWhere();
                collection.maxSize = this.getConfig().get('recordsPerPage') || collection.maxSize;

                this.main('Cc.AgentStatus', {
                    scope: 'Agent',
                    collection: collection,
                    searchManager: searchManager,
                });
            }, this);
        },

        queueStatus: function () {
            this.collectionFactory.create('Queue', function (collection) {
                var searchManager = new SearchManager(collection, 'list', this.getStorage(), this.getDateTime());
                searchManager.loadStored();
                collection.where = searchManager.getWhere();
                collection.maxSize = this.getConfig().get('recordsPerPage') || collection.maxSize;

                this.main('Cc.QueueStatus', {
                    scope: 'Queue',
                    collection: collection,
                    searchManager: searchManager,
                });
            }, this);
        }

    });

});
