
Fox.define('Views.Record.Panels.DefaultSide', 'Views.Record.Panels.Side', function (Dep) {

    return Dep.extend({

        template: 'record.panels.default-side',

        setup: function () {
            Dep.prototype.setup.call(this);
            this.createField('modifiedBy', true);
            this.createField('modifiedAt', true);
            this.createField('createdBy', true);
            this.createField('createdAt', true);
            if (this.getMetadata().get('scopes.' + this.model.name + '.stream')) {
                this.createField('followers', true, 'Fields.Followers');
            }
        },
    });
});

