
Fox.define('Views.Fields.EnumStyled', 'Views.Fields.Enum', function (Dep) {

    return Dep.extend({

        listTemplate: 'fields.enum-styled.detail',

        detailTemplate: 'fields.enum-styled.detail',

        data: function () {
            var value = this.model.get(this.name);
            var style = 'default';
            if (value in this.styleHash) {
                style = this.styleHash[value];
            }
            return _.extend({
                style: style,
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            Dep.prototype.setup.call(this);

            this.styleHash = this.model.getFieldParam(this.name, 'style') || {};
        },
    });
});

