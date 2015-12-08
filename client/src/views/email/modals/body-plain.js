
Fox.define('views/email/modals/body-plain', 'views/modal', function (Dep) {

    return Dep.extend({

        _template: '<div class="field-bodyPlain">{{{bodyPlain}}}</div>',

        setup: function () {
            Dep.prototype.setup.call(this);
            this.buttonList.push({
                'name': 'cancel',
                'label': 'Close'
            });

            this.header = this.model.get('name');

            this.createView('bodyPlain', 'Fields.Text', {
                el: this.options.el + ' .field-bodyPlain',
                model: this.model,
                defs: {
                    name: 'bodyPlain',
                    params: {
                        readOnly: true,
                        inlineEditDisabled: true
                    }
                }
            });
        }

    });
});

