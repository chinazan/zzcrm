Fox.define('Views.Notifications.Read', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        type: 'read',            
        
        listTemplate: 'notifications.read',
        
        detailTemplate: 'notifications.read',
        
        data: function () {
            return {
                isRead: this.model.get('read')
            };
        },        
        
    });
});

