
Fox.define('views/email-account/record/detail', 'views/record/detail', function (Dep) {

    return Dep.extend({

        afterRender: function () {
            Dep.prototype.afterRender.call(this);
            this.initSslFieldListening();

            if (this.getUser().isAdmin()) {
                var fieldView = this.getFieldView('assignedUser');
                if (fieldView) {
                    fieldView.readOnly = false;
                    fieldView.render();
                }

            }
        },


        initSslFieldListening: function () {
            var sslField = this.getFieldView('ssl');
            this.listenTo(sslField, 'change', function () {
                var ssl = sslField.fetch()['ssl'];
                if (ssl) {
                    this.model.set('port', '993');
                } else {
                    this.model.set('port', '143');
                }
            }, this);
        }

    });

});

