
Fox.define('Views.InboundEmail.Fields.TestConnection', 'Views.EmailAccount.Fields.TestConnection', function (Dep) {

    return Dep.extend({

        url: 'InboundEmail/action/testConnection',

     });

});

