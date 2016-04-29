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

    $scope.filter = function (value, filter, label, name) {
        if (value === null) {
            $scope[filter + 'Filter'] = value;
            $scope[filter + 'Active'] = value;
            angular.forEach($scope.activeFilters, function(index, key) {
                //Object.keys(objet) pour retrouver le nom des propriétés
                if (Object.keys(index)[0] === label) {
                    $scope.activeFilters.splice($scope.activeFilters.indexOf(index),1);
                }
            });
            $scope.activeFilters.push({[label]:name});
        }
        else if ($scope[filter + 'Filter'] === value) {
            $scope[filter + 'Filter'] = '';
            $scope[filter + 'Active'] = null;
            angular.forEach($scope.activeFilters, function(index, key) {
                //Object.keys(objet) pour retrouver le nom des propriétés
                if (Object.keys(index)[0] === label) {
                    $scope.activeFilters.splice($scope.activeFilters.indexOf(index),1);
                }
            });
        }
        else {
            angular.forEach($scope.activeFilters, function(index, key) {
                //Object.keys(objet) pour retrouver le nom des propriétés
                if (Object.keys(index)[0] === label) {
                    $scope.activeFilters.splice($scope.activeFilters.indexOf(index), 1);
                }

            });
            $scope.activeFilters.push({[label]:name});
            $scope[filter + 'Filter'] = value;
            $scope[filter + 'Active'] = value;
        }
    };

});