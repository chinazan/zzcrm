Fox.define('Crm:Views.Document.Fields.Name', 'Views.Fields.Varchar', function (Dep) {

    return Dep.extend({    
        
        setup: function () {
            Dep.prototype.setup.call(this);
            if (this.model.isNew()) {
                this.listenTo(this.model, 'change:fileName', function () {
                    this.model.set('name', this.model.get('fileName'));
                }, this);
            }
        },
    
    });

});
