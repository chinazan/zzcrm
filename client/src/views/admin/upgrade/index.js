
Fox.define('Views.Admin.Upgrade.Index', 'View', function (Dep) {

    return Dep.extend({

        template: 'admin.upgrade.index',

        packageContents: null,

        data: function () {
            return {
                versionMsg: this.translate('Current version') + ': ' + this.getConfig().get('version'),
                backupsMsg: this.translate('upgradeBackup', 'messages', 'Admin'),
                downloadMsg: this.translate('downloadUpgradePackage', 'messages', 'Admin').replace('{url}', 'http://www.espocrm.com/download/upgrades')
            };
        },

        events: {
            'change input[name="package"]': function (e) {
                this.$el.find('button[data-action="upload"]').addClass('disabled');
                this.$el.find('.message-container').html('');
                var files = e.currentTarget.files;
                if (files.length) {
                    this.selectFile(files[0]);
                }
            },
            'click button[data-action="upload"]': function () {
                this.upload();
            }
        },

        setup: function () {

        },

        selectFile: function (file) {
            var fileReader = new FileReader();
            fileReader.onload = function (e) {
                this.packageContents = e.target.result;
                this.$el.find('button[data-action="upload"]').removeClass('disabled');
            }.bind(this);
            fileReader.readAsDataURL(file);
        },

        showError: function (msg) {
            msg = this.translate(msg, 'errors', 'Admin');
            this.$el.find('.message-container').html(msg);
        },

        upload: function () {
            this.$el.find('button[data-action="upload"]').addClass('disabled');
            this.notify('Uploading...');
            $.ajax({
                url: 'Admin/action/uploadUpgradePackage',
                type: 'POST',
                contentType: 'application/zip',
                timeout: 0,
                data: this.packageContents,
                error: function (xhr, t, e) {
                    this.showError(xhr.getResponseHeader('X-Status-Reason'));
                    this.notify(false);
                }.bind(this)
            }).done(function (data) {
                if (!data.id) {
                    this.showError(this.translate('Error occured'));
                    return;
                }
                this.notify(false);
                this.createView('popup', 'Admin.Upgrade.Ready', {
                    upgradeData: data
                }, function (view) {
                    view.render();
                    this.$el.find('button[data-action="upload"]').removeClass('disabled');

                    view.once('run', function () {
                        view.close();
                        this.$el.find('.panel.upload').addClass('hidden');
                        this.run(data.id, data.version);
                    }, this);
                }.bind(this));
            }.bind(this)).error;
        },

        textNotification: function (text) {
            this.$el.find('.notify-text').html(text);
        },

        run: function (id, version) {
            var msg = this.translate('Upgrading...', 'labels', 'Admin');
            this.notify('Please wait...');
            this.textNotification(msg);

            $.ajax({
                url: 'Admin/action/runUpgrade',
                type: 'POST',
                data: JSON.stringify({
                    id: id
                }),
                timeout: 0,
                error: function (xhr) {
                    this.$el.find('.panel.upload').removeClass('hidden');
                    var msg = xhr.getResponseHeader('X-Status-Reason');
                    this.textNotification(this.translate('Error') + ': ' + msg);
                }.bind(this)
            }).done(function () {
                var cache = this.getCache();
                if (cache) {
                    cache.clear();
                }
                this.createView('popup', 'Admin.Upgrade.Done', {
                    version: version
                }, function (view) {
                    this.notify(false);
                    view.render();
                }.bind(this));
            }.bind(this));
        },

    });
});


