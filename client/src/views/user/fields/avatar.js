Fox.define('Views.User.Fields.Avatar', 'Views.Fields.Image', function (Dep) {

    return Dep.extend({
    
        handleFileUpload: function (file, contents, callback) {
            
            this.createView('crop', 'Modals.ImageCrop', {
                contents: contents
            }, function (view) {
                view.render();

                var croped = false;

                this.listenToOnce(view, 'crop', function (croppedContents, params) {
                    croped = true;
                    setTimeout(function () {
                        params = params || {};
                        params.name = 'avatar.jpg';
                        params.type = 'image/jpeg';

                        callback(croppedContents, params);
                    }.bind(this), 10);
                });
                this.listenToOnce(view, 'remove', function () {
                    if (!croped) {
                        setTimeout(function () {
                            this.render();
                        }.bind(this), 10);
                    }
                    this.clearView('crop');
                }.bind(this));
            }.bind(this));
        },

        getValueForDisplay: function () {
            if (this.mode == 'detail' || this.mode == 'list') {
                var id = this.model.get(this.idName);
                var userId = this.model.id;

                var t = Date.now();

                var imgHtml;

                if (this.mode == 'detail') {
                    imgHtml = '<img src="?entryPoint=avatar&size=' + this.previewSize + '&id=' + userId + '&t=' + t + '&attachmentId=' + ( id || 'false') + '">';
                } else {
                    var cache = this.getCache();
                    if (cache) {
                        t = cache.get('app', 'timestamp');
                    }
                    imgHtml = '<img width="16" src="?entryPoint=avatar&size=' + this.previewSize + '&id=' + userId + '&t=' + t + '">';
                    return imgHtml;
                }

                if (id) {
                    return '<a data-action="showImagePreview" data-id="' + id + '" href="?entryPoint=image&id=' + id + '">' + imgHtml +' </a>';
                } else {
                    return imgHtml;
                }
            }
        },

    });
    
});
