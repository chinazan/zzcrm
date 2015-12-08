Fox.define('views/user/fields/extension', 'views/fields/link', function (Dep) {

    return Dep.extend({

        type: 'link',

        foreignScope: 'Agent',

        editTemplate: 'user/fields/extension/edit',

        extension: null,

        data: function () {
            return _.extend({
                idName: this.idName,
                nameName: this.nameName,
                idValue: this.model.get(this.idName),
                nameValue: this.getValueForDisplay(),
                extension: this.getValueForDisplay(),
                foreignScope: this.foreignScope,
            }, Dep.prototype.data.call(this));
        },

        getValueForDisplay: function () {
            return this.model.get(this.name);
        },

        setup: function () {
            Dep.prototype.setup.call(this);
            console.log(this.name);
            console.log(this.idName);
            console.log(this.nameValue);
            this.on('change', function () {
                var id = this.model.get(this.idName);
                if (id) {
                    this.loadTemplate(id);
                }
            }, this);
        },

        loadTemplate: function (id) {

            $.ajax({
                url: 'Agent/'+id,
                data: {

                },
                success: function (data) {
                    this.model.set('extension', data.name);
                    //this.model.set('description', data.description);
                    //this.model.trigger('insert-template', data);
                    this.emptyField();
                }.bind(this),
                error: function () {
                    this.emptyField();
                }.bind(this)
            });
        },

        emptyField: function () {
            this.model.set(this.idName, null);
            this.model.set(this.nameName, '');
        }

    });

});
