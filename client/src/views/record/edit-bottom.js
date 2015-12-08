
Fox.define('Views.Record.EditBottom', 'Views.Record.DetailBottom', function (Dep) {

    return Dep.extend({

        mode: 'edit',

        streamPanel: false,

        relationshipPanels: false,

    });
});


