<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>OH MY GOD !</title>
    <link href="{{ asset('node_modules/angular/angular.min.js'}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/style.css')}}" type="text/css" rel="stylesheet" />
</head>
<body ng-app="omgApp">
    <body>
        <header>
            <h1>Oh My God ! Bienvenue :D</h1>

            <ul class="nav">
                <li><a class="brand" href="#/">home</a></li>
                <li><a href="#pv">pv</a></li>
            </ul>
        </header>
        <div class="container" ng-view>
            {{--<div class="content">--}}
                {{--<div class="title">Laravel 5</div>--}}
            {{--</div>--}}
        </div>
    </body>
</html>
