angular.module('mainCtrl', ['mainService'])
.controller('productListCtrl', function($scope, Product) {
    $scope.allData = [];
    $scope.products = [];
    getData();
    $scope.search = function() {
        limit = $scope.limit;
        searchLimit(limit);
    }

    function searchLimit(limit) {
        if (limit == '') {
            limit = 0;
        }
        $scope.datas = [];
        angular.forEach($scope.allData, function(data, status) {
            if (data.total > limit) {
                $scope.datas.push(data);
            }
        });
        $scope.products = $scope.datas;
    }

    function getData() {
        Product.getData(function(data, status) {
            if (data.data.success == true) {
                $scope.allData = data.data.data;
                $scope.products = data.data.data;
            }
        });
    }
});