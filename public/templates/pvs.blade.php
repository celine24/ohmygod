<div class="omg-pvs-container">
    <div class="omg-pvs-groups">
        <div class="omg-pvs-group olympianBg">
            Olympiens
        </div>
        <div class="omg-pvs-group minorGodBg">
            Mineurs
        </div>
        <div class="omg-pvs-group nymphBg">
            Nymphes
        </div>
        <div class="omg-pvs-group museBg">
            Muses
        </div>
        <div class="omg-pvs-group creatureBg">
            Créatures
        </div>
        <div class="omg-pvs-group humanBg">
            Humains
        </div>
    </div>

    <div class="omg-pvs-filterBar">

    </div>
    <div class="omg-pvs-list">
        <ul>
            <li ng-repeat="pv in pvs" class="omg-pvs-pv">
                <div class="omg-pv-img">
                    <img src="img/pvs/ban-thumb/{[ pv.greek.name ]}.png" title="" />
                </div>
                <div class="omg-pv-name-container {[ pv.group.name ]}Bg">
                    <div class="omg-pv-name">{[ pv.greek.name ]}</div>
                    <div class="omg-pv-surname">{[ pv.host.firstname + ' ' + pv.host.lastname ]}</div>
                </div>
                <div class="omg-pv-content {[ pv.greek.name ]}Border">
                    <div class="omg-pv-titles">
                        {[ pv.greek.titles ]}
                    </div>
                    <div class="omg-pv-availability">Personnage libre
                    </div>
                    <div class="omg-pv-celebrity">
                       ft. {[ pv.celebrity ]}
                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>
