var omgApp = angular.module('omgApp', ['ngRoute', 'ngResource'])
    .constant('API_URI', 'http://localhost:8000/api/');


omgApp.config(function($routeProvider, $locationProvider, $interpolateProvider) {
    $routeProvider
        .when('/',{
            templateUrl: 'templates/home.blade.php'
            //controller: 'js/controller/HomeCtrl'
        })
        .when('/pvs', {
            templateUrl: 'templates/pvs.blade.php',
            controller: 'pvsCtrl'
        })
        .when('/pvs/:id', {
            templateUrl: 'templates/pv-introduction.blade.php',
            controller : 'pvCtrl'
        })
        //.otherwise({
        //    redirectTo: '/'
        //});

    $interpolateProvider.startSymbol('{[');
    $interpolateProvider.endSymbol(']}');

    //$locationProvider.html5Mode(true).hashPrefix('!');
});

