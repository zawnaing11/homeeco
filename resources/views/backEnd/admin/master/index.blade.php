@extends('backEnd.admin.main')
@section('routeName','Master');
@section('content')
<div class="row">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Master Table
          <a class="btn btn-success btn-sm float-right icon-plus icons d-block" href="{{ route('admin.master.create') }}"> New</a>
        </div>
        <div class="card-body">
          <table class="table table-responsive-sm table-bordered">
            <thead>
              <tr>
                <th>Username</th>
                <th>Date registered</th>
                <th>Role</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pompeius René</td>
                <td>2012/01/01</td>
                <td>Member</td>
                <td>
                  <span class="badge badge-success">Active</span>
                </td>
              </tr>
              <tr>
                <td>Paĉjo Jadon</td>
                <td>2012/02/01</td>
                <td>Staff</td>
                <td>
                  <span class="badge badge-danger">Banned</span>
                </td>
              </tr>
              <tr>
                <td>Micheal Mercurius</td>
                <td>2012/02/01</td>
                <td>Admin</td>
                <td>
                  <span class="badge badge-secondary">Inactive</span>
                </td>
              </tr>
              <tr>
                <td>Ganesha Dubhghall</td>
                <td>2012/03/01</td>
                <td>Member</td>
                <td>
                  <span class="badge badge-warning">Pending</span>
                </td>
              </tr>
              <tr>
                <td>Hiroto Šimun</td>
                <td>2012/01/21</td>
                <td>Staff</td>
                <td>
                  <span class="badge badge-success">Active</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection