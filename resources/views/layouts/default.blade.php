<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.default-head')
</head>
<body ng-app="commentApp" ng-controller="mainController">
    <div class="container">
        <header class="row">
            @include('includes.default-header')
        </header>
        
        <div id="content" class="row row-centered">
            @yield('content')

            @yield('comment')
        </div>
        <footer class="row">
            @include('includes.default-footer')
        </footer>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('exFoot')
</body>
</html>
