angular.module('app', ['mainCtrl', 'mainService']).config(function($interpolateProvider, $compileProvider) {
    $interpolateProvider.startSymbol('{%').endSymbol('%}');
});