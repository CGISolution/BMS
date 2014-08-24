var bmsController = angular.module('bmsController', []);

bmsController.controller('index', ['$scope', '$log', function($scope, $log){

}]);


bmsController.controller('login', ['$scope', '$log', function($scope, $log){

    $scope.checkLoginForm = function ()
    {
        if (this.login.email.$dirty)
        {
           // $log.warn($scope.email);
        }
    };

    $scope.submitLogin = function (loginValid)
    {
        if (loginValid)
        {

        }
    };
}]);

bmsController.controller('setup', ['$scope', '$log', function($scope, $log){

}]);


