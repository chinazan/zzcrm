
Fox.define('views/admin/link-manager/modals/edit', ['views/modal', 'views/admin/link-manager/index', 'model'], function (Dep, Index, Model) {

    return Dep.extend({

        cssName: 'edit',

        template: 'admin.link-manager.modals.edit',

        setup: function () {

            this.buttons = [
                {
                    name: 'save',
                    label: 'Save',
                    style: 'danger',
                    onClick: function (dialog) {
                        this.save();
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

            var scope = this.scope = this.options.scope;
            var link = this.link = this.options.link || false;

            var entity = scope;

            var isNew = this.isNew = (false == link);

            var header = 'Create Link';
            if (!isNew) {
                header = 'Edit Link';
            }

            this.header = this.translate(header, 'labels', 'Admin');

            var model = this.model = new Model();
            model.name = 'EntityManager';

            this.model.set('entity', scope);

            if (!isNew) {
                var entityForeign = this.getMetadata().get('entityDefs.' + scope + '.links.' + link + '.entity');
                var linkForeign = this.getMetadata().get('entityDefs.' + scope + '.links.' + link + '.foreign');
                var label = this.getLanguage().translate(link, 'links', scope);
                var labelForeign = this.getLanguage().translate(linkForeign, 'links', entityForeign);

                var type = this.getMetadata().get('entityDefs.' + entity + '.links.' + link + '.type');
                var foreignType = this.getMetadata().get('entityDefs.' + entityForeign + '.links.' + linkForeign + '.type');

                var linkType = Index.prototype.computeRelationshipType.call(this, type, foreignType);

                this.model.set('linkType', linkType);
                this.model.set('entityForeign', entityForeign);
                this.model.set('link', link);
                this.model.set('linkForeign', linkForeign);
                this.model.set('label', label);
                this.model.set('labelForeign', labelForeign);
            }


            var scopes = this.getMetadata().get('scopes') || null;
            var entityList = (Object.keys(scopes) || []).filter(function (item) {
                var d = scopes[item];
                return d.customizable && d.entity;
            }, this).sort(function (v1, v2) {
                var t1 = this.translate(v1, 'scopeNames');
                var t2 = this.translate(v2, 'scopeNames');
                return t1.localeCompare(t2);
            }.bind(this));

            entityList.unshift('');


            this.createView('entity', 'Fields.Varchar', {
                model: model,
                mode: 'edit',
                el: this.options.el + ' .field-entity',
                defs: {
                    name: 'entity'
                },
                readOnly: true
            });
            this.createView('entityForeign', 'Fields.Enum', {
                model: model,
                mode: 'edit',
                el: this.options.el + ' .field-entityForeign',
                defs: {
                    name: 'entityForeign',
                    params: {
                        required: true,
                        options: entityList,
                        translation: 'Global.scopeNames'
                    }
                },
                readOnly: !isNew
            });
            this.createView('linkType', 'Fields.Enum', {
                model: model,
                mode: 'edit',
                el: this.options.el + ' .field-linkType',
                defs: {
                    name: 'linkType',
                    params: {
                        required: true,
                        options: ['', 'oneToMany', 'manyToOne', 'manyToMany']
                    }
                },
                readOnly: !isNew
            });

            this.createView('link', 'Fields.Varchar', {
                model: model,
                mode: 'edit',
                el: this.options.el + ' .field-link',
                defs: {
                    name: 'link',
                    params: {
                        required: true
                    }
                },
                readOnly: !isNew
            });
            this.createView('linkForeign', 'Fields.Varchar', {
                model: model,
                mode: 'edit',
                el: this.options.el + ' .field-linkForeign',
                defs: {
                    name: 'linkForeign',
                    params: {
                        required: true
                    }
                },
                readOnly: !isNew
            });
            this.createView('label', 'Fields.Varchar', {
                model: model,
                mode: 'edit',
                el: this.options.el + ' .field-label',
                defs: {
                    name: 'label',
                    params: {
                        required: true
                    }
                }
            });
            this.createView('labelForeign', 'Fields.Varchar', {
                model: model,
                mode: 'edit',
                el: this.options.el + ' .field-labelForeign',
                defs: {
                    name: 'labelForeign',
                    params: {
                        required: true
                    }
                }
            });
        },

        toPlural: function (string) {
            if (string.slice(-1) == 'y') {
                return string.substr(0, string.length - 1) + 'ies';
            } else {
                return string + 's';
            }

        },

        populateFields: function () {
            var entityForeign = this.model.get('entityForeign');
            var linkType = this.model.get('linkType');

            if (!entityForeign || !linkType) {
                this.model.set('link', '');
                this.model.set('linkForeign', '');

                this.model.set('label', '');
                this.model.set('labelForeign', '');
                return;
            }

            var link;
            var linkForeign;

            switch (linkType) {
                case 'oneToMany':
                    linkForeign = Fox.Utils.lowerCaseFirst(this.scope);
                    link = this.toPlural(Fox.Utils.lowerCaseFirst(entityForeign));
                    if (entityForeign == this.scope) {

                        if (linkForeign == Fox.Utils.lowerCaseFirst(this.scope)) {
                            linkForeign = linkForeign + 'Parent';
                        }
                    }
                    break;
                case 'manyToOne':
                    linkForeign = this.toPlural(Fox.Utils.lowerCaseFirst(this.scope));
                    link = Fox.Utils.lowerCaseFirst(entityForeign);
                    if (entityForeign == this.scope) {
                        if (link == Fox.Utils.lowerCaseFirst(this.scope)) {
                            link = link + 'Parent';
                        }
                    }
                    break;
                case 'manyToMany':
                    linkForeign = this.toPlural(Fox.Utils.lowerCaseFirst(this.scope));
                    link = this.toPlural(Fox.Utils.lowerCaseFirst(entityForeign));
                    if (link == linkForeign) {
                        link = link + 'Right';
                        linkForeign = linkForeign + 'Left';
                    }
                    break;
            }

            this.model.set('link', link);
            this.model.set('linkForeign', linkForeign);

            this.model.set('label', Fox.Utils.upperCaseFirst(link));
            this.model.set('labelForeign', Fox.Utils.upperCaseFirst(linkForeign));

            return;
        },

        handleLinkChange: function (field) {
            var value = this.model.get(field);
            if (value) {
                value = value.replace(/\-/g, ' ').replace(/_/g, ' ').replace(/[^\w\s]/gi, '').replace(/ (.)/g, function (match, g) {
                    return g.toUpperCase();
                }).replace(' ', '');
                if (value.length) {
                     value = Fox.Utils.lowerCaseFirst(value);
                }
            }
            this.model.set(field, value);
        },

        afterRender: function () {
            this.getView('linkType').on('change', function (m) {
                this.populateFields();
            }, this);
            this.getView('entityForeign').on('change', function (m) {
                this.populateFields();
            }, this);

            this.getView('link').on('change', function (m) {
                this.handleLinkChange('link');
            }, this);
            this.getView('linkForeign').on('change', function (m) {
                this.handleLinkChange('linkForeign');
            }, this);
        },

        save: function () {
            var arr = [
                'link',
                'linkForeign',
                'label',
                'labelForeign',
                'linkType',
                'entityForeign'
            ];

            var notValid = false;

            arr.forEach(function (item) {
                if (!this.hasView(item)) return;
                if (this.getView(item).mode != 'edit') return;
                this.getView(item).fetchToModel();
            }, this);

            arr.forEach(function (item) {
                if (!this.hasView(item)) return;
                if (this.getView(item).mode != 'edit') return;
                notValid = this.getView(item).validate() || notValid;
            }, this);

            if (notValid) {
                return;
            }

            this.$el.find('button[data-name="save"]').addClass('disabled');

            var url = 'EntityManager/action/createLink';
            if (!this.isNew) {
                url = 'EntityManager/action/updateLink';
            }

            var entity = this.scope;
            var entityForeign = this.model.get('entityForeign');
            var link = this.model.get('link');
            var linkForeign = this.model.get('linkForeign');
            var label = this.model.get('label');
            var labelForeign = this.model.get('labelForeign');

            $.ajax({
                url: url,
                type: 'POST',
                data: JSON.stringify({
                    entity: entity,
                    entityForeign: entityForeign,
                    link: link,
                    linkForeign: linkForeign,
                    label: label,
                    labelForeign: labelForeign,
                    linkType: this.model.get('linkType')
                }),
                error: function (x) {
                    if (x.status == 409) {
                        Fox.Ui.error(this.translate('linkConflict', 'messages', 'EntityManager'));
                        x.errorIsHandled = true;
                    }
                    this.$el.find('button[data-name="save"]').removeClass('disabled');
                }.bind(this)
            }).done(function () {
                if (!this.isNew) {
                    Fox.Ui.success(this.translate('Saved'));
                } else {
                    Fox.Ui.success(this.translate('Created'));
                }

                var data;

                data = ((this.getLanguage().data || {}) || {})[entity] || {};
                (data.fields || {})[link] = label;
                (data.links || {})[link] = label;

                data = ((this.getLanguage().data || {}) || {})[entityForeign];
                (data.fields || {})[linkForeign] = labelForeign;
                (data.links || {})[linkForeign] = labelForeign;

                this.getMetadata().load(function () {
                    this.trigger('after:save');
                    this.close();
                }.bind(this), true);
            }.bind(this));
        },

    });
});

