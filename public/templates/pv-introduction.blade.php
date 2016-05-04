        <div class="omg-pv-container">
            <section class="omg-pv-header">
                <div class="omg-pv-bann-container">
                    <img src="../img/pvs/ban-thumb/{[ pv.greek.name ]}.png" />
                </div>

                <div class="omg-pv-name-container">
                    <h1 class="omg-pv-greek-name">{[ pv.greek.name ]}</h1>
                    <div class="omg-pv-host-name">{[ pv.host.firstname + ' ' + pv.host.lastname ]}</div>
                    <div class="omg-pv-celebrity-name">feat {[ pv.celebrity ]}</div>
                </div>
            </section>

            <section class="omg-pv-tabs" ng-controller="pvCtrl as greek">
                <h2>Le Mythe</h2>
                <div class="omg-pv-tab-nav-container">
                    <ul class="omg-pv-tab-nav" id="greek-tab">
                        <li ng-class="{ active: greek.isSelected('greek-identity') }"><a href="#/pvs/{[ pv.id ]}#greek-tab" ng-click="greek.selectTab('greek-identity')">Identité</a></li>
                        <li ng-class="{ active: greek.isSelected('greek-story') }"><a href="#/pvs/{[ pv.id ]}#greek-tab" ng-click="greek.selectTab('greek-story')">Histoire</a></li>
                        <li ng-class="{ active: greek.isSelected('greek-opinion') }"><a href="#/pvs/{[ pv.id ]}#greek-tab" ng-click="greek.selectTab('greek-opinion')">Opinion</a></li>
                    </ul>
                </div>
                <div class="omg-pv-tabs-container">
                    <div class="omg-pv-tab" ng-show="greek.isSelected('greek-identity')">
                        <p><span class="omg-pv-identity-label">Nom : </span>{[ pv.greek.name ]}</p>
                        <p><span class="omg-pv-identity-label">Titres : </span>{[ pv.greek.titles ]}</p>
                        <p><span class="omg-pv-identity-label">Parents : </span>{[ pv.greek.parents ]}</p>
                        <p><span class="omg-pv-identity-label">Enfants : </span>{[ pv.greek.descendants ]}</p>
                        <p><span class="omg-pv-identity-label">Statut : </span>{[ pv.greek.status ]}</p>
                        <p><span class="omg-pv-identity-label">Attributs : </span>{[ pv.greek.attributes ]}</p>
                        <p><span class="omg-pv-identity-label">Forces : </span>{[ pv.greek.strengths ]}</p>
                        <p><span class="omg-pv-identity-label">Faiblesses : </span>{[ pv.greek.weaknesses ]}</p>
                        <p><span class="omg-pv-identity-label">Caractère : </span>{[ pv.greek.personality ]}</p>
                        <p><span class="omg-pv-identity-label">Orientation sexuelle : </span>{[ pv.greek.gender_orientation ]}</p>
                    </div>
                    <div class="omg-pv-tab" ng-show="greek.isSelected('greek-story')">
                        <p>{[ pv.greek.story ]}</p>
                    </div>
                    <div class="omg-pv-tab" ng-show="greek.isSelected('greek-opinion')">
                        <p>{[ pv.greek.opinion ]}</p>
                    </div>
                </div>
            </section>

            <section class="omg-pv-host-tabs" ng-controller="pvCtrl as host">
                <h2>L'hôte</h2>
                <div class="omg-pv-tab-nav-container">
                    <ul class="omg-pv-tab-nav" id="host-tab">
                        <li ng-class="{ active: host.isSelected('host-identity') }"><a href="#/pvs/{[ pv.id ]}#host-tab" ng-click="host.selectTab('host-identity')">Identité</a></li>
                        <li ng-class="{ active: host.isSelected('host-story') }"><a href="#/pvs/{[ pv.id ]}#host-tab" ng-click="host.selectTab('host-story')">Histoire</a></li>
                        <li ng-class="{ active: host.isSelected('cohabitation') }"><a href="#/pvs/{[ pv.id ]}#host-tab" ng-click="host.selectTab('cohabitation')">Cohabitation</a></li>
                    </ul>
                </div>
                <div class="omg-pv-tabs-container">
                    <div class="omg-pv-tab" ng-show="host.isSelected('host-identity')">
                        <p>blabla</p>
                    </div>
                    <div class="omg-pv-tab" ng-show="host.isSelected('host-story')">
                        <p>bloblo</p>
                    </div>
                    <div class="omg-pv-tab" ng-show="host.isSelected('cohabitation')">
                        <p>blibli</p>
                    </div>
                </div>
            </section>

            <section class="omg-pv-test-rp">
                <h2>Test-Rp</h2>
                <div class="omg-test-rp-container">
                    <p>
                        test rp
                    </p>
                </div>
            </section>

            <section class="omg-pv-relationships">
                <h2>Liens</h2> <button ng-click="show()">En voir +</button>
                <div class="omg-pv-relationships-container" ng-show="relVisible">
                    <div class="omg-pv-relationship">
                        <div class="omg-pv-relationship-header">
                            soon
                        </div>
                        <div class="omg-pv-relationship-icon">
                            <img src="" alt="" />
                        </div>
                        <div class="omg-pv-relationship-content">
                            soon
                        </div>
                        <div class="omg-pv-relationship-availability">

                        </div>
                    </div>
                </div>
            </section>

        </div>