Fox.define('Views.GlobalSearch.NameField', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({
        
        listTemplate: 'global-search.name-field',
        
        data: function () {
            return {
                scope: this.model.get('_scope'),
                name: this.model.get('name'),
                id: this.model.id,
            };
        },

    });
    
});

