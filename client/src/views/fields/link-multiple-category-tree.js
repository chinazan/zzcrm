
Fox.define('Views.Fields.LinkMultipleCategoryTree', 'Views.Fields.LinkMultiple', function (Dep) {

    return Dep.extend({

        selectRecordsViewName: 'Modals.SelectCategoryTreeRecords',

        autocompleteDisabled: false,

        fetchSearch: function () {
            var data = Dep.prototype.fetchSearch.call(this);

            if (!data) return data;

            data.type = 'inCategory';

            return data;
        },
    });
});

