Fox.define('Crm:Views.Dashlets.Abstract.Chart', ['Views.Dashlets.Abstract.Base','lib!Flotr'], function (Dep, Flotr) {

    return Dep.extend({
    
        _template: '<div class="chart-container"></div><div class="legend-container"></div>',
        
        decimalMark: '.',
        
        thousandSeparator: ',',
        
        colors: ['#6FA8D6', '#4E6CAD', '#EDC555', '#ED8F42', '#DE6666', '#7CC4A4', '#8A7CC2', '#D4729B'],
        
        successColor: '#5ABD37',
        
        init: function () {
            Dep.prototype.init.call(this);
            
            this.flotr = Flotr;            
            
            if (this.getPreferences().has('decimalMark')) {
                this.decimalMark = this.getPreferences().get('decimalMark') 
            } else {
                if (this.getConfig().has('decimalMark')) {
                    this.decimalMark = this.getConfig().get('decimalMark') 
                }
            }                            
            if (this.getPreferences().has('thousandSeparator')) {
                this.thousandSeparator = this.getPreferences().get('thousandSeparator') 
            } else {
                if (this.getConfig().has('thousandSeparator')) {
                    this.thousandSeparator = this.getConfig().get('thousandSeparator') 
                }
            }
            
            this.once('after:render', function () {
                $(window).on('resize.chart' + this.name, function () {
                    this.drow();
                }.bind(this));
            }, this);
            
            this.once('remove', function () {
                $(window).off('resize.chart' + this.name)
            }, this);            
        },
        
        formatNumber: function (value) {
            if (value !== null) {
                var parts = value.toString().split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, this.thousandSeparator);
                if (parts[1] == 0) {
                    parts.splice(1, 1); 
                }
                return parts.join(this.decimalMark);
            }
            return '';
        },
        
        afterRender: function () {        
            this.fetch(function (data) {
                this.chartData = this.prepareData(data);                                        
                
                var $container = this.$container = this.$el.find('.chart-container');
            
                var height = '245px';
                if (this.chartData.length > 5) {
                    height = '215px';
                }
                $container.css('height', height);
            
                setTimeout(function () {            
                    this.drow();
                }.bind(this), 1);
            });
        },
        
        url: function () {},
        
        prepareData: function (response) {
            return response;
        },
        
        fetch: function (callback) {
            $.ajax({
                type: 'get',
                url: this.url(),
                success: function (response) {
                    callback.call(this, response);
                }.bind(this)
            });    
        },

    });
});

