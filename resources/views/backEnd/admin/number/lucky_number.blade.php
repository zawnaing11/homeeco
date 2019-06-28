@extends('backEnd.admin.main')
@section('routeName','Lucky Number List')
@section('content')
<div class="row">
    <div class="col-sm-7">
        <div class="card">
            <div class="card-header">
                <h4>Lucky Number List</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Number</th>
                                    <th>Total Price</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>055</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>505</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>550</td>
                                        <td>300</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card">
            <div class="card-header">
                <h4>Over/Under Number List</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Number</th>
                                    <th>Total Price</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>056</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                        <td>054</td>
                                        <td>300</td>
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
@endsection