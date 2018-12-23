angular.module('mainCtrl', ['mainService'])
.controller('numberCtrl', function($scope, Product, $window) {
    $scope.masters = $window.masters;
    $scope.Data = {};
    $scope.userData = [];
    $scope.numbers = {};
    $scope.saveData = {};
    $scope.selectUser = null;
    $scope.errorList = {};

    // if ($scope.userData.length == 0 || $scope.userData == null) {
    //     $scope.errorList.noData = 'You have no data !'
    // }
    // get data from db
    function getData(param) {
        Product.getData(param, function(data, status) {
            if (data.data.success == true) {
                $scope.userData = data.data.data;
            }
            if ($scope.userData.length > 0) {
                $scope.errorList.noData = '';
            } else {
                $scope.errorList.noData = 'You have no data !'
            }
        });
    }

    // change user 
    $scope.userSelectChange = function() {
        var complex = $scope.user.split(',');
        $scope.selectUser = complex[0];
        $scope.selectUserName = complex[1];
        getData($scope.selectUser);
    }

    // Save Product item in DB
    $scope.sendData = function() {
        if ($scope.product != undefined && $scope.selectUser != null) {
            $scope.errorList.product = '';
            var product = $scope.product.split(' ').join('');
            if (product.length > 0) {
                var rev = product.slice(3, 4);
                var rev = rev.toLowerCase();
                var num = product.slice(0, 3);
                var length = product.length;
                var numCom = [];
                switch(rev) {
                    case'r':
                        var value = product.slice(4,length);
                        var numArr = Array.from(num);
                        var temp = [];
                        temp[0] = numArr[0]+numArr[1]+numArr[2];
                        temp[1] = numArr[0]+numArr[2]+numArr[1];
                        temp[2] = numArr[1]+numArr[0]+numArr[2];
                        temp[3] = numArr[1]+numArr[2]+numArr[0];
                        temp[4] = numArr[2]+numArr[0]+numArr[1];
                        temp[5] = numArr[2]+numArr[1]+numArr[0];
                        for(key in temp) {
                            if (!numCom.includes(temp[key])) {
                                numCom.push(temp[key]);
                            }
                        }
                        $scope.Data.user_id = $scope.selectUser;
                        $scope.Data.number = numCom;
                        $scope.Data.price = value;
                        break;
                    default:
                        numCom[0] = num;
                        var value = product.slice(3,length);
                        $scope.Data.user_id = $scope.selectUser;
                        $scope.Data.number = numCom;
                        $scope.Data.price = value;
                }
                Product.saveData($scope.Data).then(function(data) {
                    if (data.data.success == true) {
                        getData($scope.selectUser);
                        $scope.product = '';
                    }
                });
            }
        } else {
            $scope.errorList.product = 'Input is Enpty';
        }
        // for view
        angular.forEach($scope.Data.number, function(value, key) {
            if (!$scope.numbers.hasOwnProperty(value)) {
                $scope.numbers[value] = $scope.Data.price;
            } else {
                $scope.numbers[value] = $scope.numbers[value]+', '+$scope.Data.price;
            }
        });
    }
})