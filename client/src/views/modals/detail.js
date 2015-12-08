
Fox.define('Views.Modals.Detail', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'detail-modal',

        header: false,

        template: 'modals.detail',

        editDisabled: false,

        fullFormDisabled: false,

        detailViewName: null,

        columnCount: 4,

        backdrop: false,

        fitHeight: true,

        setup: function () {

            var self = this;

            this.buttonList = [];

            if ('editDisabled' in this.options) {
                this.editDisabled = this.options.editDisabled;
            }

            this.fullFormDisabled = this.options.fullFormDisabled || this.fullFormDisabled;

            if (!this.fullFormDisabled) {
                this.buttonList.push({
                    name: 'fullForm',
                    label: 'Full Form'
                });
            }

            this.buttonList.push({
                name: 'cancel',
                label: 'Close'
            });

            this.scope = this.scope || this.options.scope;
            this.id = this.options.id;

            this.header = this.getLanguage().translate(this.scope, 'scopeNames');

            this.waitForView('record');

            this.sourceModel = this.model;

            this.getModelFactory().create(this.scope, function (model) {
                if (!this.sourceModel) {
                    this.model = model;
                    model.id = this.id;
                    model.once('sync', function () {
                        this.createRecord(model);
                    }, this);
                    model.fetch();
                } else {
                    model = this.model = this.model.clone();
                    this.once('after:render', function () {
                        model.fetch();
                    });
                    this.createRecord(model);

                    this.listenTo(model, 'change', function () {
                        this.sourceModel.set(model.getClonedAttributes());
                    }, this);
                }
            }, this);
        },

        addEditButton: function () {
            this.buttonList.unshift({
                name: 'edit',
                label: 'Edit',
                style: 'primary'
            });
        },

        createRecord: function (model, callback) {
            if (model.get('name')) {
                this.header += ' &raquo; ' + model.get('name');
            }
            if (!this.fullFormDisabled) {
                this.header = '<a href="#' + this.scope + '/view/' + this.id+'" class="action" title="'+this.translate('Full Form')+'" data-action="fullForm">' + this.header + '</a>';
            }

            if (!this.editDisabled && this.getAcl().check(model, 'edit')) {
                this.addEditButton();
            }

            var viewName = this.detailViewName || this.getMetadata().get('clientDefs.' + model.name + '.recordViews.detailQuick') || 'Record.DetailSmall'; 
            var options = {
                model: model,
                el: this.containerSelector + ' .record-container',
                type: 'detailSmall',
                layoutName: this.layoutName || 'detailSmall',
                columnCount: this.columnCount,
                buttonsPosition: false,
                inlineEditDisabled: true,
                exit: function () {},
            };
            this.createView('record', viewName, options, callback);
        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);

            setTimeout(function () {
                this.$el.children(0).scrollTop(0);
            }.bind(this), 50);
        },

        actionEdit: function () {
            this.createView('quickEdit', 'Modals.Edit', {
                scope: this.scope,
                id: this.id,
                fullFormDisabled: this.fullFormDisabled
            }, function (view) {
                view.once('after:render', function () {
                    Fox.Ui.notify(false);
                    this.dialog.hide();
                }, this);

                this.listenToOnce(view, 'remove', function () {
                    this.close();
                }, this);

                this.listenToOnce(view, 'after:save', function () {
                    this.trigger('after:save');
                }, this);

                view.render();
            }.bind(this));
        },

        actionFullForm: function () {
            var url;
            var router = this.getRouter();

            url = '#' + this.scope + '/view/' + this.id;

            var attributes = this.getView('record').fetch();
            var model = this.getView('record').model;
            attributes = _.extend(attributes, model.getClonedAttributes());

            setTimeout(function () {
                router.dispatch(this.scope, 'view', {
                    attributes: attributes,
                    returnUrl: Backbone.history.fragment,
                    model: this.sourceModel,
                    id: this.id
                });
                router.navigate(url, {trigger: false});
            }.bind(this), 10);


            this.trigger('leave');
            this.dialog.close();
        }
    });
});

