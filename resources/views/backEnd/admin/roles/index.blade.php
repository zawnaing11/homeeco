@extends('backEnd.admin.main')
@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Simple Table
                <a href="" class="btn btn-success btn-sm float-right icon-plus icons d-block" data-toggle="modal" data-target="#createRole"> New</a>
            </div>
            <div class="card-body">
                @if(count($roles) > 0)
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date registered</th>
                            <th>Date updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{ ucfirst($role->name) }}</td>
                            <td>{{ $role->created_at->format('d/m/Y') }}</td>
                            <td>{{ $role->updated_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('roles.show',$role->id) }}" class="btn btn-info btn-sm icon-note icons"> Edit</a>
                                <a href=""  id="{{ $role->id }}" class="icon-trash icons btn-sm btn btn-danger deleteBtn" name="{{ $role->name }}" data-toggle="modal" data-target="#deleteRole"> Delete</a>
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
    <!-- Create Role Modal -->
    <div class="modal fade" id="createRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <strong>Create</strong> Roles
                    </div>
                    <form action="{{ route('roles.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nf-email">Name</label>
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name..">
                            </div>
                            @if($errors->first('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
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
    <!-- Create Role Modal -->
    <div class="modal fade" id="deleteRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <strong>Delete</strong> Roles
                    </div>
                    <form class="form" method="post" action="">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <div class="card-body">
                            Do You Really Want To <i>Delete</i> <b class="deleteName"></b> 
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Delete</button>
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(function() {
        $('.deleteBtn').on('click', function() {
            var delID = $(this).attr('id');
            var delName = $(this).attr('name');
            var redirectUrl = '/admin/roles/' + delID;
            $('.deleteName').html(delName);
            $('#deleteRole form').attr('action',redirectUrl);
        });
    });
</script>
@endsection