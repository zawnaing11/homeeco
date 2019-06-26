@extends('backEnd.admin.main')
@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">
                <strong>Edit</strong> Roles
            </div>
            <form action="{{ route('admin.role.update',$role->id) }}" method="post">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="nf-email">Name</label>
                        <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name.." value="{{ old('name',ucfirst($role->name))}}">
                    </div>
                    @if($errors->first('name'))
                    <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <a href="{{ route('admin.role.index') }}" class="btn btn-sm btn-secondary"><i class="fa fa-ban"></i> Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection