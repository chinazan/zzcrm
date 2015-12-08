
Fox.define('Crm:Views.Dashlets.Calendar', 'Views.Dashlets.Abstract.Base', function (Dep) {

    return Dep.extend({

        name: 'Calendar',

        _template: '<div class="calendar-container">{{{calendar}}}</div>',

        defaultOptions: {
            mode: 'basicWeek',
            isDoubleHeight: false
        },

        setup: function () {
            this.optionsFields['mode'] = {
                type: 'enum',
                options: ['basicWeek', 'agendaWeek', 'month'],
            };
            this.optionsFields['isDoubleHeight'] = {
                type: 'bool',
            };
        },

        afterRender: function () {
            var height = 296;
            if (this.getOption('isDoubleHeight')) {
                height = 643;
            }
            this.createView('calendar', 'Crm:Calendar.Calendar', {
                mode: this.getOption('mode'),
                el: this.$el.selector + ' > .calendar-container',
                header: false,
                height: height ,
            }, function (view) {
                view.render();
            });
        }

    });
});


