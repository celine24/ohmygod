<div class="omg-pvs-container" ng-controller="groupsCtrl">
    <div class="omg-pvs-groups">
        <ul>
            <li ng-repeat="group in groups">
                <div class="omg-pvs-group {[ group.class ]}Bg" ng-click="groupF(group)" ng-class="{'active':group.id == activeGroup}">
                    {[ group.name ]}
                </div>
            </li>
        </ul>
    </div>

    <div class="omg-pvs-filterBar">
        <div class="statusFilter">
            <span ng-click="filter('free', 'status', 'libre')" ng-class="{'activeFilter' : 'free' == statusActive}">libre</span>
            <span ng-click="filter('taken', 'status', 'pris')" ng-class="{'activeFilter' : 'taken' == statusActive}">pris</span>
            <span ng-click="filter('reserved', 'status', 'réservé')" ng-class="{'activeFilter' : 'reserved' == statusActive}">réservé</span>
        </div>
        <div class="alreadyPlayedFilter">
            <span ng-click="filter(1, 'alreadyPlayed', 'déjà joué')" ng-class="{'activeFilter' : 1 == alreadyPlayedActive}">déjà joué</span>
            <span ng-click="filter(0, 'alreadyPlayed', 'jamais joué')" ng-class="{'activeFilter' : 0 == alreadyPlayedActive}">jamais joué</span>
        </div>
        <div class="genderFilter">
            <i class="fa fa-female" aria-hidden="true" ng-click="filter(1, 'gender', {gender : 'femme'})" ng-class="{'activeFilter' : 1 == genderActive}"></i>
            <i class="fa fa-male" aria-hidden="true" ng-click="filter(0, 'gender', {gender : 'homme'})" ng-class="{'activeFilter' : 0 == genderActive}"></i>
        </div>
        <div class="searchBar">
            <input type="text" ng-model="search" id="search" />
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
        </div>
    </div>
    <div class="omg-pvs-activeFilters">
        <ul>
            <li ng-repeat="activeFilter in activeFilters">{[ activeFilter.gender ]}</li>
        </ul>
    </div>
    <div class="omg-pvs-list">
        <ul>
            <li ng-repeat="pv in pvs | filter: {group : {id : groupFilter}} | filter:search | filter:{gender : genderFilter} | filter:{status : statusFilter} | filter:{already_played : alreadyPlayedFilter} ">
                <div class="omg-pvs-pv {[ pv.group.class ]}Border">
                    <div class="omg-pv-img">
                        <img src="img/pvs/ban-thumb/{[ pv.greek.name ]}.png" title="" />
                    </div>
                    <div class="omg-pv-name-container {[ pv.group.class ]}Bg">
                        <div class="omg-pv-name">
                            {[ pv.greek.name ]}
                        </div>
                        <div class="omg-pv-surname">
                            {[ pv.host.firstname + ' ' + pv.host.lastname ]}
                        </div>
                    </div>
                    <div class="omg-pv-content">
                        <div class="omg-pv-titles">
                            {[ pv.greek.titles ]}
                        </div>
                        <div class="omg-pv-availability">
                            personnage {[ pv.status ]}
                        </div>
                        <div class="omg-pv-celebrity">
                           ft. {[ pv.celebrity ]}
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>
