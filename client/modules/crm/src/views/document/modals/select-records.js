
Fox.define('Crm:Views.Document.Modals.SelectRecords', 'Views.Modals.SelectRecords', function (Dep) {

    return Dep.extend({

        template: 'crm:document.modals.select-records',

        loadFolders: function () {
            this.getCollectionFactory().create('DocumentFolder', function (collection) {
                collection.url = collection.name + '/action/listTree';

                this.listenToOnce(collection, 'sync', function () {
                    this.createView('folders', 'Record.ListTree', {
                        collection: collection,
                        el: this.options.el + ' .folders-container',
                        selectable: true,
                        createDisabled: true,
                        showRoot: true,
                        rootName: this.translate('Document', 'scopeNamesPlural'),
                        buttonsDisabled: true,
                        checkboxes: false
                    }, function (view) {
                        view.render();

                        this.listenTo(view, 'select', function (model) {
                            this.currentFolderId = null;
                            this.currentFolderName = '';

                            if (model && model.id) {
                                this.currentFolderId = model.id;
                                this.currentFolderName = model.get('name');
                            }
                            this.collection.whereAdditional = null;

                            if (this.currentFolderId) {
                                this.collection.whereAdditional = [
                                    {
                                        field: 'folder',
                                        type: 'inCategory',
                                        value: model.id
                                    }
                                ];
                            }
                            this.notify('Please wait...');
                            this.listenToOnce(this.collection, 'sync', function () {
                                this.notify(false);
                            }, this);
                            this.collection.fetch();

                        }, this);
                    }.bind(this));
                }, this);
                collection.fetch();
            }, this);
        },

        loadList: function () {
            this.loadFolders();
            Dep.prototype.loadList.call(this);

        },
    });

});
