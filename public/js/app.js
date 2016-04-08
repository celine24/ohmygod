var omgApp = angular.module('omgApp', [require('angular-route')]);

omgApp.config(function($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'welcome.blade.php',
            controller : 'homeController'
        })
        .when('/pv', {
            templateUrl: 'pv-introduction.html,
            controller : 'moviesController'
        })
        .when('/movies/:id', {
            templateUrl: 'partials/movies.html',
            controller : 'moviesController'
        })
        .when('/movies/edit/:id', {
            templateUrl: 'partials/edit.html',
            controller : 'editController'
        })
        .otherwise({
            redirectTo: '/'
        });
});


var pvs = angular.module("pvs", []);