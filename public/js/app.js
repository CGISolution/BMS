var app = angular.module('bms', ['ngRoute', 'ui.bootstrap', 'bmsController']);

app.config(['$routeProvider', '$locationProvider', '$provide', '$logProvider', function ($routeProvider, $locationProvider, $provide, $logProvider){
    $logProvider.debugEnabled(true);

    $locationProvider
        .html5Mode(true)
        .hashPrevix = '!';

    $provide.decorator('$sniffer', function($delegate){
        $delegate.history = false;
        return $delegate;
    });


    $routeProvider.when('/', {
        templateUrl: '/app/views/login/_layout.phtml',
        controller:'login'
    }).when('/setup', {
        templateUrl: '/app/views/setup/_layout.html',
        controller:'setup'
    }).otherwise({ redirectTo: '/' });

}]);
