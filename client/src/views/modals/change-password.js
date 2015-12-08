
Fox.define('Views.Modals.ChangePassword', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'change-password',

        template: 'modals.change-password',

        setup: function () {

            this.buttons = [
                {
                    name: 'change',
                    label: 'Change',
                    style: 'danger',
                    onClick: function (dialog) {
                        this.changePassword();
                    }.bind(this)
                },
                {
                    name: 'cancel',
                    label: 'Cancel',
                    onClick: function (dialog) {
                        dialog.close();
                    }
                }
            ];

            this.header = this.translate('Change Password', 'labels', 'User');

            this.wait(true);

            this.getModelFactory().create('User', function (user) {
                this.model = user;

                this.createView('currentPassword', 'Fields.Password', {
                    model: user,
                    mode: 'edit',
                    el: this.options.el + ' .field-currentPassword',
                    defs: {
                        name: 'currentPassword',
                        params: {
                            required: true,
                        }
                    }
                });

                this.createView('password', 'Fields.Password', {
                    model: user,
                    mode: 'edit',
                    el: this.options.el + ' .field-password',
                    defs: {
                        name: 'password',
                        params: {
                            required: true,
                        }
                    }
                });
                this.createView('passwordConfirm', 'Fields.Password', {
                    model: user,
                    mode: 'edit',
                    el: this.options.el + ' .field-passwordConfirm',
                    defs: {
                        name: 'passwordConfirm',
                        params: {
                            required: true,
                        }
                    }
                });

                this.wait(false);
            }, this);

        },


        changePassword: function () {
            this.getView('currentPassword').fetchToModel();
            this.getView('password').fetchToModel();
            this.getView('passwordConfirm').fetchToModel();

            var notValid = this.getView('currentPassword').validate() ||
                           this.getView('password').validate() ||
                           this.getView('passwordConfirm').validate();

            if (notValid) {
                return;
            }

            this.$el.find('button[data-name="change"]').addClass('disabled');

            $.ajax({
                url: 'User/action/changeOwnPassword',
                type: 'POST',
                data: JSON.stringify({
                    currentPassword: this.model.get('currentPassword'),
                    password: this.model.get('password')
                }),
                error: function () {
                    this.$el.find('button[data-name="change"]').removeClass('disabled');
                }.bind(this)
            }).done(function () {
                Fox.Ui.success(this.translate('passwordChanged', 'messages', 'User'));
                this.trigger('changed');
                this.close();
            }.bind(this));
        },

    });
});

