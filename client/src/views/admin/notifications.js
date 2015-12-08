
Fox.define('views/admin/notifications', 'views/settings/record/edit', function (Dep) {

    return Dep.extend({

        layoutName: 'notifications',

        dependencyDefs: {
            'assignmentEmailNotifications': {
                map: {
                    true: [
                        {
                            action: 'show',
                            fields: ['assignmentEmailNotificationsEntityList']
                        }
                    ]
                },
                default: [
                    {
                        action: 'hide',
                        fields: ['assignmentEmailNotificationsEntityList']
                    }
                ]
            }
        },

        setup: function () {
            Dep.prototype.setup.call(this);
        }

    });

});

