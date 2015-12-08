
Fox.define('Views.Dashlets.Abstract.Base', 'View', function (Dep) {

    return Dep.extend({

        optionsView: 'Dashlets.Options.Base',

        defaultOptions: null,

        optionsData: null,

        actionRefresh: function () {
            this.render();
        },

        actionOptions: function () {},

        optionsFields: {
            'title': {
                type: 'varchar',
                required: true,
            },
            'autorefreshInterval': {
                type: 'enumFloat',
                options: [0, 0.5, 1, 2, 5, 10],
            },
        },

        init: function () {
            this.defaultOptions = _.extend({
                title: this.getLanguage().translate(this.name, 'dashlets'),
            }, this.defaultOptions || {});

            this.optionsFields = Fox.Utils.clone(this.optionsFields);

            var options = Fox.Utils.clone(this.defaultOptions);

            for (var key in options) {
                if (typeof options[key] == 'function') {
                    options[key] = options[key].call(this);
                }
            }

            var storedOptions = this.getPreferences().getDashletOptions(this.options.id) || {};

            this.optionsData = _.extend(options, storedOptions);

            if (this.optionsData.autorefreshInterval || false) {
                var interval = this.optionsData.autorefreshInterval * 60000;

                var t;
                var process = function () {
                    t = setTimeout(function () {
                        this.actionRefresh();
                        process();
                    }.bind(this), interval);
                }.bind(this);

                process();

                this.once('remove', function () {
                    clearTimeout(t);
                }, this);
            }


            this.actionList = Fox.Utils.clone(this.actionList);
            this.setupActionList();
        },

        actionList: [
            {
                name: 'refresh',
                label: 'Refresh',
                iconHtml: '<span class="glyphicon glyphicon-refresh"></span>',
            },
            {
                name: 'options',
                label: 'Options',
                iconHtml: '<span class="glyphicon glyphicon-pencil"></span>',
            },
            {
                name: 'remove',
                label: 'Remove',
                iconHtml: '<span class="glyphicon glyphicon-remove"></span>',
            }
        ],


        setupActionList: function () {

        },

        getOption: function (key) {
            return this.optionsData[key];
        },
    });
});


