Fox.define('Crm:Views.Opportunity.Fields.Stage', 'Views.Fields.Enum', function (Dep) {

    return Dep.extend({
    
        listTemplate: 'fields.enum-styled.detail',
        
        detailTemplate: 'fields.enum-styled.detail',
        
        data: function () {        
            var style = 'default';
            var stage = this.model.get('stage');
            if (stage == 'Closed Won') {
                style = 'success';
            } else if (stage == 'Closed Lost') {
                style = 'danger';
            }
            return _.extend({
                style: style,
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            Dep.prototype.setup.call(this);
            
            this.probabilityMap = this.getMetadata().get('entityDefs.Opportunity.probabilityMap') || {};
            
            if (this.mode != 'list') {
                if (!this.model.has('probability') && this.model.has('stage')) {                    
                    this.model.set('probability', this.probabilityMap[this.model.get('stage')]);
                }

                this.on('change', function () {
                    this.model.set('probability', this.probabilityMap[this.model.get(this.name)]);
                }, this);
            }
        },

        fetch: function () {
            var data = Dep.prototype.fetch.call(this);
            if (this.probabilityChanged) {
                data['probability'] = this.model.get('probability');
            }
            return data;
        },
    });

});
