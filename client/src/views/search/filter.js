Fox.define('Views.Search.Filter', 'View', function (Dep) {

    return Dep.extend({

        template: 'search.filter',
        
        data: function () {
            return {
                name: this.name,
                scope: this.model.name,
                notRemovable: this.options.notRemovable
            };
        },            
        
        setup: function () {
            var name = this.name = this.options.name;                
            var type = this.model.getFieldType(name);
            
            if (type) {            
                var viewName = this.model.getFieldParam(name, 'view') || 'Fields.' + Fox.Utils.upperCaseFirst(type);
            
                this.createView('field', viewName, {
                    mode: 'search',
                    model: this.model,
                    el: this.options.el + ' .field',
                    defs: {
                        name: name,                        
                    },
                    searchParams: this.options.params,
                });
            }
        },
    });    
});

