Fox.define('Crm:Controllers.Account', 'Controllers.Record', function (Dep) {

    return Dep.extend({

        convert: function (id) {
            this.main('Crm:Account.Convert', {
                id: id
            });
        },

    });
});


