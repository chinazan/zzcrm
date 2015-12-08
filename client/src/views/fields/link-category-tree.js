
Fox.define('Views.Fields.LinkCategoryTree', 'Views.Fields.Link', function (Dep) {

    return Dep.extend({

        selectRecordsViewName: 'Modals.SelectCategoryTreeRecords',

        autocompleteDisabled: false,

        fetchSearch: function () {
            var data = Dep.prototype.fetchSearch.call(this);

            if (!data) return data;

            if (data.typeFront == 'is') {
                data.field = this.name;
                data.type = 'inCategory';
            }
            return data;
        },
    });
});

