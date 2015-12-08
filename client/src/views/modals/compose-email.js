
Fox.define('Views.Modals.ComposeEmail', 'Views.Modals.Edit', function (Dep) {

    return Dep.extend({

        scope: 'Email',

        layoutName: 'composeSmall',

        saveDisabled: true,

        fullFormDisabled: true,

        editViewName: 'Email.Record.Compose',

        columnCount: 4,

        setup: function () {
            Dep.prototype.setup.call(this);

            this.buttonList.unshift({
                name: 'saveDraft',
                text: this.translate('Save Draft'),
            });

            this.buttonList.unshift({
                name: 'send',
                text: this.getLanguage().translate('Send'),
                style: 'primary'
            });

            this.header = this.getLanguage().translate('Compose Email');
        },

        actionSend: function () {
            var dialog = this.dialog;

            var editView = this.getView('edit');

            var model = editView.model;

            var afterSend = function () {
                this.trigger('after:save', model);
                dialog.close();
            };

            editView.once('after:send', afterSend, this);

            var $send = dialog.$el.find('button[data-name="send"]');
            $send.addClass('disabled');
            var $saveDraft = dialog.$el.find('button[data-name="saveDraft"]');
            $saveDraft.addClass('disabled');
            editView.once('cancel:save', function () {
                $send.removeClass('disabled');
                $saveDraft.removeClass('disabled');
                editView.off('after:save', afterSend);
            }, this);

            editView.send();
        },

        actionSaveDraft: function () {
            var dialog = this.dialog;

            var editView = this.getView('edit');

            var model = editView.model;

            var $send = dialog.$el.find('button[data-name="send"]');
            $send.addClass('disabled');
            var $saveDraft = dialog.$el.find('button[data-name="saveDraft"]');
            $saveDraft.addClass('disabled');

            var afterSave = function () {
                $saveDraft.removeClass('disabled');
                $send.removeClass('disabled');
                Fox.Ui.success(this.translate('savedAsDraft', 'messages', 'Email'));
            }.bind(this);

            editView.once('after:save', afterSave , this);

            editView.once('cancel:save', function () {
                $send.removeClass('disabled');
                $saveDraft.removeClass('disabled');
                editView.off('after:save', afterSave);
            }, this);

            editView.saveDraft();
        }

    });
});

