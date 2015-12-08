

Fox.define('Crm:Views.Campaign.Record.Panels.Statistics', 'Views.Record.Panels.Side', function (Dep) {

    return Dep.extend({


    	setupFieldList: function () {
    		var type = this.model.get('type');
    		switch (type) {
    			case 'Email':
    			case 'Newsletter':
    				this.fieldList = ['sentCount', 'openedCount', 'clickedCount', 'optedOutCount', 'bouncedCount', 'leadCreatedCount', 'revenue'];
    				break;
    			case 'Web':
    			case 'Television':
    			case 'Radio':
    				this.fieldList = ['leadCreatedCount', 'revenue'];
    				break;
    			case 'Mail':
    				this.fieldList = ['sentCount', 'leadCreatedCount', 'revenue'];
    				break;
    			default:
    				this.fieldList = ['leadCreatedCount', 'revenue'];
    		}
    	},

    	setup: function () {
    		this.fieldList = ['sentCount', 'openedCount', 'clickedCount', 'optedOutCount', 'bouncedCount', 'leadCreatedCount', 'revenue'];
            Dep.prototype.setup.call(this);
            this.setupFieldList();

            this.listenTo(this.model, 'change:type', function () {
            	this.setupFieldList();
            	if (this.isRendered()) {
            		this.render();
            	}
            }, this);
    	},

        actionRefresh: function () {
            this.model.fetch();
        },


    });
});


