
Fox.define('Crm:Views.Opportunity.Fields.LeadSource', 'Views.Fields.Enum', function (Dep) {

    return Dep.extend({


        setup: function () {
            this.params.options = this.getMetadata().get('entityDefs.Lead.fields.source.options');
            this.params.translation = 'Lead.options.source';

            Dep.prototype.setup.call(this);

        },

    });

});
