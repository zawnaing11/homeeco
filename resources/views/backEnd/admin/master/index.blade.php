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
            @if(count($masters) > 0) 
              <table class="table table-responsive-sm table-bordered">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date registered</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($masters as $master)
                  <tr>
                    <td>{{ ucfirst($master->name) }}</td>
                    <td>{{ $master->email }}</td>
                    <td>{{ date('d-m-Y', strtotime($master->created_at)) }}</td>
                    <td>{{ $master->phone }}</td>
                    <td>
                      <span class="badge badge-success">Active</span>
                    </td>
                    <td>
                        <a href="{{ route('admin.master.edit', $master->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal_{{ $master->id }}">Delete</button>
                    </td>
                    </tr>
                        <div class="modal fade" id="myModal_{{ $master->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        {{ $master->name }} is delete ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.master.destroy', $master->id) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-info btn-sm" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
              </table>
              <div class="pull-right">
                  {{ $masters->links() }}
              </div>
            @else
                <div class="alert alert-warning">
                  <strong>Warning!</strong> You should <a href="#" class="alert-link">read this message</a>.
                </div>
            @endif
        </div>
      </div>
    </div>
</div>
@endsection