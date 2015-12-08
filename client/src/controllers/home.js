Fox.define('controllers/home', 'controller', function (Dep) {

    return Dep.extend({

        index: function () {
            this.main('Home', null);
        },

        search: function (text) {
            $.ajax({
                url: 'search',
                type: 'GET',
                data: {
                    text: text
                },
            });
        },
    });
});

