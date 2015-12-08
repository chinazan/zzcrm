
Fox.define('views/email/record/compose', ['views/record/edit', 'views/email/record/detail'], function (Dep, Detail) {

    return Dep.extend({

        isWide: true,

        sideView: false,

        setup: function () {
        	Dep.prototype.setup.call(this);

        	if (this.hasSignature()) {
                var body = this.prependSignature(this.model.get('body') || '', this.model.get('isHtml'));
	        	this.model.set('body', body);
	        }

            this.listenTo(this.model, 'insert-template', function (data) {
                var body = this.appendSignature(data.body || '', data.isHtml);
                this.model.set('isHtml', data.isHtml);
                this.model.set('name', data.subject);
                this.model.set('body', '');
                this.model.set('body', body);
                this.model.set({
                    attachmentsIds: data.attachmentsIds,
                    attachmentsNames: data.attachmentsNames
                });
            }, this);
        },

        prependSignature: function (body, isHtml) {
            if (isHtml) {
                var signature = this.getSignature();
                if (body) {
                    signature += '<br>';
                }
                body = '<p><br></p><br>' + signature + body;
            } else {
                var signature = this.getPlainTextSignature();
                if (body) {
                    signature += '\n';
                }
                body = '\n\n' + signature + body;
            }
            return body;
        },

        appendSignature: function (body, isHtml) {
            if (isHtml) {
                var signature = this.getSignature();
                body = body + '<p><br></p>' + signature;
            } else {
                var signature = this.getPlainTextSignature();
                body = body + '\n\n' + signature;
            }
            return body;
        },

        hasSignature: function () {
            return !!this.getPreferences().get('signature');
        },

        getSignature: function () {
            return this.getPreferences().get('signature');
        },

        getPlainTextSignature: function () {
            var value = this.getSignature().replace(/<br\s*\/?>/mg, '\n');
            value = $('<div>').html(value).text();
            return value;
        },

        send: function () {
            Detail.prototype.send.call(this);
        },

        saveDraft: function () {
            var model = this.model;
            model.set('status', 'Draft');

            this.save();
        }

    });

});
