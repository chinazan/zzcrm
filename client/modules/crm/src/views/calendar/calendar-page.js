
Fox.define('crm:views/calendar/calendar-page', 'view', function (Dep) {

    return Dep.extend({

        template: 'crm:calendar/calendar-page',

        el: '#main',

        setup: function () {
            var mode = this.options.mode || null;
            if (!mode) {
                var mode = this.getStorage().get('state', 'calendarMode') || null;
            }
            this.createView('calendar', 'crm:views/calendar/calendar', {
                date: this.options.date,
                userId: this.options.userId,
                userName: this.options.userName,
                mode: mode,
                el: '#main > .calendar-container',
            }, function (view) {
                var first = true;
                this.listenTo(view, 'view', function (date, mode) {
                    var url = '#Calendar/show/date=' + date + '&mode=' + mode;
                    if (this.options.userId) {
                        url += '&userId=' + this.options.userId;
                        if (this.options.userName) {
                            url += '&userName=' + this.options.userName;
                        }
                    }
                    if (!first) {
                        this.getRouter().navigate(url);
                    }
                    first = false;
                }, this);
                this.listenTo(view, 'change:mode', function (mode) {
                    this.getStorage().set('state', 'calendarMode', mode);
                }, this);
            }.bind(this));
        },

        updatePageTitle: function () {
            this.setPageTitle(this.translate('Calendar', 'scopeNames'));
        },
    });
});


