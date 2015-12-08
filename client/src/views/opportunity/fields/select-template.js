Fox.define('views/opportunity/fields/select-template', 'views/fields/link', function (Dep) {

    return Dep.extend({

        type: 'link',

        foreignScope: 'Track',

        editTemplate: 'opportunity/fields/select-template/edit',

        setup: function () {
            Dep.prototype.setup.call(this);

            this.on('change', function () {
                var id = this.model.get(this.idName);
                if (id) {
                    this.loadTemplate(id);
                }
            }, this);
        },

        loadTemplate: function (id) {

            $.ajax({
                url: 'Track/'+id,
                data: {

                },
                success: function (data) {
                    this.model.set('name', data.name);
                    this.model.set('description', data.description);
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
