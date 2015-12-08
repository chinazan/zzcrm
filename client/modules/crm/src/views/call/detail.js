
 Fox.define('Crm:Views.Call.Detail', 'Views.Detail', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            if (['Held', 'Not Held'].indexOf(this.model.get('status')) == -1) {
                if (this.getAcl().checkModel(this.model, 'edit')) {
                    this.menu.buttons.push({
                        'label': 'Send Invitations',
                        'action': 'sendInvitations',
                        icon: 'glyphicon glyphicon-send',
                        'acl': 'edit',
                    });
                }
            }
        },

        actionSendInvitations: function () {
            if (confirm(this.translate('confirmation', 'messages'))) {
                this.$el.find('[data-action="sendInvitations"]').addClass('disabled');
                this.notify('Sending...');
                $.ajax({
                    url: 'Call/action/sendInvitations',
                    type: 'POST',
                    data: JSON.stringify({
                        id: this.model.id
                    }),
                    success: function () {
                        this.notify('Sent', 'success');
                        this.$el.find('[data-action="sendInvitations"]').removeClass('disabled');
                    }.bind(this),
                    error: function () {
                        this.$el.find('[data-action="sendInvitations"]').removeClass('disabled');
                    }.bind(this),
                });
            }
        }

    });
});

