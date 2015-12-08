Fox.define('Views.Fields.Bool', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        type: 'bool',            
        
        listTemplate: 'fields.bool.detail',
        
        detailTemplate: 'fields.bool.detail',
        
        editTemplate: 'fields.bool.edit',
        
        searchTemplate: 'fields.bool.search',
        
        validations: [],        
    
        fetch: function () {
            var value = this.$element.get(0).checked;    
            var data = {};
            data[this.name] = value;
            return data; 
        },
        
        fetchSearch: function () {
            var data = {
                type: this.$element.get(0).checked ? 'isTrue' : 'isFalse',
            };
            return data;                
        },
    });
});

