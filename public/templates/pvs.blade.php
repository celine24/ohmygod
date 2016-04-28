<div class="omg-pvs-container" ng-controller="groupsCtrl">
    <div class="omg-pvs-groups">
        <ul>
            <li ng-repeat="group in groups">
                <div class="omg-pvs-group {[ group.class ]}Bg" ng-click="filter(group)" ng-class="{'active':$index == activeGroup}">
                    {[ group.name ]}
                </div>
            </li>
        </ul>
    </div>

    <div class="omg-pvs-filterBar">
        <div class="searchBar">
            <input type="text" ng-model="search" id="search" />
            <i class="fa fa-search fa-2x" aria-hidden="true"></i>
        </div>
        <div class="statusFilter">
            <span>libre</span>
            <span>pris</span>
            <span>réservé</span>
        </div>
        <div class="alreadyPlayedFilter">
            <span>déjà joué</span>
        </div>
        <div class="genderFilter">
            <i class="fa fa-female" aria-hidden="true" ng-click="gender = 'female'"></i>
            <i class="fa fa-male" aria-hidden="true"></i>
        </div>
    </div>
    <div class="omg-pvs-list">
        <ul>
            <li ng-repeat="pv in pvs | filter:groupFilter | filter:search | filter:gender">
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
