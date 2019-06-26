angular.module('mainCtrl', ['mainService'])
.controller('productListCtrl', function($scope, Product) {
    $scope.allData = [];
    $scope.products = [];
    $scope.showResult = false;
    getData();
    $scope.search = function() {
        limit = $scope.limit;
        searchLimit(limit);
    }
    function searchLimit(limit) {
        $scope.showResult = true;
        if (limit == '') {
            limit = 0;
        }
        $scope.datas = [];
        angular.forEach($scope.allData, function(data, status) {
            if (data.total > limit) { 
                data.total_price = data.total;
                data.result = data.total - limit;
                $scope.datas.push(data);
            }
        });
        $scope.products = $scope.datas;
    }
    function getData() {
        Product.getData(function(data, status) {
            if (data.data.success == true) {
                $scope.allData = data.data.data;
                var data = data.data.data;
                angular.forEach(data, function(data, status) {
                    data.total_price = data.total;
                });
                $scope.products = data;
            }
        });
    }
});