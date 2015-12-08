
Fox.define('views/user/detail', 'views/detail', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            if (this.model.id == this.getUser().id || this.getUser().isAdmin()) {
                this.menu.buttons.push({
                    name: 'preferences',
                    label: 'Preferences',
                    style: 'default',
                    action: "preferences"
                });


                if ((this.getAcl().check('EmailAccountScope') && this.model.id == this.getUser().id) || this.getUser().isAdmin()) {
                    this.menu.buttons.push({
                        name: 'emailAccounts',
                        label: "Email Accounts",
                        style: 'default',
                        action: "emailAccounts"
                    });
                }

                if (this.model.id == this.getUser().id) {
                    this.menu.buttons.push({
                        name: 'externalAccounts',
                        label: 'External Accounts',
                        style: 'default',
                        action: "externalAccounts"
                    });
                }
            }

            var showActivities = false;

            if (this.getUser().isAdmin()) {
                showActivities = true;
            } else {
                if (this.getAcl().get('userPermission') === 'no') {
                    if (this.model.id == this.getUser().id) {
                        showActivities = true;
                    }
                } else if (this.getAcl().get('userPermission') === 'team') {
                    if (this.model.has('teamsIds')) {
                        this.model.get('teamsIds').forEach(function (id) {
                            if (~(this.getUser().get('teamsIds') || []).indexOf(id)) {
                                showActivities = true;
                            }
                        }, this);
                    } else {
                        this.listenToOnce(this.model, 'sync', function () {
                            this.model.get('teamsIds').forEach(function (id) {
                                if (~(this.getUser().get('teamsIds') || []).indexOf(id)) {
                                    console.log(1);
                                    this.showHeaderActionItem('calendar');
                                    return;
                                }
                            }, this);
                        }, this);
                    }
                } else {
                    showActivities = true;
                }
            }

            this.menu.buttons.push({
                name: 'calendar',
                html: this.translate('Calendar', 'scopeNames'),
                style: 'default',
                link: '#Calendar/show/userId=' + this.model.id + '&userName=' + this.model.get('name'),
                hidden: !showActivities
            });
        },

        actionPreferences: function () {
            this.getRouter().navigate('#Preferences/edit/' + this.model.id, {trigger: true});
        },

        actionEmailAccounts: function () {
            this.getRouter().navigate('#EmailAccount/list/userId=' + this.model.id, {trigger: true});
        },

        actionExternalAccounts: function () {
            this.getRouter().navigate('#ExternalAccount', {trigger: true});
        },
    });
});

