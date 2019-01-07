@extends('backEnd.admin.main')
@section('routeName','Master')
@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="row" ng-app="app" ng-controller="numberCtrl">
    <div class="col-sm-5">
        <div class="card">
            <div class="card-header">
                Input Form
            </div>
            <div class="card-body">
                <form class="form">
                    <div class="form-group mb-2">
                        <label for="">User Name</label>
                        <select ng-model="user" ng-init="user = '0'" class="form-control" ng-change="userSelectChange()">
                                <option value="0">Select User</option>
                                @foreach($masters as $key => $value)
                                <option value={{ $value->id.','.$value->name }}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="">Number</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" ng-model="product">
                            <div class="input-group-prepend" ng-click="sendData()"  ng-if="clickSend == true">
                                <div class="input-group-text">
                                    <i class="fa fa-send"></i>
                                </div>
                            </div>
                            <div class="input-group-prepend" ng-if="clickSend == false">
                                <div class="input-group-text">
                                    <i class="fa fa-ban"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <span ng-if="errorList.product" class="text-danger">{% errorList.product %}</span>
            </div>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="card">
            <div class="card-header">
                <span>{% selectUserName %}</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-bordered" ng-if="!errorList.noData">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="(key, number) in userData">
                                <td>{% number.number %}</td>
                                <td>
                                        {% number.price %}
                                </td>
                                <td>{% number.total %}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div ng-if="errorList.noData" class="alert alert-warning">{% errorList.noData %}</div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/angular.js') }}"></script>
<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/input_number/app.js') }}"></script>
<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/input_number/controller.js') }}"></script>
<script src="{{ asset('homeeco/backEnd/admin/js/angularjs/input_number/service.js') }}"></script>
@endsection