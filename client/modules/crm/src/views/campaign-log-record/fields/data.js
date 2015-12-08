

Fox.define('Crm:Views.CampaignLogRecord.Fields.Data', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        listTemplate: 'crm:campaign-log-record.fields.data.detail',

    	getValueForDisplay: function () {
    		var action = this.model.get('action');

    		switch (action) {
    			case 'Sent':
                case 'Opened':
                    if (this.model.get('objectId') && this.model.get('objectType') && this.model.get('objectName')) {
                        return '<a href="#'+this.model.get('objectType')+'/view/'+this.model.get('objectId')+'">'+this.model.get('objectName')+'</a>';
                    }
                    return this.model.get('stringData') || '';
    			case 'Clicked':
                    if (this.model.get('objectId') && this.model.get('objectType') && this.model.get('objectName')) {
                        return '<a href="#'+this.model.get('objectType')+'/view/'+this.model.get('objectId')+'">'+this.model.get('objectName')+'</a>';
                    }
    				return '<span>' + (this.model.get('stringData') || '') + '</span>';
                case 'Opted Out':
                    return '<span class="text-danger">' + this.model.get('stringData') + '</span>';
                case 'Bounced':
                    var emailAddress = this.model.get('stringData');
                    var type = this.model.get('stringAdditionalData');
                    if (type == 'Hard') {
                        return '<s class="text-danger">' + emailAddress + '</s>';
                    } else {
                        return '<s class="">' + emailAddress + '</s>';
                    }
    		}
    		return '';
    	}

    });
});


