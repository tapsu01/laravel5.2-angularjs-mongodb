app.controller('employeesController', function($scope, $http, API_URL){
    //retrieve employees listing from API_URL
    $http.get(API_URL+'employees').success(function(response){
        $scope.employees = response;
    });

    //show modal form
    $scope.toggle = function(modalstate, id){
        $scope.modalstate = modalstate;
        switch (modalstate) {
            case 'add':
                $scope.form_title = "Add New Employee";
                break;
            case 'edit':
                $scope.form_title = "Employee Detail";
                $scope.id = id;
                $http.get(API_URL+'employees/'+id).success(function(response){
                    $scope.employee = response;
                });
                break;
            default:
                break;
        }
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function(modalstate, id){
        var url = API_URL + 'employees';
        var method = "POST";
        //eppend employee id to the URL if the form is edit
        if (modalstate === 'edit') {
            url += "/" + id;
            method = "PUT";
        }
        $http({
            method: method,
            url: url,
            data: $.param($scope.employee),
            headers: {'Content-Type':'application/x-www-form-urlencoded'}
        }).success(function(response){
            location.reload();
        }).error(function(response){
            alert('This is embarassing.An error has occured. Please check the log for details');
        });
    }

    //delete record
    $scope.confirmDelete = function(id){
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'employees/' + id
            }).success(function(data){
                location.reload();
            }).error(function(data){
                alert('Unable to delete');
            });
        } else {
            return false;
        }
    }
});
