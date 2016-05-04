omgApp.controller("pvCtrl", function($scope, Pv, $routeParams) {

    var pvId = $routeParams.id;

    Pv.fetchOne(pvId).success(function(pv){
        $scope.pv = pv[0];
    });

    $scope.relVisible = false;
    $scope.show = function () {
        $scope.relVisible = true;
    };


    this.tab = 'greek-identity';
    this.host = 'host-identity';

    this.selectTab = function(setTab) {
        this.tab = setTab;
        this.host = setTab;
    };

    this.isSelected = function(checkTab) {
        if (checkTab === 'host-identity' || checkTab === 'host-story' || checkTab === 'cohabitation') {
            return this.host === checkTab;
        }
        else {
            return this.tab === checkTab;
        }
    }
});