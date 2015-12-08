
Fox.define('crm:views/mass-email/record/detail', 'views/record/detail', function (Dep) {

    return Dep.extend({

        duplicateAction: true,

        bottomView: 'crm:views/mass-email/record/detail-bottom'

    });
});

