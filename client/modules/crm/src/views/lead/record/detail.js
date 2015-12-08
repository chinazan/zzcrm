

Fox.define('Crm:Views.Lead.Record.Detail', 'Views.Record.Detail', function (Dep) {

    return Dep.extend({

        sideView: 'Crm:Lead.Record.DetailSide',

        setup: function () {
            Dep.prototype.setup.call(this);
        }

    });
});


