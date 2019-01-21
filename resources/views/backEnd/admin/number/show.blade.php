@extends('backEnd.admin.main')
@section('routeName','Master')
@section('content')
<div ng-app="mainApp" ng-controller="productListCtrl">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="form-group row">
                        <input type="text" class="form-control col-sm-7 mb-2" ng-model="limit" ng-init="limit='0'">
                        <button class="btn btn-success col-sm-5" ng-click="search()">Search</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Number</th>
                                        <th>Price</th>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="product in products">
                                            <td>{% product.number %}</td>
                                            <td>{% product.output %}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/angular.js') }}"></script>
<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/product_list/app.js') }}"></script>
<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/product_list/controller.js') }}"></script>
<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/product_list/service.js') }}"></script>
@endsection