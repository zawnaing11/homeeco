@extends('backEnd.admin.main')
@section('routeName','Master');
@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="card">
          <div class="card-header">
            <strong>Master</strong> Create</div>
        <form class="form-horizontal" action="" method="post">
            {{ csrf_field() }}
          <div class="card-body">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="hf-name">Name</label>
                  <div class="col-md-9">
                    <input class="form-control" id="hf-name" type="text" name="name" placeholder="Enter Name..">
                    @if($errors->first('name'))
                  <span class="help-block">{{ $errors->first('name') }}</span>
                  @endif
                  </div>
                  
                </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-email">Email</label>
                <div class="col-md-9">
                  <input class="form-control" id="hf-email" type="email" name="hf-email" placeholder="Enter Email..">
                  @if($errors->first('email'))
                  <span class="help-block">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-phone">Phone</label>
                <div class="col-md-9">
                  <input class="form-control" id="hf-phone" type="text" name="phone" placeholder="Enter Phone..">
                  @if($errors->first('phone'))
                  <span class="help-block">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-phone">Role</label>
                <div class="col-md-9">
                  <select class="form-control" id="select1" name="role">
                    <option>Please select</option>
                    @if(count($roles) > 0)
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>\
                        @endforeach
                    @endif
                  </select>
                  @if($errors->first('role'))
                  <span class="help-block">{{ $errors->first('role') }}</span>
                  @endif
              </div>
                </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                <div class="col-md-9">
                  <input class="form-control" id="hf-password" type="password" name="password" placeholder="Enter Password..">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-password">Confirm Password</label>
                <div class="col-md-9">
                  <input class="form-control" id="hf-password" type="password" name="password" placeholder="Enter Confirm Password..">
                  @if($errors->first('password'))
                  <span class="help-block">{{ $errors->first('password') }}</span>
                  @endif
                </div>
              </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit">
              <i class="fa fa-dot-circle-o"></i> Submit</button>
            <button class="btn btn-sm btn-danger" type="reset">
              <i class="fa fa-ban"></i> Reset</button>
          </div>
        </form>
        </div>
    </div>
</div>
@endsection