
Fox.define('Views.Fields.Status', 'Views.Fields.Enum', function (Dep) {

    return Dep.extend({

        type: 'status',

        listTemplate: 'fields.status.list',

    });
});

