
Fox.define('views/header', 'view', function (Dep) {

    return Dep.extend({

        template: 'header',

        data: function () {
            var data = {};
            if ('getHeader' in this.getParentView()) {
                data.header = this.getParentView().getHeader();
            }
            data.scope = this.getParentView().scope;
            data.items = this.getItems();
            return data;
        },

        setup: function () {
            if (this.model) {
                this.listenTo(this.model, 'after:save', function () {
                    if (this.isRendered()) {
                        this.reRender();
                    }
                }, this);
            }
        },

        afterRender: function () {

        },

        getItems: function () {
            var items = this.getParentView().getMenu() || {};

            return items;
        },
    });
});

