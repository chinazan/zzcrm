
Fox.define('views/merge', 'views/main', function (Dep) {

    return Dep.extend({

        template: 'merge',

        el: '#main',

        scope: null,

        name: 'Merge',

        views: {
            header: {
                selector: '> .page-header',
                view: 'Header',
            },
        },

        setup: function () {
            this.models = this.options.models;

            this.createView('body', 'Record.Merge', {
                el: '#main > .body',
                models: this.models
            });

        },

        getHeader: function () {
            var html = '<a href="#' + this.models[0].name + '">' + this.getLanguage().translate(this.models[0].name, 'scopeNamesPlural') + '</a>';
            html += ' &raquo ';
            html += this.getLanguage().translate('merge');
            return html;
        },

        updatePageTitle: function () {
            this.setPageTitle(this.getLanguage().translate('Merge'));
        },
    });
});

