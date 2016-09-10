var app = angular.module('demoApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('AdminsController', function($scope, $http) {
    $scope.admins = [];
    // $scope.init();
    // $scope.init = function() {
        $http.get('/list-admin').
        success(function(response) {
            $scope.admins = response.data;
        });
    // }
});
