/**
 * Created by PeopleAre on 31/03/2016.
 */
omgApp.controller("tabCtrl", function($scope) {

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