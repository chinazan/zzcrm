
Fox.define('Views.User.Record.Edit', 'Views.Record.Edit', function (Dep) {

    return Dep.extend({

        sideView: 'User.Record.EditSide',

        setup: function () {
            Dep.prototype.setup.call(this);

            if (this.model.id == this.getUser().id) {
                this.listenTo(this.model, 'after:save', function () {
                    this.getUser().set(this.model.toJSON());
                }.bind(this));
            }
        },

        getGridLayout: function (callback) {

            var self = this;

            this._helper.layoutManager.get(this.model.name, this.options.layoutName || this.layoutName, function (simpleLayout) {

                var layout = _.clone(simpleLayout);

                if (this.type == 'edit') {
                    layout.push({
                        label: 'Password',
                        rows: [
                            [{
                                name: 'password',
                                type: 'password',
                                params: {
                                    required: self.isNew,
                                    readyToChange: true
                                }
                            },{
                                name: 'generatePassword',
                                view: 'User.Fields.GeneratePassword',
                                customLabel: ''
                            }],
                            [{
                                name: 'passwordConfirm',
                                type: 'password',
                                params: {
                                    required: self.isNew,
                                    readyToChange: true
                                }
                            },{
                                name: 'passwordInfo',
                                customLabel: '',
                                customCode: '{{translate "passwordWillBeSent" scope="User" category="messages"}}'
                            }]
                        ],
                    });
                }

                var gridLayout = {
                    type: 'record',
                    layout: this.convertDetailLayout(layout),
                };

                callback(gridLayout);
            }.bind(this));
        },

        fetch: function () {
            var data = Dep.prototype.fetch.call(this);

            if (!this.isNew) {
                if ('password' in data) {
                    if (data['password'] == '') {
                        delete data['password'];
                        delete data['passwordConfirm'];
                        this.model.unset('password');
                        this.model.unset('passwordConfirm');
                    }
                }
            }

            return data;
        }

    });

});

