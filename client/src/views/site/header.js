Fox.define('Views.Site.Header', 'View', function (Dep) {
    
    return Dep.extend({
    
        template: 'site.header',
        
        title: 'FoxCRM',
    
        data: {
            title: this.title,
        },
        
        setup: function () {
            this.createView('navbar', 'Site.Navbar', {el: '#navbar', title: this.title});
        },
        
    });
    
});


