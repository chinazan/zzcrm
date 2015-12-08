
Fox.define('views/admin/authentication', 'views/settings/record/edit', function (Dep) {

    return Dep.extend({

        layoutName: 'authentication',

        dependencyDefs: {
            'ldapAuth': {
                map: {
                    true: [
                        {
                            action: 'show',
                            fields: ['ldapUsername', 'ldapPassword']
                        }
                    ]
                },
                default: [
                    {
                        action: 'hide',
                        fields: ['ldapUsername', 'ldapPassword']
                    }
                ]
            },
            'ldapAccountCanonicalForm': {
                map: {
                    'Backslash': [
                        {
                            action: 'show',
                            fields: ['ldapAccountDomainName', 'ldapAccountDomainNameShort']
                        }
                    ],
                    'Principal': [
                        {
                            action: 'show',
                            fields: ['ldapAccountDomainName', 'ldapAccountDomainNameShort']
                        }
                    ]
                },
                default: [
                    {
                        action: 'hide',
                        fields: ['ldapAccountDomainName', 'ldapAccountDomainNameShort']
                    }
                ]
            }
        },

        setup: function () {
            Dep.prototype.setup.call(this);

            this.methodList = this.getMetadata().get('entityDefs.Settings.fields.authenticationMethod.options') || [];

            this.authFields = {
                'LDAP': [
                    'ldapHost', 'ldapPort', 'ldapAuth', 'ldapSecurity',
                    'ldapUsername', 'ldapPassword', 'ldapBindRequiresDn',
                    'ldapUserLoginFilter', 'ldapBaseDn', 'ldapAccountCanonicalForm',
                    'ldapAccountDomainName', 'ldapAccountDomainNameShort', 'ldapAccountDomainName',
                    'ldapAccountDomainNameShort', 'ldapTryUsernameSplit', 'ldapOptReferrals',
                    'ldapCreateFoxUser'
                ]
            };
        },


        afterRender: function () {
            this.handlePanelsVisibility();
            this.listenTo(this.model, 'change:authenticationMethod', function () {
                this.handlePanelsVisibility();
            }, this);
        },

        handlePanelsVisibility: function () {
            var authenticationMethod = this.model.get('authenticationMethod');

            this.methodList.forEach(function (method) {
                var list = (this.authFields[method] || []);
                if (method != authenticationMethod) {
                    this.hidePanel(method);
                    list.forEach(function (field) {
                        this.hideField(field);
                    }, this);
                } else {
                    this.showPanel(method);

                    list.forEach(function (field) {
                        this.showField(field);
                    }, this);
                    Object.keys(this.dependencyDefs || {}).forEach(function (attr) {
                        if (~list.indexOf(attr)) {
                            this._handleDependencyAttribute(attr);
                        }
                    }, this);
                }
            }, this);
        },

    });

});

