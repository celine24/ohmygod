@extends('layout.header')

<header>
    <div class="omg-main-header">
        <div class="omg-main-header-logo">

        </div>
        <nav class="omg-main-header-menu">
            <ul>
                <li><a class="brand" href="#/">Home</a></li>
                <li><a class="brand" href="#/">Contexte</a></li>
                <li><a class="brand" href="#/">Groupes</a></li>
                <li><a class="brand" href="#/">Annexes</a></li>
                <li><a href="#/pvs">Prédéfinis</a></li>
            </ul>

        </nav>
    </div>
</header>


<div class="omg-main-container" ng-view>


</div>

@extends('layout.footer')