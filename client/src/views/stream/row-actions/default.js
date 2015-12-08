
Fox.define('Views.Stream.RowActions.Default', 'View', function (Dep) {

    return Dep.extend({

        template: 'stream.row-actions.default',

        afterRender: function () {
            var $dd = this.$el.find('button[data-toggle="dropdown"]').parent();

            $dd.on('show.bs.dropdown', function () {
                this.$el.closest('.list-row').addClass('active');
            }.bind(this));
            $dd.on('hide.bs.dropdown', function () {
                this.$el.closest('.list-row').removeClass('active');
            }.bind(this));
        },

        data: function () {
            return {
                acl: this.options.acl,
                isEditable: this.options.isEditable,
                isRemovable: this.options.isRemovable,
                isEnabled: this.options.isEditable || this.options.isRemovable
            }
        }

    });
});

