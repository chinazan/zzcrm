
Fox.define('Views.Modals.ImagePreview', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'image-preview',

        header: true,

        template: 'modals.image-preview',

        size: 'x-large',

        backdrop: true,

        data: function () {
            return {
                id: this.options.id,
                name: this.options.name,
                size: this.size
            };
        },

        setup: function () {
            this.buttons = [];
            this.header = '&nbsp;';
        },

        afterRender: function () {
            $container = this.$el.find('.image-container');
            $img = this.$el.find('.image-container img');

            var manageSize = function () {
                var width = this.$el.width();
                if (width < 868) {
                    $img.attr('width', width);
                } else {
                    $img.removeAttr('width');
                }
            }.bind(this);

            $(window).on('resize', function () {
                manageSize();
            });

            setTimeout(function () {
                manageSize();
            }, 100);

        },

    });
});

