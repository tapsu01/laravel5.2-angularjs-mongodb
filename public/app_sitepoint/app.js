var bookWishListApp = angular.module('bookWishListApp', [
    'ngRoute',
    'bookWishListAppControllers'
]);

bookWishListApp.config(function (localStorageServiceProvider) {
  localStorageServiceProvider
    .setPrefix('bookWishListApp')
    .setStorageType('localStorage');
});

bookWishListApp.config(['$routeProvider', function($routeProvider){
    $routeProvider.when('/login', {
        templateUrl: '/sitepoint/partials/login.html',
        controller: 'LoginController'
    }).when('/signup', {
        templateUrl: '/sitepoint/partials/signup.html',
        controller: 'SignupController'
    }).when('/', {
        templateUrl: '/sitepoint/partials/index.html',
        controller: 'MainController'
    }).otherwise({
        redirectTo: '/sitepoint/partials/index.html'
    });
}]);
