
 Fox.define('field-manager', [], function () {

    var FieldManager = function (defs, metadata) {
        this.defs = defs || {};
        this.metadata = metadata;
    };

    _.extend(FieldManager.prototype, {

        defs: null,

        metadata: null,

        getParams: function (fieldType) {
            if (fieldType in this.defs) {
                return this.defs[fieldType].params || [];
            }
            return [];
        },

        checkFilter: function (fieldType) {
            if (fieldType in this.defs) {
                if ('filter' in this.defs[fieldType]) {
                    return this.defs[fieldType].filter;
                } else {
                    return false;
                }
            }
            return false;
        },

        isMergable: function (fieldType) {
            if (fieldType in this.defs) {
                if ('mergable' in this.defs[fieldType]) {
                    return this.defs[fieldType].mergable;
                } else {
                    return true;
                }
            }
            return false;
        },

        getEntityAttributes: function (entityName) {
            var list = [];

            var defs = this.metadata.get('entityDefs.' + entityName + '.fields') || {};
            Object.keys(defs).forEach(function (field) {
                this.getAttributes(defs[field]['type'], field).forEach(function (attr) {
                    if (!~list.indexOf(attr)) {
                        list.push(attr);
                    }
                });
            }, this);
            return list;
        },

        getActualAttributes: function (fieldType, fieldName) {
            var fieldNames = [];
            if (fieldType in this.defs) {
                if ('actualFields' in this.defs[fieldType]) {
                    var actualfFields = this.defs[fieldType].actualFields;

                    var naming = 'suffix';
                    if ('naming' in this.defs[fieldType]) {
                        naming = this.defs[fieldType].naming;
                    }
                    if (naming == 'prefix') {
                        actualfFields.forEach(function (f) {
                            fieldNames.push(f + Fox.Utils.upperCaseFirst(fieldName));
                        });
                    } else {
                        actualfFields.forEach(function (f) {
                            fieldNames.push(fieldName + Fox.Utils.upperCaseFirst(f));
                        });
                    }
                } else {
                    fieldNames.push(fieldName);
                }
            }
            return fieldNames;
        },

        getNotActualAttributes: function (fieldType, fieldName) {
            var fieldNames = [];
            if (fieldType in this.defs) {
                if ('notActualFields' in this.defs[fieldType]) {
                    var notActualFields = this.defs[fieldType].notActualFields;

                    var naming = 'suffix';
                    if ('naming' in this.defs[fieldType]) {
                        naming = this.defs[fieldType].naming;
                    }
                    if (naming == 'prefix') {
                        notActualFields.forEach(function (f) {
                            fieldNames.push(f + Fox.Utils.upperCaseFirst(fieldName));
                        });
                    } else {
                        notActualFields.forEach(function (f) {
                            fieldNames.push(fieldName + Fox.Utils.upperCaseFirst(f));
                        });
                    }
                }
            }
            return fieldNames;
        },

        getAttributes: function (fieldType, fieldName) {
            return _.union(this.getActualAttributes(fieldType, fieldName), this.getNotActualAttributes(fieldType, fieldName));
        },

        getViewName: function (fieldType) {
            if (fieldType in this.defs) {
                if ('view' in this.defs[fieldType]) {
                    return this.defs[fieldType].view;
                }
            }
            return 'Fields.' + Fox.Utils.upperCaseFirst(fieldType);
        },
    });

    return FieldManager;

});


