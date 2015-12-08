
Fox.define('Views.Import.Record.Panels.Updated', 'Views.Import.Record.Panels.Imported', function (Dep) {

    return Dep.extend({

        link: 'updated',

        rowActionsView: 'Record.RowActions.RelationshipViewAndEdit',

    });
});

