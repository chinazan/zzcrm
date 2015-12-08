
Fox.define('views/email/record/row-actions/default', 'views/record/row-actions/default', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            this.listenTo(this.model, 'change:isImportant', function () {
                setTimeout(function () {
                    this.reRender();
                }.bind(this), 10);
            }, this);
        },

        getActionList: function () {
            var list = Dep.prototype.getActionList.call(this);
            if (!this.model.get('isImportant')) {
                list.push({
                    action: 'markAsImportant',
                    label: 'Mark as Important',
                    data: {
                        id: this.model.id
                    }
                });
            } else {
                list.push({
                    action: 'markAsNotImportant',
                    label: 'Mark as Not Important',
                    data: {
                        id: this.model.id
                    }
                });
            }
            return list;
        }

    });

});


