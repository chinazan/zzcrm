
Fox.define('Views.Fields.Teams', 'Views.Fields.LinkMultiple', function (Dep) {

    return Dep.extend({

        init: function () {
            this.assignmentPermission = this.getAcl().get('assignmentPermission');
            Dep.prototype.init.call(this);
        },

        getSelectBoolFilterList: function () {
            if (this.assignmentPermission == 'team' || this.assignmentPermission == 'no') {
                return ['onlyMy'];
            }
        },

    });
});


