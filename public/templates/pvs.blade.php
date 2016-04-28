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

    </div>
    <div class="omg-pvs-list">
        <ul>
            <li ng-repeat="pv in pvs | filter:groupFilter">
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
                            Personnage libre
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
