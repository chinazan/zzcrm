
Fox.define('controllers/email-account', 'controllers/record', function (Dep) {

    return Dep.extend({

        list: function (options) {
        	var userId = (options || {}).userId;
        	if (!userId) {
        		Dep.prototype.list.call(this, options);
        	} else {
	            this.getCollection(function (collection) {

	            	collection.where = [{
	            		type: 'equals',
	            		field: 'assignedUserId',
	            		value: userId
	            	}];

	                this.main(this.getViewName('list'), {
	                    scope: this.name,
	                    collection: collection,
	                    userId: userId
	                });
	            });
	        }
        },

    });
});
