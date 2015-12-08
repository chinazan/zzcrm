
Fox.define('views/email/record/detail', 'views/record/detail', function (Dep) {

    return Dep.extend({

        sideView: 'Email.Record.DetailSide',

        layoutNameConfigure: function () {
            if (!this.model.isNew()) {
                var isRestricted = false;

                if (this.model.get('status') == 'Sent') {
                    isRestricted = true;
                }

                if (this.model.get('status') == 'Archived') {
                    if (this.model.get('createdById') == 'system' || !this.model.get('createdById')) {
                        isRestricted = true;
                    }
                }
                if (isRestricted) {
                    this.layoutName += 'Restricted';
                }
                this.isRestricted = isRestricted;
            }
        },

        init: function () {
            Dep.prototype.init.call(this);

            this.layoutNameConfigure();
        },

        setup: function () {
            Dep.prototype.setup.call(this);

            this.listenTo(this.model, 'sync', function () {
                if (!this.model.get('isRead')) {
                    this.model.set({
                        isRead: true
                    }, {silent: true});
                }
            }, this);

            if (this.model.get('isHtml') && this.model.get('bodyPlain')) {
                this.dropdownItemList.push({
                    'label': 'Show Plain Text',
                    'name': 'showBodyPlain'
                });
            }

            this.dropdownItemList.push({
                'label': 'Mark as Important',
                'name': 'markAsImportant',
                'hidden': this.model.get('isImportant')
            });
            this.dropdownItemList.push({
                'label': 'Mark as Not Important',
                'name': 'markAsNotImportant',
                'hidden': !this.model.get('isImportant')
            });

            this.listenTo(this.model, 'change:isImportant', function () {
                if (this.model.get('isImportant')) {
                    this.hideActionItem('markAsImportant');
                    this.showActionItem('markAsNotImportant');
                } else {
                    this.hideActionItem('markAsNotImportant');
                    this.showActionItem('markAsImportant');
                }
            }, this);
        },

        actionMarkAsImportant: function () {
            $.ajax({
                url: 'Email/action/markAsImportant',
                type: 'POST',
                data: JSON.stringify({
                    id: this.model.id
                })
            });
            this.model.set('isImportant', true);
        },

        actionMarkAsNotImportant: function () {
            $.ajax({
                url: 'Email/action/markAsNotImportant',
                type: 'POST',
                data: JSON.stringify({
                    id: this.model.id
                })
            });
            this.model.set('isImportant', false);
        },

        actionShowBodyPlain: function () {
            this.createView('bodyPlain', 'Email.Modals.BodyPlain', {
                model: this.model
            }, function (view) {
                view.render();
            }.bind(this));
        },

        handleAttachmentField: function () {
            if ((this.model.get('attachmentsIds') || []).length == 0) {
                this.hideField('attachments');
            } else {
                this.showField('attachments');
            }
        },

        handleCcField: function () {
            if (!this.model.get('cc')) {
                this.hideField('cc');
            } else {
                this.showField('cc');
            }
        },

        handleBccField: function () {
            if (!this.model.get('bcc')) {
                this.hideField('bcc');
            } else {
                this.showField('bcc');
            }
        },

        handleRepliesField: function () {
            if ((this.model.get('repliesIds') || []).length == 0) {
                this.hideField('replies');
            } else {
                this.showField('replies');
            }
            if (!this.model.get('repliedId')) {
                this.hideField('replied');
            } else {
                this.showField('replied');
            }
        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);

            if (this.isRestricted) {
                this.handleAttachmentField();
                this.listenTo(this.model, 'change:attachmentsIds', function () {
                    this.handleAttachmentField();
                }, this);

                this.handleCcField();
                this.listenTo(this.model, 'change:cc', function () {
                    this.handleCcField();
                }, this);
                this.handleBccField();
                this.listenTo(this.model, 'change:bcc', function () {
                    this.handleBccField();
                }, this);

                this.handleRepliesField();
                this.listenTo(this.model, 'change:repliesIds', function () {
                    this.handleRepliesField();
                }, this);
            }
        },

        send: function () {
            var model = this.model;
            model.set('status', 'Sending');

            var afterSend = function () {
                Fox.Ui.success(this.translate('emailSent', 'messages', 'Email'));
                this.trigger('after:send');
            };

            this.once('after:save', afterSend, this);
            this.once('cancel:save', function () {
                this.off('after:save', afterSend);
            }, this);

            this.once('before:save', function () {
                Fox.Ui.notify(this.translate('Sending...', 'labels', 'Email'));
            }, this);

            this.save();
        },

    });
});

