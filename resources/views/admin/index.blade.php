@extends('layouts.app')

@section('content')
<div class="row" style="padding:20px" ng-app="demoApp" ng-controller="AdminsController">
    <div class="col-xs-12 col-sm-4 col-md-3 text-center" ng-repeat='admin in admins' id="<% admin._id %>">
        <div class="thumbnail">
            <img src="http://moviepilot.com/tags/tag-static/images/default_avatar.png" alt="Avatar" width="200px">
            <div class="caption">
                <h3><% admin.fullname %></h3>
                <p><% admin.username %></p>
                <p>
                    <a href="#" class="btn btn-primary" role="button" onclick="return adminDetails('<% admin._id %>')"><i class="fa fa-info-circle"></i> Details</a>
                    <a href="#" class="btn btn-danger" role="button" onclick="return adminDelete('<% admin._id %>')"><i class="fa fa-times-circle"></i> Delete</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!--AngularJS-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
<script src="{{ url('/js/app.js') }}"></script>
@endsection
