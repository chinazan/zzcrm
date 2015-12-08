
Fox.define('Crm:Views.Calendar.Modals.Edit', 'Views.Modals.Edit', function (Dep) {

    return Dep.extend({

        template: 'crm:calendar.modals.edit',

        scopeList: [
            'Meeting',
            'Call',
            'Task',
        ],

        data: function () {
            return {
                scopeList: this.scopeList,
                scope: this.scope,
                isNew: !(this.id)
            };
        },

        events: {
            'change .scope-switcher input[name="scope"]': function () {
                this.notify('Loading...');
                var scope = $('.scope-switcher input[name="scope"]:checked').val();
                this.scope = scope;
                this.getModelFactory().create(this.scope, function (model) {
                    model.populateDefaults();
                    var attributes = this.getView('edit').fetch();
                    attributes = _.extend(attributes, this.getView('edit').model.toJSON());
                    model.set(attributes);
                    this.createEdit(model, function (view) {
                        view.render();
                        view.notify(false);
                    });
                    this.handleAccess(model);
                }.bind(this));
            },
        },

        handleAccess: function (model) {
            if (!this.getAcl().checkModel(model, 'edit')) {
                this.$el.find('button[data-name="save"]').addClass('hidden');
                this.$el.find('button[data-name="fullForm"]').addClass('hidden');
            } else {
                this.$el.find('button[data-name="save"]').removeClass('hidden');
                this.$el.find('button[data-name="fullForm"]').removeClass('hidden');
            }

            if (!this.getAcl().checkModel(model, 'delete')) {
                this.$el.find('button[data-name="remove"]').addClass('hidden');
            } else {
                this.$el.find('button[data-name="remove"]').removeClass('hidden');
            }
        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);
            if (this.hasView('edit')) {
                var model = this.getView('edit').model;
                if (model) {
                    this.handleAccess(model);
                }
            }

        },

        disableButtons: function () {

        },

        setup: function () {
            if (!this.options.id && !this.options.scope) {
                var scopeList = [];
                this.scopeList.forEach(function (scope) {
                    if (this.getAcl().check(scope, 'edit')) {
                        scopeList.push(scope); 
                    }
                }, this);
                this.scopeList = scopeList;

                var calendarDefaultEntity = this.getConfig().get('calendarDefaultEntity');

                if (calendarDefaultEntity && ~this.scopeList.indexOf(calendarDefaultEntity)) {
                    this.options.scope = calendarDefaultEntity;
                } else {
                    this.options.scope = this.scopeList[0] || null;
                }

                if (this.scopeList.length == 0) {
                    this.remove();
                    return;
                }
            }
            Dep.prototype.setup.call(this);

            if (!this.id) {
                this.header = this.translate('Create', 'labels', 'Calendar');
            }

            if (this.id) {
                this.buttonList.splice(1, 0, {
                    name: 'remove',
                    text: this.translate('Remove'),
                    style: 'danger',
                    onClick: function (dialog) {
                        var model = this.getView('edit').model;

                        if (confirm(this.translate('removeRecordConfirmation', 'messages'))) {
                            var $buttons = dialog.$el.find('.modal-footer button');
                            $buttons.addClass('disabled');
                            model.destroy({
                                success: function () {
                                    this.trigger('after:destroy', model);
                                    dialog.close();
                                }.bind(this),
                                error: function () {
                                    $buttons.removeClass('disabled');
                                },
                            });
                        }
                    }.bind(this)
                });
            }

            this.once('after:save', function (model) {
                var parentView = this.getParentView();
                if (!this.id) {
                    parentView.addModel.call(parentView, model);
                } else {
                    parentView.updateModel.call(parentView, model);
                }
            }, this);

            this.once('after:destroy', function (model) {
                var parentView = this.getParentView();
                parentView.removeModel.call(parentView, model);
            }, this);
        },
    });
});

