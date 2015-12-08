
Fox.define('Crm:Views.Meeting.PopupNotification', 'Views.PopupNotification', function (Dep) {

    return Dep.extend({

        type: 'event',

        style: 'primary',

        template: 'crm:meeting.popup-notification',

        closeButton: true,

        setup: function () {
            this.wait(true);

            if (this.notificationData.entityType) {
                this.getModelFactory().create(this.notificationData.entityType, function (model) {

                    model.set('dateStart', this.notificationData.dateStart);

                    this.createView('dateStart', 'Fields.Datetime', {
                        model: model,
                        mode: 'detail',
                        el: this.options.el + ' .field-dateStart',
                        defs: {
                            name: 'dateStart'
                        },
                        readOnly: true
                    });

                    this.wait(false);
                }, this);
            }
        },

        data: function () {
            return _.extend({
                header: this.translate(this.notificationData.entityType, 'scopeNames')
            }, Dep.prototype.data.call(this));
        },

        onCancel: function () {
            $.ajax({
                url: 'Activities/action/removePopupNotification',
                type: 'POST',
                data: JSON.stringify({
                    id: this.notificationId
                })
            });
        },

    });
});

