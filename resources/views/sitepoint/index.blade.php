<!DOCTYPE html>
<html lang="en" ng-app="bookWishListApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sitepoint Example</title>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Laravel</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#/">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Profiles</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#/login">Login</a></li>
                        <li><a href="#/signup">Signup</a></li>
                        <li><a href="" ng-click="logout()">Logout</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div class="container" style="margin-top: 50px" ng-view>

        </div>
        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Your own javascript -->
        <script src="{{ asset('js/angular.min.js') }}"></script>
        <script src="{{ asset('js/angular-route.min.js') }}"></script>
        <script src="{{ asset('js/angular-resource.min.js') }}"></script>
        <script src="{{ asset('js/angular-animate.min.js') }}"></script>
        <script src="{{ asset('js/lodash.min.js') }}"></script>
        <script src="{{ asset('js/angular-local-storage.min.js') }}"></script>
        <script src="{{ asset('js/restangular.min.js') }}"></script>
        <script src="{{ asset('app_sitepoint/app.js') }}"></script>
        <script src="{{ asset('app_sitepoint/controller.js') }}"></script>
        <script src="{{ asset('app_sitepoint/services.js') }}"></script>
    </body>
</html>
