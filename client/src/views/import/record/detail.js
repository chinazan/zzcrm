
Fox.define('Views.Import.Record.Detail', 'Views.Record.Detail', function (Dep) {

    return Dep.extend({

        readOnly: true,

        returnUrl: '#Import/list'

    });

});

