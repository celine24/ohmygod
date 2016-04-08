omgApp.controller("pvsCtrl", function($scope, $http, API_URL) {

    $http.get(API_URL + 'pvs')
        .success(function(response){
            $scope.pvs = response;
        });

});