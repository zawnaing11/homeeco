@extends('backEnd.admin.main')
@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">
            <i class="fa fa-align-justify"></i> Simple Table
            <a href="" class="btn btn-success btn-sm float-right icon-plus icons d-block" data-toggle="modal" data-target="#exampleModal"> New</a>
            </div>
          <div class="card-body">
            @if(count($roles) > 0)
            <table class="table table-responsive-sm">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date registered</th>
                  <th>Permission</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($roles as $role)
                <tr>
                  <td>{{ ucfirst($role->name) }}</td>
                  <td>{{ $role->created_at->format('d/m/Y') }}</td>
                  <td>permission</td>
                  <td>
                      <a href="" class="btn btn-info btn-sm icon-note icons" data-toggle="modal" data-target="#exampleModal"> Edit</a>
                      <a href="" class="icon-trash icons btn-sm btn btn-danger" data-toggle="modal" data-target="#exampleModal"> Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
                <p>No Data</p>
            @endif
          </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
            <div class="card-header">
            <strong>Create</strong> Roles
            </div>
            <form action="{{ route('admin.role.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="nf-email">Name</label>
                        <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name..">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
                </div>
            </form>
        </div>
        </div>
      </div>
    </div>
</div>
@endsection