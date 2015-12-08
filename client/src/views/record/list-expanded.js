
Fox.define('Views.Record.ListExpanded', 'Views.Record.List', function (Dep) {

    return Dep.extend({

        template: 'record.list-expanded',

        checkboxes: false,

        selectable: false,

        rowActionsView: false,

        _internalLayoutType: 'list-row-expanded',

        presentationType: 'expanded',

        pagination: false,

        header: false,

        _internalLayout: null,

        checkedList: null,

        listContainerEl: '.list > ul',

        _loadListLayout: function (callback) {
            var type = this.type + 'Expanded';
            this._helper.layoutManager.get(this.collection.name, type, function (listLayout) {
                callback(listLayout);
            });
        },

        _convertLayout: function (listLayout, model) {
            model = model || this.collection.model.prototype;

            var layout = {
                rows: [],
                right: false,
            };

            for (var i in listLayout.rows) {
                var row = listLayout.rows[i];
                var layoutRow = [];
                for (var j in row) {

                    var e = row[j];
                    var type = e.type || model.getFieldType(e.name) || 'base';

                    var item = {
                        name: e.name,
                        view: e.view || model.getFieldParam(e.name, 'view') || this.getFieldManager().getViewName(type),
                        options: {
                            defs: {
                                name: e.name,
                                params: e.params || {}
                            },
                            mode: 'list'
                        }
                    };
                    if (e.link) {
                        item.options.mode = 'listLink';
                    }
                    layoutRow.push(item);
                }
                layout.rows.push(layoutRow);
            }

            if ('right' in listLayout) {
                if (listLayout.right != false) {
                    layout.right = {
                        name: listLayout.right.name || 'right',
                        view: listLayout.right.view,
                        options: {
                            defs: {
                                params: {
                                    width: listLayout.right.width || '7%'
                                }
                            }
                        }
                    };
                }
            } else {
                if (this.rowActionsView) {
                    layout.right = this.getRowActionsDefs();
                }
            }
            return layout;
        },

        getRowSelector: function (id) {
            return 'li[data-id="' + id + '"]';
        },

        getItemEl: function (model, item) {
            return this.options.el + ' li[data-id="' + model.id + '"] .cell-' + item.name;
        },

        prepareInternalLayout: function (internalLayout, model) {
            var rows = internalLayout.rows || [];
            rows.forEach(function (row) {
                row.forEach(function (col) {
                    col.el = this.getItemEl(model, col);
                }, this);
            }, this);
            if (internalLayout.right) {
                internalLayout.right.el = this.getItemEl(model, internalLayout.right);
            }
        },

    });
});


