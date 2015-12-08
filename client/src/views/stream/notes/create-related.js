
Fox.define('Views.Stream.Notes.CreateRelated', 'Views.Stream.Note', function (Dep) {

    return Dep.extend({

        template: 'stream.notes.create-related',

        messageName: 'createRelated',

        data: function () {
            return _.extend({
                relatedTypeString: this.translate(this.entityType, 'scopeNames').toLowerCase()
            }, Dep.prototype.data.call(this));
        },

        init: function () {
            if (this.getUser().isAdmin()) {
                this.isRemovable = true;
            }
            Dep.prototype.init.call(this);
        },

        setup: function () {
            var data = this.model.get('data') || {};

            this.entityType = this.model.get('relatedType') || data.entityType || null;
            this.entityId = this.model.get('relatedId') || data.entityId || null;
            this.entityName = this.model.get('relatedName') ||  data.entityName || null;

            this.messageData['relatedEntityType'] = this.translate(this.entityType, 'scopeNames').toLowerCase();
            this.messageData['relatedEntity'] = '<a href="#' + this.entityType + '/view/' + this.entityId + '">' + this.entityName +'</a>';

            this.createMessage();
        },
    });
});

