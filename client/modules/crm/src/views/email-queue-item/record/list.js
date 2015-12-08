
Fox.define('crm:views/email-queue-item/record/list', 'views/record/list', function (Dep) {

    return Dep.extend({

        rowActionsView: 'views/record/row-actions/remove-only'

    });

});