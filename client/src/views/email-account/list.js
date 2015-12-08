
Fox.define('views/email-account/list', 'views/list', function (Dep) {

    return Dep.extend({

        createButton: false,

        setup: function () {
            Dep.prototype.setup.call(this);

            this.menu.buttons.unshift({
                action: 'createEmailAccount',
                label: 'Create ' +  this.scope,
                style: 'primary',
                acl: 'edit'
            });
        },

        actionCreateEmailAccount: function () {
            if (this.options.userId) {
                this.getRouter().dispatch('EmailAccount', 'create', {
                    attributes: {
                        assignedUserId: this.options.userId,
                        assignedUserName: this.options.userId
                    }
                });
                this.getRouter().navigate('#EmailAccount/create', {trigger: false});
            } else {
                this.getRouter().navigate('#EmailAccount/create', {trigger: true});
            }


        },


    });
});

