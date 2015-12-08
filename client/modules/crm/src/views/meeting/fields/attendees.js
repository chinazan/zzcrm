Fox.define('Crm:Views.Meeting.Fields.Attendees', 'Views.Fields.LinkMultipleWithRole', function (Dep) {

    return Dep.extend({
    
        columnName: 'status',
        
        roleFieldIsForeign: false,
    
    });

});
