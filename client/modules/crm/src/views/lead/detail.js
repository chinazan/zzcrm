Fox.define('Crm:Views.Lead.Detail', 'Views.Detail', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);

            if (['Converted', 'Dead'].indexOf(this.model.get('status')) == -1) {
                this.menu.buttons.push({
                    label: 'Convert',
                    action: 'convert',
                    acl: 'edit',
                });
            }
        },

        actionConvert: function () {
            this.getRouter().navigate(this.model.name + '/convert/' + this.model.id , {trigger: true});
        },
    });
});


