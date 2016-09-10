var bookWishListAppControllers = angular.module('bookWishListAppControllers', [
    'bookWishListAppServices'
]);

bookWishListAppControllers.controller('LoginController', ['$scope', '$http', '$location', 'userService', function($scope, $http, $location, userService){
    $scope.login = function(){
        userService.login($scope.email, $scope.password, function(response){
            alert('Great! Welcome go back again!');
            $location.path('/');
        }, function(response){
            alert('Something went wrong with login process. Try again later!');
        });
    }

    $scope.email = '';
    $scope.password = '';

    if(userService.checkIfLoggedIn()){
        $location.path('/');
    }
}]);

bookWishListAppControllers.controller('SignupController', ['$scope', '$location', 'userService', function($scope, $location, userService){
    $scope.signup = function(){
        userService.signup($scope.name, $scope.email, $scope.password, function(response){
            alert('Great! You are now signed in, Welcome: ' + $scope.name +'!');
            $location.path('/');
        }, function(response){
            alert('Something went wrong with signup process. Try again later!')
        });
    }

    $scope.name = '';
    $scope.email = '';
    $scope.password = '';

    if(userService.checkIfLoggedIn()){
        $location.path('/');
    }
}]);

bookWishListAppControllers.controller('MainController', ['$scope', '$http', '$location', 'userService', 'bookService', function($scope, $http, $location, userService, bookService){
    $scope.logout = function(){
        userService.logout();
        $location.path('/login');
    }

    $scope.create = function(){
        bookService.create({
            title: $scope.currentBookTitle,
            author_name: $scope.currentBookAuthorName,
            pages_count: $scope.currentBookPagesCount
        }, function(){
            $('#addBookModal').modal('toggle');
            $scope.currentBookReset();
            $scope.refresh();
        }, function(){
            alert('Some errors occurred while communicating with the service. Try again later.');
        });
    }

    $scope.refresh = function(){
        bookService.getAll(function(response){
            $scope.books = response;
        }, function(){
            alert('Some errors occurred while communicating with the service. Try again later.');
        });
    }

    $scope.delete = function(bookId){
        if(confirm('Are you sure to remove this book from your wishlist?')){
            bookService.remove(bookId, function(){
                alert('Book removed successfully!');
                $scope.refresh();
            }, function(){
                alert('Some errors occurred while communicating with the service. Try again later.');
            });
        }
    }

    $scope.load = function(bookId){
        bookService.getById(bookId, function(response){
            $scope.currentBookId = response._id;
            $scope.currentBookTitle = response.title;
            $scope.currentBookAuthorName = response.author_name;
            $scope.currentBookPagesCount = response.pages_count;
            $('#updateBookModal').modal('toggle');
        }, function(){
            alert('Some errors occurred while communicating with the service. Try again later.');
        });
    }

    $scope.update = function(){
        bookService.update($scope.currentBookId, {
            title: $scope.currentBookTitle,
            author_name: $scope.currentBookAuthorName,
            pages_count: $scope.currentBookPagesCount
        }, function(response){
            $('#updateBookModal').modal('toggle');
            $scope.currentBookReset();
            $scope.refresh();
        }, function(response){
            alert('Some errors occurred while communicating with the service. Try again later.');
        });
    }

    $scope.currentBookReset = function(){
        $scope.currentBookTitle = '';
        $scope.currentBookAuthorName = '';
        $scope.currentBookPagesCount = '';
    }

    if(!userService.checkIfLoggedIn()){
        $location.path('/');
    }

    $scope.books = [];
    $scope.currentBookReset();
    $scope.refresh();
}]);
