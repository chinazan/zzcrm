
Fox.define('crm:views/mass-email/fields/from-address', 'views/fields/varchar', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            if (this.model.isNew() && !this.model.has('fromAddress')) {
                this.model.set('fromAddress', this.getConfig().get('outboundEmailFromAddress'));
            }
            if (this.model.isNew() && !this.model.has('fromName')) {
                this.model.set('fromName', this.getConfig().get('outboundEmailFromName'));
            }
        },

    });

});
