
Fox.define('views/admin/extensions/index', 'view', function (Dep) {

    return Dep.extend({

        template: 'admin/extensions/index',

        packageContents: null,

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
            },
            'click [data-action="install"]': function (e) {
                var id = $(e.currentTarget).data('id');

                var name = this.collection.get(id).get('name');
                var version = this.collection.get(id).get('version');

                this.run(id, name, version);

            },
            'click [data-action="uninstall"]': function (e) {
                var id = $(e.currentTarget).data('id');

                var name = this.collection.get(id).get('name');

                var self = this;
                if (confirm(this.translate('uninstallConfirmation', 'messages', 'Admin'))) {
                    Fox.Ui.notify(this.translate('Uninstalling...', 'labels', 'Admin'));

                    $.ajax({
                        url: 'Extension/action/uninstall',
                        type: 'POST',
                        data: JSON.stringify({
                            id: id
                        }),
                        timeout: 0,
                        error: function (xhr) {
                            var msg = xhr.getResponseHeader('X-Status-Reason');
                            this.showErrorNotification(this.translate('Error') + ': ' + msg);
                        }.bind(this)
                    }).done(function () {
                        window.location.reload();

                    }.bind(this));
                }
            }
        },

        setup: function () {
            this.getCollectionFactory().create('Extension', function (collection) {
                this.collection = collection;

                collection.maxSize = this.getConfig().get('recordsPerPage');

                this.wait(true);
                this.listenToOnce(collection, 'sync', function () {
                    this.createView('list', 'Extension.Record.List', {
                        collection: collection,
                        el: this.options.el + ' > .list-container',
                    });
                    if (collection.length == 0) {
                        this.once('after:render', function () {
                            this.$el.find('.list-container').addClass('hidden');
                        }.bind(this));
                    }
                    this.wait(false);
                });

                collection.fetch();

            }, this);
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

        showErrorNotification: function (msg) {
            if (!msg) {
                this.$el.find('.notify-text').addClass('hidden');
            } else {
                msg = this.translate(msg, 'errors', 'Admin');
                this.$el.find('.notify-text').html(msg);
                this.$el.find('.notify-text').removeClass('hidden');
            }
        },

        upload: function () {
            this.$el.find('button[data-action="upload"]').addClass('disabled');
            this.notify('Uploading...');
            $.ajax({
                url: 'Extension/action/upload',
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
                this.createView('popup', 'Admin.Extensions.Ready', {
                    upgradeData: data
                }, function (view) {
                    view.render();
                    this.$el.find('button[data-action="upload"]').removeClass('disabled');

                    view.once('run', function () {
                        view.close();
                        this.$el.find('.panel.upload').addClass('hidden');
                        this.run(data.id, data.version, data.name);
                    }, this);
                }.bind(this));
            }.bind(this)).error;
        },

        run: function (id, version, name) {
            var msg = this.translate('Installing...', 'labels', 'Admin');
            this.notify('Please wait...');

            this.showError(false);
            this.showErrorNotification(false);

            $.ajax({
                url: 'Extension/action/install',
                type: 'POST',
                data: JSON.stringify({
                    id: id
                }),
                timeout: 0,
                async: false,
                error: function (xhr) {
                    this.$el.find('.panel.upload').removeClass('hidden');
                    var msg = xhr.getResponseHeader('X-Status-Reason');
                    this.showErrorNotification(this.translate('Error') + ': ' + msg);
                }.bind(this)
            }).done(function () {
                var cache = this.getCache();
                if (cache) {
                    cache.clear();
                }
                this.createView('popup', 'Admin.Extensions.Done', {
                    version: version,
                    name: name
                }, function (view) {
                    this.collection.fetch();
                    this.$el.find('.list-container').removeClass('hidden');
                    this.$el.find('.panel.upload').removeClass('hidden');
                    this.notify(false);
                    view.render();
                }.bind(this));
            }.bind(this));
        },

    });

});

