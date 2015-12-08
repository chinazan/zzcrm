
Fox.define('Views.User.Record.DetailSide', 'Views.Record.DetailSide', function (Dep) {

    return Dep.extend({

        panelList: [
            {
                name: 'default',
                label: false,
                view: 'Record.Panels.Side',
                options: {
                    fieldList: ['avatar'],
                    mode: 'detail',
                }
            }
        ],

        setupPanels: function () {
            Dep.prototype.setupPanels.call(this);

            var showActivities = false;

            if (this.getUser().isAdmin()) {
                showActivities = true;
            } else {
                if (this.getAcl().get('userPermission') === 'no') {
                    if (this.model.id == this.getUser().id) {
                        showActivities = true;
                    }
                } else if (this.getAcl().get('userPermission') === 'team') {
                    if (this.model.has('teamsIds')) {
                        this.model.get('teamsIds').forEach(function (id) {
                            if (~(this.getUser().get('teamsIds') || []).indexOf(id)) {
                                showActivities = true;
                            }
                        }, this);
                    } else {
                        this.listenToOnce(this.model, 'sync', function () {
                            this.model.get('teamsIds').forEach(function (id) {
                                if (~(this.getUser().get('teamsIds') || []).indexOf(id)) {
                                    this.getParentView().showPanel('activities');
                                    this.getParentView().showPanel('history');
                                    this.getView('activities').actionRefresh();
                                    this.getView('history').actionRefresh();
                                    return;
                                }
                            }, this);
                        }, this);
                    }
                } else {
                    showActivities = true;
                }
            }

            this.panelList.push({
                "name":"activities",
                "label":"Activities",
                "view":"Crm:Record.Panels.Activities",
                "hidden": !showActivities
            });
            this.panelList.push({
                "name":"history",
                "label":"History",
                "view":"Crm:Record.Panels.History",
                "hidden": !showActivities
            });
        }

    });

});

