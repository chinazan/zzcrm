Fox.define('Views.GlobalSearch.ScopeBadge', 'View', function (Dep) {

    return Dep.extend({
        
        template: 'global-search.scope-badge',
        
        data: function () {
            return {
                label: this.translate(this.model.get('_scope'), 'scopeNames')
            };
        },

    });
    
});

