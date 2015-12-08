
Fox.define('crm:views/meeting/record/panels/attendees', 'views/record/panels/side', function (Dep) {

    return Dep.extend({

        setup: function () {
            this.fieldList = [];

            this.fieldList.push('users');

            if (this.getAcl().check('Contact')) {
                this.fieldList.push('contacts');
            }
            if (this.getAcl().check('Lead')) {
                this.fieldList.push('leads');
            }

            Dep.prototype.setup.call(this);
        }

    });

});
