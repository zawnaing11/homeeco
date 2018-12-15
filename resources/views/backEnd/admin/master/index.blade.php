@extends('backEnd.admin.main')
@section('routeName','Master');
@section('content')
<div class="row">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> User Table
          <a class="btn btn-success btn-sm float-right icon-plus icons d-block" href="{{ route('admin.master.create') }}"> New</a>
        </div>
        <div class="card-body">
        @if(count($users) > 0)
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
                @foreach($users as $user)
              <tr>
                <td>{{ ucfirst($user->name) }}</td>
                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                <td>{{ ucfirst($user->getRoleNames()[0]) }}</td>
                <td>
                  <span class="badge badge-success">Active</span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @else
        <p>No Data For User Table</p>
        @endif
        </div>
      </div>
    </div>
</div>
@endsection