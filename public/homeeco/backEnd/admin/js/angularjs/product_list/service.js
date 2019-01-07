angular.module('mainService', [])
.factory('Product', function($http) {
    var product = {
        getData: function(callback) {
            $http.get('/admin/products/limit').then(function(status, data) {
                callback(status, data);
            });
        }
    }
    return product;
});