
Fox.define('views/dashlet', 'view', function (Dep) {

    return Dep.extend({

        name: null,

        id: null,

        elId: null,

        template: 'dashlet',

        data: function () {
            return {
                name: this.name,
                id: this.id,
                title: this.getOption('title'),
                isDoubleHeight: this.getOption('isDoubleHeight'),
                actionList: (this.getView('body') || {}).actionList || []
            };
        },

        events: {
            'click .action': function (e) {
                var $target = $(e.currentTarget);
                var action = $target.data('action');
                var data = $target.data();
                if (action) {
                    var method = 'action' + Fox.Utils.upperCaseFirst(action);
                    if (typeof this[method] == 'function') {
                        e.preventDefault();
                        this[method].call(this, data);
                    } else {
                        var bodyView = this.getView('body');
                        if (typeof bodyView[method] == 'function') {
                            e.preventDefault();
                            bodyView[method].call(bodyView, data);
                        }
                    }
                }
            },
        },

        setup: function () {
            this.name = this.options.name;
            this.id = this.options.id;

            var bodySelector = '#dashlet-' + this.id + ' .dashlet-body';
            var view = this.getMetadata().get('dashlets.' + this.name + '.view') || 'Dashlets.' + this.name;

            this.createView('body', view, {el: bodySelector, id: this.id});
        },

        refresh: function () {
            this.getView('body').actionRefresh();
        },

        actionRefresh: function () {
            this.refresh();
        },

        actionOptions: function () {
            var optionsView = this.getView('body').optionsView;
            this.createView('options', optionsView, {
                name: this.name,
                optionsData: this.getOptionsData(),
                fields: this.getView('body').optionsFields,
            }, function (view) {
                view.render();
            });
        },

        getOptionsData: function () {
            return this.getView('body').optionsData;
        },

        getOption: function (key) {
            return this.getView('body').getOption(key);
        },

        actionRemove: function () {
            var dashboard = this.getParentView().getParentView();
            dashboard.removeDashlet(this.options.id);
            this.$el.remove();
            this.remove();
        },
    });
});


