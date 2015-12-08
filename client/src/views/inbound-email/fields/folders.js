
Fox.define('Views.InboundEmail.Fields.Folders', 'Views.InboundEmail.Fields.Folder', function (Dep) {

    return Dep.extend({

        addFolder: function (folder) {
            var value = this.$element.val();

            var folders = [];
            if (value != '') {
                folders = value.split(',');
            }

            if (!~folders.indexOf(folder)) {
                folders.push(folder);
            }
            this.$element.val(folders.join(','));
        },
    });
});
