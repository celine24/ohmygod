omgApp.controller("pvsCtrl", function($scope, API_URL, Pv, Group) {

    Pv.fetch().success(function(resp){
        $scope.pvs = resp;
    });

    Group.fetch().success(function(resp){
        $scope.groups = resp;
    });

    $scope.groupFilter = 'all';
    $scope.activeGroup = null;

    $scope.filter = function (group) {
        if ($scope.groupFilter === 'all') {
            $scope.groupFilter = group.class;
            $scope.activeGroup = group.id - 1;
        }
        else if ($scope.groupFilter === group.class) {
            $scope.groupFilter = 'all';
            $scope.activeGroup = null;
        }
        else {
            $scope.groupFilter = group.class;
            $scope.activeGroup = group.id - 1;
        }
    };



});