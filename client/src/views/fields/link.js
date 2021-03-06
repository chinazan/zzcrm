
Fox.define('Views.Fields.Link', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        type: 'link',

        listTemplate: 'fields/link/list',

        detailTemplate: 'fields/link/detail',

        editTemplate: 'fields/link/edit',

        searchTemplate: 'fields/link/search',

        nameName: null,

        idName: null,

        foreignScope: null,

        AUTOCOMPLETE_RESULT_MAX_COUNT: 7,

        selectRecordsViewName: 'views/modals/select-records',

        autocompleteDisabled: false,

        createDisabled: false,

        data: function () {
            return _.extend({
                idName: this.idName,
                nameName: this.nameName,
                idValue: this.model.get(this.idName),
                nameValue: this.model.get(this.nameName),
                foreignScope: this.foreignScope,
            }, Dep.prototype.data.call(this));
        },

        getSelectFilters: function () {},

        getSelectBoolFilterList: function () {},

        getSelectPrimaryFilterName: function () {},

        setup: function () {
            this.nameName = this.name + 'Name';
            this.idName = this.name + 'Id';

            this.foreignScope = this.options.foreignScope || this.foreignScope;
            this.foreignScope = this.foreignScope || this.model.getFieldParam(this.name, 'entity') || this.model.defs.links[this.name].entity;

            if ('createDisabled' in this.options) {
                this.createDisabled = this.options.createDisabled;
            }
            var self = this;

            if (this.mode != 'list') {
                this.addActionHandler('selectLink', function () {
                    this.notify('Loading...');

                    var viewName = this.getMetadata().get('clientDefs.' + this.foreignScope + '.modalViews.select') || this.selectRecordsViewName;
                    console.log(viewName);
                    this.createView('dialog', viewName, {
                        scope: this.foreignScope,
                        createButton: !this.createDisabled && this.mode != 'search',
                        filters: this.getSelectFilters(),
                        boolFilterList: this.getSelectBoolFilterList(),
                        primaryFilterName: this.getSelectPrimaryFilterName()
                    }, function (view) {
                        view.render();
                        this.notify(false);
                        this.listenToOnce(view, 'select', function (model) {
                            this.select(model);
                        }, this);
                    }.bind(this));
                });
                this.addActionHandler('clearLink', function () {
                    this.clearLink();
                });
            }
        },

        select: function (model) {
            this.$elementName.val(model.get('name'));
            this.$elementId.val(model.get('id'));
            this.trigger('change');
        },

        clearLink: function () {
            this.$elementName.val('');
            this.$elementId.val('');
            this.trigger('change');
        },

        setupSearch: function () {
            this.searchParams.typeOptions = ['is', 'isEmpty', 'isNotEmpty'];
            this.events = _.extend({
                'change select.search-type': function (e) {
                    var type = $(e.currentTarget).val();
                    this.handleSearchType(type);
                },
            }, this.events || {});
        },

        handleSearchType: function (type) {
            if (~['isEmpty', 'isNotEmpty'].indexOf(type)) {
                this.$el.find('div.primary').addClass('hidden');
            } else {
                this.$el.find('div.primary').removeClass('hidden');
            }
        },

        getAutocompleteUrl: function () {
            var url = this.foreignScope + '?sortBy=name&maxCount=' + this.AUTOCOMPLETE_RESULT_MAX_COUNT;
            var boolList = this.getSelectBoolFilterList();
            var where = [];
            if (boolList) {
                url += '&' + $.param({'boolFilterList': boolList});
            }
            var primary = this.getSelectPrimaryFilterName();
            if (primary) {
                url += '&' + $.param({'primaryFilter': primary});
            }
            return url;
        },

        afterRender: function () {
            if (this.mode == 'edit' || this.mode == 'search') {
                this.$elementId = this.$el.find('input[name="' + this.idName + '"]');
                this.$elementName = this.$el.find('input[name="' + this.nameName + '"]');

                this.$elementName.on('change', function () {
                    if (this.$elementName.val() == '') {
                        this.$elementName.val('');
                        this.$elementId.val('');
                        this.trigger('change');
                    }
                }.bind(this));

                if (this.mode == 'edit') {
                    this.$elementName.on('blur', function (e) {
                        if (this.model.has(this.nameName)) {
                            e.currentTarget.value = this.model.get(this.nameName);
                        }
                    }.bind(this));
                } else if (this.mode == 'search') {
                    this.$elementName.on('blur', function (e) {
                        e.currentTarget.value = '';
                    }.bind(this));
                }


                if (!this.autocompleteDisabled) {
                    this.$elementName.autocomplete({
                        serviceUrl: function (q) {
                            return this.getAutocompleteUrl(q);
                        }.bind(this),
                        paramName: 'q',
                        minChars: 1,
                        autoSelectFirst: true,
                           formatResult: function (suggestion) {
                            return suggestion.name;
                        },
                        transformResult: function (response) {
                            var response = JSON.parse(response);
                            var list = [];
                            response.list.forEach(function(item) {
                                list.push({
                                    id: item.id,
                                    name: item.name,
                                    data: item.id,
                                    value: item.name,
                                    attributes: item
                                });
                            }, this);
                            return {
                                suggestions: list
                            };
                        }.bind(this),
                        onSelect: function (s) {
                            this.getModelFactory().create(this.foreignScope, function (model) {
                                model.set(s.attributes);
                                this.select(model);
                            }, this);
                        }.bind(this)
                    });
                }

                var $elementName = this.$elementName;

                $elementName.on('change', function () {
                    if (!this.model.get(this.idName)) {
                        $elementName.val(this.model.get(this.nameName));
                    }
                }.bind(this));

                this.once('render', function () {
                    $elementName.autocomplete('dispose');
                }, this);

                this.once('remove', function () {
                    $elementName.autocomplete('dispose');
                }, this);
            }

            if (this.mode == 'search') {
                var type = this.$el.find('select.search-type').val();
                this.handleSearchType(type);
            }
        },

        getValueForDisplay: function () {
            return this.model.get(this.nameName);
        },

        validateRequired: function () {
            if (this.params.required || this.model.isRequired(this.name)) {
                if (this.model.get(this.idName) == null) {
                    var msg = this.translate('fieldIsRequired', 'messages').replace('{field}', this.translate(this.name, 'fields', this.model.name));
                    this.showValidationMessage(msg);
                    return true;
                }
            }
        },

        fetch: function () {
            var data = {};
            data[this.nameName] = this.$el.find('[name="'+this.nameName+'"]').val() || null;
            data[this.idName] = this.$el.find('[name="'+this.idName+'"]').val() || null;

            return data;
        },

        fetchSearch: function () {
            var type = this.$el.find('select.search-type').val();
            var value = this.$el.find('[name="' + this.idName + '"]').val();

            if (type == 'isEmpty') {
                var data = {
                    type: 'isNull',
                    typeFront: type,
                    field: this.idName
                };
                return data;
            } else if (type == 'isNotEmpty') {
                var data = {
                    type: 'isNotNull',
                    typeFront: type,
                    field: this.idName
                };
                return data;
            } else {
                if (!value) {
                    return false;
                }
                var data = {
                    type: 'equals',
                    typeFront: type,
                    field: this.idName,
                    value: value,
                    valueName: this.$el.find('[name="' + this.nameName + '"]').val(),
                };
                return data;
            }
        }
    });
});

