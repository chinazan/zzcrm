Fox.define('views/email/fields/compose-from-address', 'views/fields/base', function (Dep) {

    return Dep.extend({

        editTemplate: 'email/fields/compose-from-address/edit',

        data: function () {
            return _.extend({
                list: this.list,
                noSmtpMessage: this.translate('noSmtpSetup', 'messages', 'Email').replace('{link}', '<a href="#Preferences">'+this.translate('Preferences')+'</a>')
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            Dep.prototype.setup.call(this);
            this.list = [];

            if (this.getUser().get('emailAddress') && this.getPreferences().get('smtpServer')) {
                this.list.push(this.getUser().get('emailAddress'));
            }

            if (this.getConfig().get('outboundEmailIsShared') && this.getConfig().get('outboundEmailFromAddress')) {
                this.list.push(this.getConfig().get('outboundEmailFromAddress'));
            }
        },
    });

});
