angular.module('mainApp', ['mainCtrl', 'mainService']).config(function($interpolateProvider, $compileProvider) {
    $interpolateProvider.startSymbol('{%').endSymbol('%}');
});