
Fox.define('crm:views/mass-email/modals/send-test', ['views/modal', 'model'], function (Dep, Model) {

    return Dep.extend({

        scope: 'MassEmail',

        template: 'crm:mass-email/modals/send-test',

        setup: function () {
            Dep.prototype.setup.call(this);
            this.header = this.translate('Send Test', 'labels', 'MassEmail');

            var model = new Model();

            model.set('usersIds', [this.getUser().id]);
            var usersNames = {};
            usersNames[this.getUser().id] = this.getUser().get('name');
            model.set('usersNames', usersNames);

            this.createView('users', 'views/fields/link-multiple', {
                model: model,
                el: this.options.el + ' .field-users',
                foreignScope: 'User',
                defs: {
                    name: 'users',
                    params: {
                    }
                },
                mode: 'edit'
            });

            this.createView('contacts', 'views/fields/link-multiple', {
                model: model,
                el: this.options.el + ' .field-contacts',
                foreignScope: 'Contact',
                defs: {
                    name: 'contacts',
                    params: {
                    }
                },
                mode: 'edit'
            });

            this.createView('leads', 'views/fields/link-multiple', {
                model: model,
                el: this.options.el + ' .field-leads',
                foreignScope: 'Lead',
                defs: {
                    name: 'leads',
                    params: {
                    }
                },
                mode: 'edit'
            });

            this.createView('accounts', 'views/fields/link-multiple', {
                model: model,
                el: this.options.el + ' .field-accounts',
                foreignScope: 'Account',
                defs: {
                    name: 'accounts',
                    params: {
                    }
                },
                mode: 'edit'
            });

            this.buttonList.push({
                name: 'sendTest',
                label: 'Send Test',
                style: 'danger'
            });

            this.buttonList.push({
                name: 'cancel',
                label: 'Cancel'
            });
        },

        actionSendTest: function () {

            var list = [];

            this.getView('users').fetch().usersIds.forEach(function (id) {
                list.push({
                    id: id,
                    type: 'User'
                });
            });
            this.getView('contacts').fetch().contactsIds.forEach(function (id) {
                list.push({
                    id: id,
                    type: 'Contact'
                });
            });
            this.getView('leads').fetch().leadsIds.forEach(function (id) {
                list.push({
                    id: id,
                    type: 'Lead'
                });
            });
            this.getView('accounts').fetch().accountsIds.forEach(function (id) {
                list.push({
                    id: id,
                    type: 'Account'
                });
            });


            if (list.length == 0) {
                alert(this.translate('selectAtLeastOneTarget', 'messages', 'MassEmail'));
                return;
            }

            this.disableButton('sendTest');

            $.ajax({
                url: 'MassEmail/action/sendTest',
                type: 'POST',
                data: JSON.stringify({
                    id: this.model.id,
                    targetList: list
                }),
                error: function () {
                    this.enableButton('sendTest');
                }.bind(this)
            }).done(function () {
                Fox.Ui.success(this.translate('testSent', 'messages', 'MassEmail'));
                this.close();
            }.bind(this));
        }

    });
});

