
Fox.Exceptions = Fox.Exceptions || {};

Fox.Exceptions.AccessDenied = function (message) {
    this.message = message;
    Error.apply(this, arguments);
}
Fox.Exceptions.AccessDenied.prototype = new Error();
Fox.Exceptions.AccessDenied.prototype.name = 'AccessDenied';

Fox.Exceptions.NotFound = function (message) {
    this.message = message;
    Error.apply(this, arguments);
}
Fox.Exceptions.NotFound.prototype = new Error();
Fox.Exceptions.NotFound.prototype.name = 'NotFound';


