<!DOCTYPE html>
<html lang="fr" ng-app="omgApp">
<head>
    <meta charset="UTF-8">
    <title>OH MY GOD !</title>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
    {{--<base href="/" />--}}

</head>
<body>
<header>
    <h1>Oh My God ! Bienvenue :D</h1>

    <ul class="nav">
        <li><a class="brand" href="#/">home</a></li>
        <li><a href="#/pvs">pv</a></li>
    </ul>
</header>
<div class="container" ng-view>


</div>


    <script src="{{asset('bower_components/angular/angular.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bower_components/angular-route/angular-route.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/controller/home.js')}}" type="text/javascript"></script>
</body>
</html>
