Fox.define('Views.Admin.Upgrade.Ready', 'Views.Modal', function (Dep) {

    return Dep.extend({
    
        cssName: 'ready-modal',    
        
        header: false,
        
        template: 'admin.upgrade.ready',
        
        createButton: true,
        
        data: function () {        
            return {
                version: this.upgradeData.version,
                text: this.translate('upgradeVersion', 'messages', 'Admin').replace('{version}', this.upgradeData.version)
            };
        },
                
        setup: function () {
            
            this.buttons = [
                {
                    name: 'run',
                    label: this.translate('Run Upgrade', 'labels', 'Admin'),
                    style: 'danger',
                    onClick: function (dialog) {
                        this.run();
                    }.bind(this)
                },
                {
                    name: 'cancel',
                    label: 'Cancel',
                    onClick: function (dialog) {
                        dialog.close();
                    }
                } 
            ];
            
            this.upgradeData = this.options.upgradeData;
                    
            this.header = this.getLanguage().translate('Ready for upgrade', 'labels', 'Admin');                
            
        },
        
        run: function () {
            this.trigger('run');
            this.remove();
        }    
    });
});

