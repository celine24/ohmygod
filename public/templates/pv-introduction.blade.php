<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>OH MY GOD !</title>
    <link href="../node_modules/normalize.css/normalize.css" type="text/css" rel="stylesheet" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body ng-app="pvs">

    <div class="omg-main-container">

        <div class="omg-pv-container" ng-controller="pvController">
            <section class="omg-pv-header">
                <div class="omg-pv-bann-container">
                    <img src="../img/pvs/dieux/bann/zeus.png" />
                </div>


                <div class="omg-pv-name-container">
                    <h1 class="omg-pv-greek-name">Zeus</h1>
                    <div class="omg-pv-host-name">Elijah Dinsmore</div>
                    <div class="omg-pv-celebrity-name">feat Brad Pitt</div>
                </div>
            </section>

            <section class="omg-pv-tabs" ng-controller="tabCtrl as greek">
                <h2>Le Dieu</h2>
                <div class="omg-pv-tab-nav-container">
                    <ul class="omg-pv-tab-nav" id="greek-tab">
                        <li ng-class="{ active: greek.isSelected('greek-identity') }"><a href="#greek-tab" ng-click="greek.selectTab('greek-identity')">Identité</a></li>
                        <li ng-class="{ active: greek.isSelected('greek-story') }"><a href="#greek-tab" ng-click="greek.selectTab('greek-story')">Histoire</a></li>
                        <li ng-class="{ active: greek.isSelected('greek-opinion') }"><a href="#greek-tab" ng-click="greek.selectTab('greek-opinion')">Opinion</a></li>
                    </ul>
                </div>
                <div class="omg-pv-tabs-container">
                    <div class="omg-pv-tab" ng-show="greek.isSelected('greek-identity')">
                        <p>blabla</p>
                    </div>
                    <div class="omg-pv-tab" ng-show="greek.isSelected('greek-story')">
                        <p>bloblo</p>
                    </div>
                    <div class="omg-pv-tab" ng-show="greek.isSelected('greek-opinion')">
                        <p>blibli</p>
                    </div>
                </div>
            </section>

            <section class="omg-pv-host-tabs" ng-controller="tabCtrl as host">
                <h2>L'hôte</h2>
                <div class="omg-pv-tab-nav-container">
                    <ul class="omg-pv-tab-nav" id="host-tab">
                        <li ng-class="{ active: host.isSelected('host-identity') }"><a href="#host-tab" ng-click="host.selectTab('host-identity')">Identité</a></li>
                        <li ng-class="{ active: host.isSelected('host-story') }"><a href="#host-tab" ng-click="host.selectTab('host-story')">Histoire</a></li>
                        <li ng-class="{ active: host.isSelected('cohabitation') }"><a href="#host-tab" ng-click="host.selectTab('cohabitation')">Cohabitation</a></li>
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



    </div>

    <script src="../node_modules/angular/angular.js" type="text/javascript"> </script>
    <script src="../js/app.js" type="text/javascript"> </script>
    <script src="../js/controller/tab.js" type="text/javascript"> </script>
    <script src="../js/controller/pv.js" type="text/javascript"> </script>
</body>
</html>