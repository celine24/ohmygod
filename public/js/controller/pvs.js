omgApp.controller("pvsCtrl", function($scope, API_URL, Pv, Group) {

    Pv.fetch().success(function(resp){
        $scope.pvs = resp;
    });

    Group.fetch().success(function(resp){
        $scope.groups = resp;
    });

    $scope.groupFilter = '';
    $scope.activeGroup = null;

    $scope.activeFilters = [];

    $scope.groupF = function (group) {
        if ($scope.groupFilter === '') {
            $scope.groupFilter = group.id;
            $scope.activeGroup = group.id;
        }
        else if ($scope.groupFilter === group.id) {
            $scope.groupFilter = '';
            $scope.activeGroup = null;
        }
        else {
            $scope.groupFilter = group.id;
            $scope.activeGroup = group.id;
        }
    };

    $scope.filter = function (value, filter, name) {
        if (value === null) {
            $scope.activeFilters.push(name);
            $scope[filter + 'Filter'] = value;
            $scope[filter + 'Active'] = value;

        }
        else if ($scope[filter + 'Filter'] === value) {
            $scope[filter + 'Filter'] = '';
            $scope[filter + 'Active'] = null;
            $scope.activeFilters.splice($scope.activeFilters.indexOf(name),1);
        }
        else {
            $scope.activeFilters.push(name);
            $scope[filter + 'Filter'] = value;
            $scope[filter + 'Active'] = value;
        }

        console.log($scope.activeFilters);
    };

    ////////// FINIR FILTRES : SUPPRIMER DANS LE TABLEAU

});