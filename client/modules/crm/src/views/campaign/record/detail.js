

Fox.define('crm:views/campaign/record/detail', 'views/record/detail', function (Dep) {

    return Dep.extend({

        duplicateAction: true,

        bottomView: 'crm:views/campaign/record/detail-bottom',

        afterRender: function () {
        	Dep.prototype.afterRender.call(this);
        },

    });
});


