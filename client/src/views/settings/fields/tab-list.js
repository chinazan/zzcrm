Fox.define('Views.Settings.Fields.TabList', 'Views.Fields.Array', function (Dep) {

    return Dep.extend({
    
        setup: function () {

            this.params.options = Object.keys(this.getMetadata().get('scopes')).filter(function (scope) {
                return this.getMetadata().get('scopes.' + scope + '.tab');
            }, this).sort(function (v1, v2) {
                return this.translate(v1, 'scopeNamesPlural').localeCompare(this.translate(v2, 'scopeNamesPlural'));
            }.bind(this));

            Dep.prototype.setup.call(this);
        },
        
        
    });
    
});
