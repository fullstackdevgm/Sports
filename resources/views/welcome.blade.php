<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/homestyle.css') }}" />
</head>
<body ng-app="commentApp" ng-controller="mainController">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Account</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        @endif
        
        <div class="content">
            <form ng-submit="submitComment()"> <!-- ng-submit will disable the default form action and use our function -->
                <div class="form-group">
                    <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
                </div>
                <div class="form-group text-right">   
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>

            <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
                <h3>Comment #[[ comment.id ]] <small>by [[ comment.author ]]</h3>
                <p>[[ comment.text ]]</p>
                <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/angular.min.js') }}"></script><!-- load angular -->
    <script src="{{ asset('js/myApp.js') }}"></script>
</body>
</html>
