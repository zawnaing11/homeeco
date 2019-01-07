angular.module('mainService', [])
.factory('Product', function($http) {
    var product = {
        getData: function(param, callback) {
            $http.get('/admin/product/'+param).then(function(status, data) {
                callback(status, data);
            });
        },
        saveData: function(param) {
            return $http({
                method : 'POST',
                url : '/admin/product/save',
                headers : {'Content-type':'application/x-www-form-urlencoded'},
                data : $.param(param)
            });
        },
    }
    return product;
})