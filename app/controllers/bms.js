var bmsController = angular.module('bmsController', []);

bmsController.controller('index', ['$scope', '$log', function($scope, $log){

    $log.warn("test");
}]);
