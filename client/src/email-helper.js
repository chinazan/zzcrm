
Fox.define('email-helper', [], function () {

    var EmailHelper = function (language, user) {
        this.language = language;
        this.user = user;
    }

    _.extend(EmailHelper.prototype, {

        getLanguage: function () {
            return this.language;
        },

        getUser: function () {
            return this.user;
        },

        getReplyAttributes: function (model, data, cc) {
            var attributes = {
                status: 'Draft',
                isHtml: model.get('isHtml')
            };

            var subject = model.get('name') || '';
            if (subject.toUpperCase().indexOf('RE:') !== 0) {
                attributes['name'] = 'Re: ' + subject;
            } else {
                attributes['name'] = subject;
            }

            var to = '';

            var nameHash = model.get('nameHash') || {};

            var isReplyOnSent = false;

            if (model.get('replyToString')) {
                var str = model.get('replyToString');

                var a = [];
                str.split(';').forEach(function (item) {
                    var part = item.trim();
                    var address = this.parseAddressFromStringAddress(item);

                    if (address) {
                        a.push(address);
                        var name = this.parseNameFromStringAddress(part);
                        if (name && name !== address) {
                            nameHash[address] = name;
                        }

                    }
                }, this);
                to = a.join('; ');
            }
            if (!to || !~to.indexOf('@')) {
                if (model.get('from')) {
                    if (model.get('from') != this.getUser().get('emailAddress')) {
                        to = model.get('from');
                        if (!nameHash[to]) {
                            var fromString = model.get('fromString') || model.get('fromName');
                            if (fromString) {
                                var name = this.parseNameFromStringAddress(fromString);
                                if (name != to) {
                                    nameHash[to] = name;
                                }
                            }
                        }
                    } else {
                        isReplyOnSent = true;
                    }
                }
            }

            attributes.to = to;

            if (cc) {
                attributes.cc = model.get('cc') || '';
                (model.get('to') || '').split(';').forEach(function (item) {
                    item = item.trim();
                    if (item != this.getUser().get('emailAddress')) {
                        if (isReplyOnSent) {
                            attributes.to += '; ' + item;
                        } else {
                            attributes.cc += '; ' + item;
                        }
                    }
                }, this);
                attributes.cc = attributes.cc.replace(/^(\; )/,"");
            }

            if (model.get('parentId')) {
                attributes['parentId'] = model.get('parentId');
                attributes['parentName'] = model.get('parentName');
                attributes['parentType'] = model.get('parentType');
            }

            attributes.nameHash = nameHash;

            attributes.repliedId = model.id;

            this.addReplyBodyAttrbutes(model, attributes);

            return attributes;
        },

        parseNameFromStringAddress: function (value) {
            if (~value.indexOf('<')) {
                var name = value.replace(/<(.*)>/, '').trim();
                if (name.charAt(0) === '"' && name.charAt(name.length - 1) === '"') {
                    name = name.substr(1, name.length - 2);
                }
                return name;
            }
            return null;
        },

        parseAddressFromStringAddress: function (value) {
            var r = value.match(/<(.*)>/);
            var address = null;
            if (r && r.length > 1) {
                address = r[1];
            } else {
                address = value.trim();
            }
            return address;
        },

        addReplyBodyAttrbutes: function (model, attributes) {
            if (model.get('isHtml')) {
                var body = model.get('body');
                body = '<br><blockquote>' + '------' + this.getLanguage().translate('Original message', 'labels', 'Email') + '------<br>' + body + '</blockquote>';

                attributes['body'] = body;
            } else {
                var bodyPlain = model.get('body') || model.get('bodyPlain') || '';

                var b = '\n\n';
                b += '------' + this.getLanguage().translate('Original message', 'labels', 'Email') + '------' + '\n';

                bodyPlain.split('\n').forEach(function (line) {
                    b += '> ' + line + '\n';
                });
                bodyPlain = b;

                attributes['body'] = bodyPlain;
                attributes['bodyPlain'] = bodyPlain;
            }
        },

    });

    return EmailHelper;

});
