Fox.define('views/scheduled-job/fields/job', 'views/fields/enum', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);

            if (this.mode == 'edit' || this.mode == 'detail') {
                this.wait(true);
                $.ajax({
                    url: 'Admin/jobs',
                    success: function (data) {
                        this.params.options = data;
                        this.params.options.unshift('');
                        this.wait(false);
                    }.bind(this)
                });
            }

            if (this.model.isNew()) {
                this.on('change', function () {
                    var label = this.getLanguage().translateOption(this.model.get('job'), 'job', 'ScheduledJob');
                    this.model.set('name', label);
                }, this);
            }
        }

    });

});
