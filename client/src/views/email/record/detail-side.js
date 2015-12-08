
Fox.define('views/email/record/detail-side', 'views/record/detail-side', function (Dep) {

    return Dep.extend({

        panelList: [
            {
                name: 'default',
                label: false,
                view: 'Record.Panels.DefaultSide',
                options: {
                    fieldList: [
                        {
                            name: 'teams',
                            view: 'Fields.Teams'
                        },
                        'replied',
                        'replies'
                    ]
                }
            }
        ]

    });

});

