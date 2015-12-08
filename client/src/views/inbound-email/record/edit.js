
Fox.define('Views.InboundEmail.Record.Edit', ['Views.Record.Edit', 'Views.InboundEmail.Record.Detail'], function (Dep, Detail) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            Detail.prototype.handleDistributionField.call(this);

        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);
            Detail.prototype.initSslFieldListening.call(this);
        },

    });
});

