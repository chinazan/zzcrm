
Fox.define('views/email-template/record/panels/information', 'views/record/panels/side', function (Dep) {

    return Dep.extend({

        _template: '{{{infoText}}}',

        data: function () {
            return {
                infoText: this.translate('infoText', 'messages', 'EmailTemplate').replace(/(\r\n|\n|\r)/gm, '<br>')
            };
        }

    });

});