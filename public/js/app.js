var omgApp = angular.module('omgApp', ['ngRoute']);


omgApp.config(function($routeProvider, $locationProvider) {
    $routeProvider
        .when('/',{
            templateUrl: 'templates/home.blade.php'
            //controller: 'js/controller/HomeCtrl'
        })
        .when('/pvs', {
            templateUrl: 'templates/pvs.blade.php'
            //controller: 'PvsCtrl'
        })
        .when('/pvs/:id', {
            templateUrl: 'templates/pv-introduction.blade.php'
            //controller : 'PvCtrl'
        })
        .otherwise({
            redirectTo: '/'
        });

    //$locationProvider.html5Mode(true).hashPrefix('!');
});

