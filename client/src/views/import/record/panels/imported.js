
Fox.define('Views.Import.Record.Panels.Imported', 'Views.Record.Panels.Relationship', function (Dep) {

    return Dep.extend({

        link: 'imported',

        readOlny: true,

        rowActionsView: 'Record.RowActions.RelationshipNoUnlink',

        setup: function () {
            this.scope = this.model.get('entityType');
            Dep.prototype.setup.call(this);
        }

    });
});

