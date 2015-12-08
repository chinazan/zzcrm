
Fox.define('views/fields/json-object', 'views/fields/base', function (Dep) {

    return Dep.extend({

        type: 'jsonObject',

        listTemplate: 'fields/json-object/detail',

        detailTemplate: 'fields/json-object/detail',

        getValueForDisplay: function () {
            var text = JSON.stringify(this.model.get(this.name), false, 2).replace(/(\r\n|\n|\r)/gm, '<br>').replace(/\s/g, '&nbsp;');

            return text;
        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);
        }

    });
});

