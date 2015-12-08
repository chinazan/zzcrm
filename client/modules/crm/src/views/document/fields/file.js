
Fox.define('Crm:Views.Document.Fields.File', 'Views.Fields.File', function (Dep) {

    return Dep.extend({

        getValueForDisplay: function () {
            if (this.mode == 'list') {
                var name = this.model.get(this.nameName);
                var type = this.model.get(this.typeName) || this.defaultType;
                var id = this.model.get(this.idName);

                if (!id) {
                    return false;
                }

                return '<a title="'+name+'" href="?entryPoint=download&id=' + id + '"><span class="glyphicon glyphicon-paperclip small"></span></a>';
            } else {
                return Dep.prototype.getValueForDisplay.call(this);
            }
        },

    });

});
