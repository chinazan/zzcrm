
Fox.define('Views.Site.Navbar', ['View', 'lib!socket-io'], function (Dep) {

    return Dep.extend({

        template: 'site.navbar',

        currentTab: null,

        data: function () {
            return {
                tabListDefs: this.tabListDefs,
                title: this.options.title,
                menu: this.getMenuDefs(),
                quickCreateList: this.quickCreateList,
                enableQuickCreate: this.quickCreateList.length > 0,
                userName: this.getUser().get('name'),
                agent: this.getUser().get('agentName'),
                userId: this.getUser().id,
                logoSrc: this.getLogoSrc()
            };
        },

        events: {
            'click .navbar-collapse.in a.nav-link': function (e) {
                var $a = $(e.currentTarget);
                var href = $a.attr('href');
                if (href && href != '#') {
                    this.$el.find('.navbar-collapse.in').collapse('hide');
                }
            },
            'click .navbar-header a.navbar-brand': function (e) {
                //this.$el.find('.navbar-collapse.in').collapse('hide');
            },
            'click .callcenter-action': function (e) {
                var $a = $(e.currentTarget);
                console.log($a.data('action'));
            },
            'click a[data-action="quick-create"]': function (e) {
                e.preventDefault();
                var scope = $(e.currentTarget).data('name');
                this.notify('Loading...');
                this.createView('quickCreate', 'Modals.Edit', {scope: scope}, function (view) {
                    view.once('after:render', function () {
                        this.notify(false);
                    });
                    view.render();
                });
            },
            'click .navbar-header a.minimizer': function () {
                var $body = $('body');
                if ($body.hasClass('minimized')) {
                    $body.removeClass('minimized');
                    this.getStorage().clear('state', 'layoutMinimized');
                } else {
                    $body.addClass('minimized');
                    this.getStorage().set('state', 'layoutMinimized', true);
                }
            }
        },

        getLogoSrc: function () {
            var companyLogoId = this.getConfig().get('companyLogoId');
            if (!companyLogoId) {
                return 'client/img/logo.png';
            }
            return '?entryPoint=LogoImage&size=small-logo';
        },

        setup: function () {

            var self = this;

            self.socket = io('http://192.168.33.10:3000');
            self.agent = this.getUser().get('agentName');

            self.socket.emit('login', self.agent);
            self.socket.on('popupOnCall'+self.agent, function(data){
                self.actionSelectPhoneNumber(data);
            });
            self.socket.on('changeExtenStatus'+self.agent, function(data){
                console.log(data);
            });

            this.getRouter().on('routed', function (e) {
                if (e.controller) {
                    this.selectTab(e.controller);
                } else {
                    this.selectTab(false);
                }
            }.bind(this));

            var tabList = this.getPreferences().get('useCustomTabList') ? this.getPreferences().get('tabList') : this.getConfig().get('tabList');

            this.tabList = tabList.filter(function (scope) {
                if (this.getMetadata().get('scopes.' + scope + '.acl')) {
                    return this.getAcl().check(scope);
                }
                return true;
            }, this);

            this.quickCreateList = (this.getConfig().get('quickCreateList') || []).filter(function (scope) {
                if (this.getMetadata().get('scopes.' + scope + '.acl')) {
                    return this.getAcl().check(scope, 'edit');
                }
                return true;
            }, this);

            this.createView('notificationsBadge', 'Notifications.Badge', {
                el: this.options.el + ' .notifications-badge-container'
            });

            this.createView('globalSearch', 'GlobalSearch.GlobalSearch', {
                el: this.options.el + ' .global-search-container'
            });

            this.tabListDefs = this.getTabListDefs();

            this.once('remove', function () {
                $(window).off('resize.navbar');
                $(window).off('scroll.navbar');
            });
        },

        actionSelectPhoneNumber : function(data){
            var self = this;
            $.ajax({
                    url: "Cc/action/getAccountByPhone?dst="+data.dst,
                    type: "GET",
                    dataType: 'json',
                })
                .done(function(ajaxData){
                    if (typeof(ajaxData) != 'undefined' ) {
                        self.popupView(ajaxData);
                    } else {
                        alert('error');
                    }
                });
        },

        popupView: function(data){
            this.notify('Loading...');
            this.createView('quickEdit', 'Modals.Edit', {
                scope: data.scope,
                id: data.id,
                phone: data.phone,
                fullFormDisabled: false
            }, function (view) {
                view.once('after:render', function () {
                    Fox.Ui.notify(false);
                    //this.dialog.hide();
                }, this);

                this.listenToOnce(view, 'remove', function () {
                    //this.close();
                }, this);

                this.listenToOnce(view, 'after:save', function () {
                    //this.trigger('after:save');
                }, this);

                view.render();
            }.bind(this));
        },

        adjust: function () {
            var $window = $(window);

            var navbarIsVertical = this.getThemeManager().getParam('navbarIsVertical');
            var navbarStaticItemsHeight = this.getThemeManager().getParam('navbarStaticItemsHeight') || 0;

            var smallScreenWidth = 768;

            if (!navbarIsVertical) {
                var $tabs = this.$el.find('ul.tabs');
                var $moreDropdown = $tabs.find('li.more');
                var $more = $tabs.find('li.more > ul');

                $window.on('resize.navbar', function() {
                    updateWidth();
                });

                var hideOneTab = function () {
                    var count = $tabs.children().size();
                    var $one = $tabs.children().eq(count - 2);
                    $one.prependTo($more);
                };
                var unhideOneTab = function () {
                    var $one = $more.children().eq(0);
                    if ($one.size()) {
                        $one.insertBefore($moreDropdown);
                    }
                };

                var tabCount = this.tabList.length;
                var $navbar = $('#navbar .navbar');
                var navbarNeededHeight = 45;

                $moreDd = $('#nav-more-tabs-dropdown');


                var updateWidth = function () {
                    var windowWidth = $(window.document).width();
                    var windowWidth = window.innerWidth;
                    var moreWidth = $moreDd.width();

                    $more.children('li').each(function (i, li) {
                        unhideOneTab();
                    });

                    $more.parent().addClass('hidden');

                    if (windowWidth < smallScreenWidth) {
                        return;
                    }

                    var headerWidth = this.$el.width();

                    var maxWidth = headerWidth - 546 - moreWidth;
                    var width = $tabs.width();

                    var i = 0;
                    while (width > maxWidth) {
                        hideOneTab();
                        width = $tabs.width();
                        i++;
                        if (i >= tabCount) {
                            setTimeout(function () {
                                updateWidth();
                            }, 100);
                            break;
                        }
                    }

                    if ($more.children().size() > 0) {
                        $moreDropdown.removeClass('hidden');
                    }
                }.bind(this);

                var processUpdateWidth = function () {
                    if ($navbar.height() > navbarNeededHeight) {
                        updateWidth();
                        setTimeout(function () {
                            processUpdateWidth();
                        }, 200);
                    } else {
                        setTimeout(function () {
                            processUpdateWidth();
                        }, 1000);
                    }
                };

                if ($navbar.height() <= navbarNeededHeight) {
                    $more.parent().addClass('hidden');
                }

                processUpdateWidth();


            } else {
                var $tabs = this.$el.find('ul.tabs');

                var minHeight = $tabs.height() + navbarStaticItemsHeight;
                $('body').css('minHeight', minHeight + 'px');
                $window.on('scroll.navbar', function () {
                    $tabs.scrollTop($window.scrollTop());
                }.bind(this));

                var updateHeight = function () {
                    var windowHeight = window.innerHeight;
                    var windowWidth = window.innerWidth;

                    if (windowWidth < smallScreenWidth) {
                        $tabs.css('height', 'none');
                        return;
                    }

                    $tabs.css('height', (windowHeight - navbarStaticItemsHeight) + 'px');
                }.bind(this);

                $(window).on('resize.navbar', function() {
                    updateHeight();
                });
                updateHeight();
            }
        },

        afterRender: function () {
            this.selectTab(this.getRouter().getLast().controller);

            if (this.getStorage().get('state', 'layoutMinimized')) {
                var $body = $('body');
                $body.addClass('minimized');
            }

            if (this.getThemeManager().getParam('navbarIsVertical')) {
                var process = function () {
                    if (this.$el.height() < $(window).height() / 2) {
                        setTimeout(function () {
                            process();
                        }.bind(this), 50);
                        return;
                    }
                    if (this.getThemeManager().isUserTheme()) {
                        setTimeout(function () {
                            this.adjust();
                        }.bind(this), 10);
                        return;
                    }
                    this.adjust();
                }.bind(this);
                process();
            } else {
                var process = function () {
                    if (this.$el.width() < $(window).width() / 2) {
                        setTimeout(function () {
                            process();
                        }.bind(this), 50);
                        return;
                    }
                    if (this.getThemeManager().isUserTheme()) {
                        setTimeout(function () {
                            this.adjust();
                        }.bind(this), 10);
                        return;
                    }
                    this.adjust();
                }.bind(this);
                process();
            }
        },

        selectTab: function (name) {
            if (this.currentTab != name) {
                this.$el.find('ul.tabs li.active').removeClass('active');
                if (name) {
                    this.$el.find('ul.tabs  li[data-name="' + name + '"]').addClass('active');
                }
                this.currentTab = name;
            }
        },

        getTabList: function () {
            return this.tabList;
        },

        getTabListDefs: function () {
            var tabListDefs = [];
            this.getTabList().forEach(function (tab, i) {
                var label = this.getLanguage().translate(tab, 'scopeNamesPlural');
                var o = {
                    link: '#' + tab,
                    label: label,
                    shortLabel: label.substr(0, 2),
                    name: tab
                };
                tabListDefs.push(o);
            }, this);
            return tabListDefs;
        },

        getMenuDefs: function () {
            var menuDefs = [
                {
                    link: '#Preferences',
                    label: this.getLanguage().translate('Preferences'),
                },
                {
                    link: '#About',
                    label: this.getLanguage().translate('About'),
                },
                {
                    divider: true,
                },
                {
                    link: '#clearCache',
                    label: this.getLanguage().translate('Clear Local Cache'),
                },
                {
                    link: '#logout',
                    label: this.getLanguage().translate('Log Out'),
                },
            ];

            if (this.getUser().isAdmin()) {
                menuDefs.unshift({
                    link: '#Admin',
                    label: this.getLanguage().translate('Administration'),
                });
            }
            return menuDefs;
        }
    });

});


