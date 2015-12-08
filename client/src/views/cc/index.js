Fox.define('views/cc/index', 'view', function (Dep) {

    return Dep.extend({

        template: 'admin/index',

        data: function () {
            return {
                links: this.links,
                iframeUrl: this.iframeUrl
            };
        },

        setup: function () {
            this.links = this.getMetadata().get('app.adminPanel');
        },

        updatePageTitle: function () {
            this.setPageTitle(this.getLanguage().translate('Administration'));
        },

    });
});
