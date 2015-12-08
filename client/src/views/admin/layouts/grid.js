
Fox.define('Views.Admin.Layouts.Grid', 'Views.Admin.Layouts.Base', function (Dep) {

    return Dep.extend({

        template: 'admin.layouts.grid',

        dataAttributes: null,

        panels: null,

        columnCount: 4,

        data: function () {
            return {
                scope: this.scope,
                type: this.type,
                buttonList: this.buttonList,
                enabledFields: this.enabledFields,
                disabledFields: this.disabledFields,
                panels: this.panels,
                columnCount: this.columnCount
            };
        },

        events: _.extend({
            'click #layout a[data-action="addPanel"]': function () {
                this.addPanel();
                this.makeDraggable();
            },
            'click #layout a[data-action="removePanel"]': function (e) {
                $(e.target).closest('ul.panels > li').find('ul.cells > li').each(function (i, li) {
                    if ($(li).attr('data-name')) {
                        $(li).appendTo($('#layout ul.disabled'));
                    }
                });
                $(e.target).closest('ul.panels > li').remove();
            },
            'click #layout a[data-action="addRow"]': function (e) {
                var tpl = this.unescape($("#layout-row-tpl").html());
                var html = _.template(tpl);
                $(e.target).closest('ul.panels > li').find('ul.rows').append(html);
                this.makeDraggable();
            },
            'click #layout a[data-action="removeRow"]': function (e) {
                $(e.target).closest('ul.rows > li').find('ul.cells > li').each(function (i, li) {
                    if ($(li).attr('data-name')) {
                        $(li).appendTo($('#layout ul.disabled'));
                    }
                });
                $(e.target).closest('ul.rows > li').remove();
            },
            'click #layout a[data-action="removeField"]': function (e) {
                var el = $(e.target).closest('li');
                var index = el.index();
                var parent = el.parent();

                el.appendTo($("ul.disabled"));

                var empty = $('<li class="empty disabled"></li>');
                //console.log(el.data('full-width'));
                if (el.data('full-width')) {
                    for (var i = 0; i < el.data('full-width'); i++) {
                        parent.append(empty.clone());
                    }
                } else {

                    if (index == 0) {
                        parent.prepend(empty);
                    } else {
                        empty.insertAfter(parent.children(':nth-child(' + index + ')'));
                    }
                }

                el.data('full-width', null);
                el.removeAttr('data-full-width');

                this.makeDraggable();
            },
            'click #layout a[data-action="minusCell"]': function (e) {
                if (this.columnCount < 2) {
                    return;
                }

                $li = $(e.currentTarget).closest('li');

                if($li.data('no') < 1){
                    return;
                }
                $ul = $li.parent();

                var liNo = $li.data('no');
                var pFullWidth = undefined;
                var cFullWidth = undefined;

                $ul.children('li').each(function(i,el){
                    if ($(el).data('no') == liNo-1){
                        pFullWidth = $(el).data('full-width');
                    }

                    if ($(el).data('no') == liNo){
                        cFullWidth = $(el).data('full-width');
                    }
                });

                if(pFullWidth != undefined){
                    var lFullWidth = pFullWidth;
                }else{
                    var lFullWidth = 1;
                }

                if(cFullWidth != undefined){
                    var rFullWidth = cFullWidth;
                }else{
                    var rFullWidth = 1;
                }

                $li.remove();

                var newFullWidth = lFullWidth+rFullWidth;

                $ul.children('li').each(function(i,el){
                    if ($(el).data('no') == liNo-1){
                        $(el).data('full-width', newFullWidth).attr('data-full-width', newFullWidth);
                    }
                });

                $ul.children('li').each(function(i,el){
                    $(el).data('no', i).attr('data-no', i);
                });

            },
            'click #layout a[data-action="edit-panel-label"]': function (e) {
                var el = $(e.target).closest('header').children('label');
                var value = el.text();

                var dialog = new Fox.Ui.Dialog({
                    modal: true,
                    body: '<label>' + this.getLanguage().translate('Panel Name', 'labels', 'Admin') + '</label><input type="text" name="label" class="form-control" value="'+value+'">',
                    buttons: [
                        {
                            name: 'ok',
                            text: '&nbsp; ' + this.getLanguage().translate('Ok') + ' &nbsp;',
                            onClick: function (dialog) {
                                el.text(dialog.$el.find('input[name="label"]').val());
                                dialog.close();
                            }.bind(this),
                        },
                        {
                            name: 'cancel',
                            text: this.getLanguage().translate('Cancel'),
                            onClick: function (dialog) {
                                dialog.close();
                            }
                        }
                    ]
                });
                dialog.show();
            }
        }, Dep.prototype.events),

        addPanel: function (data) {
            var tpl = this.unescape($("#layout-panel-tpl").html());

            var empty = false;
            if (!data) {
                empty = true;
            }

            data = data || {label: this.translate('New panel', 'labels', 'Admin'), rows: [[]]};

            data.rows.forEach(function (row) {
                var rest = this.columnCount - row.length;

                if (empty) {
                    for (var i = 0; i < rest; i++) {
                        row.push(false);
                    }
                }
                for (var i in row) {
                    if (row[i] != false) {
                        row[i].label = this.getLanguage().translate(row[i].name, 'fields', this.scope);
                    }

                }
            }.bind(this));


            var html = _.template(tpl, data);
            $("#layout .panels").append(html);
        },

        makeDraggable: function () {
            $('#layout ul.panels').sortable({distance: 4});
            $('#layout ul.panels').disableSelection();

            $('#layout ul.rows').sortable({
                distance: 4,
                connectWith: '.rows',
            });
            $('#layout ul.rows').disableSelection();

            $('#layout ul.cells > li').draggable({revert: 'invalid', revertDuration: 200, zIndex: 10}).css('cursor', 'pointer');

            $('#layout ul.cells > li').droppable().droppable('destroy');

            var self = this;
            $('#layout ul.cells:not(.disabled) > li').droppable({
                accept: '.cell',
                zIndex: 10,
                drop: function (e, ui) {
                    var index = ui.draggable.index();
                    var parent = ui.draggable.parent();

                    if (parent.get(0) == $(this).parent().get(0)) {
                        if ($(this).index() < ui.draggable.index()) {
                            $(this).before(ui.draggable);
                        } else {
                            $(this).after(ui.draggable);
                        }
                    } else {
                        ui.draggable.insertAfter($(this));

                        if (index == 0) {
                            $(this).prependTo(parent);
                        } else {
                            $(this).insertAfter(parent.children(':nth-child(' + (index) + ')'));
                        }
                    }
                    //console.log($(this).data('full-width'));
                    if ($(this).data('full-width')) {
                        $(ui.draggable).data('full-width', $(this).data('full-width')).attr('data-full-width', $(this).data('full-width'));
                    }

                    ui.draggable.css({
                        top: 0,
                        left: 0,
                    });

                    if ($(this).parent().hasClass('disabled') && !$(this).data('name')) {
                        $(this).remove();
                    }

                    self.makeDraggable();
                }
            });
        },

        afterRender: function () {
            this.panels.forEach(function (panel) {
                this.addPanel(panel);
            }.bind(this));
            this.makeDraggable();
        },

        fetch: function () {
            var layout = [];
            var self = this;
            $("#layout ul.panels > li").each(function () {
                var o = {
                    label: $(this).find('header label').text(),
                    rows: []
                };
                $(this).find('ul.rows > li').each(function (i, li) {
                    var row = [];
                    $(li).find('ul.cells > li').each(function (i, li) {
                        var cell = false;
                        if (!$(li).hasClass('empty')) {
                            cell = {};
                            self.dataAttributes.forEach(function (attr) {
                                var value = $(li).data(Fox.Utils.toDom(attr)) || null;
                                if (value) {
                                    cell[attr] = value;
                                }
                            });
                        }
                        row.push(cell);
                    });
                    o.rows.push(row);
                });

                layout.push(o);
            });

            return layout;
        },

        validate: function (layout) {
            var fieldCount = 0;
            layout.forEach(function (panel) {
                panel.rows.forEach(function (row) {
                    row.forEach(function (cell) {
                        if (cell != false) {
                            fieldCount++;
                        }
                    });
                });
            });
            if (fieldCount == 0) {
                alert('Layout cannot be empty.');
                return false;
            }
            return true;
        },
    });
});


