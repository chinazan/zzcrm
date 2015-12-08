
Fox.define('Views.Fields.DatetimeOptional', 'Views.Fields.Datetime', function (Dep) {

    return Dep.extend({

        type: "datetimeOptional",

        setup: function () {
            this.noneOption = this.translate('None');
            this.nameDate = this.name + 'Date';
        },

        isDate: function () {
            var dateValue = this.model.get(this.nameDate);
            if (dateValue && dateValue != '') {
                return true;
            }
            return false;
        },

        data: function () {
            var data = Dep.prototype.data.call(this);
            if (this.isDate()) {
                var dateValue = this.model.get(this.nameDate);
                data.date = this.getDateTime().toDisplayDate(dateValue);
                data.time = this.noneOption;
            }
            return data;
        },

        getValueForDisplay: function () {
            if (this.isDate()) {
                var dateValue = this.model.get(this.nameDate);
                return this.stringifyDateValue(dateValue);
            }
            return Dep.prototype.getValueForDisplay.call(this);
        },

        setDefaultTime: function () {
            this.$time.val(this.noneOption);
        },

        initTimepicker: function () {
            var $time = this.$time;

            $time.timepicker({
                step: 30,
                scrollDefaultNow: true,
                timeFormat: this.timeFormatMap[this.getDateTime().timeFormat],
                noneOption: [{
                    label: this.noneOption,
                    value: this.noneOption,
                }]
            });
            $time.parent().find('button.time-picker-btn').on('click', function () {
                $time.timepicker('show');
            });
        },

        fetch: function () {
            var data = {};

            var date = this.$el.find('[name="' + this.name + '"]').val();
            var time = this.$el.find('[name="' + this.name + '-time"]').val();

            var value = null;
            if (time != this.noneOption && time != '') {
                if (date != '' && time != '') {
                    value = this.parse(date + ' ' + time);
                }
                data[this.name] = value;
                data[this.nameDate] = null;
            } else {
                data[this.name] = null;
                if (date != '') {
                    data[this.nameDate] = this.getDateTime().fromDisplayDate(date);
                } else {
                    data[this.nameDate] = null;
                }
            }
            return data;
        },

    });
});

