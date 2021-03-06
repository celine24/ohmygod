<div class="omg-pvs-container" ng-controller="groupsCtrl">
    <div class="omg-pvs-groups">
        <ul>
            <li ng-repeat="group in groups">
                <div class="omg-pvs-group {[ group.class ]}Bg" ng-click="filter(group.id, 'group', 'groupe', group.name)" ng-class="{'active':group.id == groupActive}">
                    {[ group.name ]}
                </div>
            </li>
        </ul>
    </div>

    <div class="omg-pvs-filterBar">
        <div class="statusFilter">
            <span ng-click="filter('free', 'status', 'statut', 'libre')" ng-class="{'activeFilter' : 'free' == statusActive}">libre</span>
            <span ng-click="filter('taken', 'status', 'statut', 'pris')" ng-class="{'activeFilter' : 'taken' == statusActive}">pris</span>
            <span ng-click="filter('reserved', 'status', 'statut', 'réservé')" ng-class="{'activeFilter' : 'reserved' == statusActive}">réservé</span>
        </div>
        <div class="alreadyPlayedFilter">
            <span ng-click="filter(1, 'alreadyPlayed', 'état', 'déjà joué')" ng-class="{'activeFilter' : 1 == alreadyPlayedActive}">déjà joué</span>
            <span ng-click="filter(0, 'alreadyPlayed', 'état', 'jamais joué')" ng-class="{'activeFilter' : 0 == alreadyPlayedActive}">jamais joué</span>
        </div>
        <div class="genderFilter">
            <i class="fa fa-female" aria-hidden="true" ng-click="filter(1, 'gender', 'sexe', 'femme')" ng-class="{'activeFilter' : 1 == genderActive}"></i>
            <i class="fa fa-male" aria-hidden="true" ng-click="filter(0, 'gender', 'sexe', 'homme')" ng-class="{'activeFilter' : 0 == genderActive}"></i>
        </div>
        <div class="searchBar">
            <input type="text" ng-model="search" id="search" />
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
        </div>
    </div>
    <div class="omg-pvs-activeFilters">
        <div>
            <p>Filtres :</p>
        </div>
        <div>
            <ul>
                <li class="no-filters" ng-show="activeFilters.length === 0"><p>Aucun filtre actif</p></li>
                <li ng-repeat="activeFilter in activeFilters">
                    <p ng-repeat="(key, value) in activeFilter">
                        {[key]} : {[value]}
                    </p>
                </li>
            </ul>
        </div>
        <div>
            <button class="reset-filters" ng-show="activeFilters.length > 0" ng-click="resetFilters()">Supprimer les filtres</button>
        </div>
    </div>
    <div class="omg-pvs-list">
        <ul class="container-grid-4">
            <li ng-repeat="pv in pvs | filter: {group : {id : groupFilter}} | filter:search | filter:{gender : genderFilter} | filter:{status : statusFilter} | filter:{already_played : alreadyPlayedFilter} ">
                <a href="#/pvs/{[ pv.id ]}" alt="{[ pv.greek.name ]}" title="{[ pv.greek.name ]}">
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
                </a>
            </li>
        </ul>
    </div>

</div>
