Fox.define('Crm:Views.Case.Record.Panels.Activities', 'Crm:Views.Record.Panels.Activities', function (Dep) {

    return Dep.extend({
        
        getComposeEmailAttributes: function (data, callback) {
            data = data || {};
            var attributes = {
                status: 'Draft',
                name: '[#' + this.model.get('number') + '] ' + this.model.get('name')
            };
            
            if (this.model.get('contactId')) {
                this.getModelFactory().create('Contact', function (contact) {
                    contact.id = this.model.get('contactId');
                    
                    this.listenToOnce(contact, 'sync', function () {
                        var emailAddress = contact.get('emailAddress');                        
                        if (emailAddress) {
                            attributes.to = emailAddress;
                        }
                        
                        callback.call(this, attributes);
                    });                    
                    contact.fetch({
                        error: function () {
                            callback.call(this, attributes);
                        }.bind(this)
                    });
                }, this);
            } else {
                callback.call(this, attributes);
            }
        },
        
    });
});

