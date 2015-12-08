
Fox.define('crm:controllers/calendar', 'controller', function (Dep) {

    return Dep.extend({

        checkAccess: function () {
            if (this.getAcl().check('Calendar')) {
                return true;
            }
            return false;
        },

        show: function (options) {
            this.index(options);
        },

        index: function (options) {
            this.handleCheckAccess();

            this.main('crm:views/calendar/calendar-page', {
                date: options.date,
                mode: options.mode,
                userId: options.userId,
                userName: options.userName
            });
        },
    });
});


