Fox.define('Crm:Controllers.Lead', 'Controllers.Record', function (Dep) {
    
    return Dep.extend({
    
        convert: function (id) {
            this.main('Crm:Lead.Convert', {
                id: id
            });
        },
                    
    });    
});


