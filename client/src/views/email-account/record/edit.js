
Fox.define('views/email-account/record/edit', ['views/record/edit', 'views/email-account/record/detail'], function (Dep, Detail) {

    return Dep.extend({

        afterRender: function () {
            Dep.prototype.afterRender.call(this);

            Detail.prototype.initSslFieldListening.call(this);

            if (this.getUser().isAdmin()) {
                var fieldView = this.getFieldView('assignedUser');
                if (fieldView) {
                    fieldView.readOnly = false;
                    fieldView.setMode('edit');
                    fieldView.render();
                }
            }
        }

    });

});

