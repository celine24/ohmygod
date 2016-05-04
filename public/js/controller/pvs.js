omgApp.controller("pvsCtrl", function($scope, API_URI, Pv, Group) {

    Pv.fetch().success(function(resp){
        $scope.pvs = resp;
    });

    Group.fetch().success(function(resp){
        $scope.groups = resp;
    });

    $scope.activeFilters = [];

    $scope.filter = function (value, filter, label, name) {
        if ($scope[filter + 'Filter'] === value) {
            $scope[filter + 'Filter'] = '';
            $scope[filter + 'Active'] = null;
            parseActiveFilters();
        }
        else {
            $scope[filter + 'Filter'] = value;
            $scope[filter + 'Active'] = value;
            parseActiveFilters();
            $scope.activeFilters.push({[label]:name});
        }

        function parseActiveFilters() {
            angular.forEach($scope.activeFilters, function(index, key) {
                //Object.keys(objet) pour retrouver le nom des propriétés
                if (Object.keys(index)[0] === label) {
                    $scope.activeFilters.splice($scope.activeFilters.indexOf(index),1);
                }
            });
        }
    };

    $scope.resetFilters = function() {
        $scope.activeFilters = [];
        $scope.groupActive = null;
        $scope.genderActive = null;
        $scope.statusActive = null;
        $scope.alreadyPlayedActive = null;
        $scope.groupFilter = '';
        $scope.genderFilter = '';
        $scope.statusFilter = '';
        $scope.alreadyPlayedFilter = '';
    }

});