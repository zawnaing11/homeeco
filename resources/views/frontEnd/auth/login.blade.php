@extends('frontEnd.main')
@section('content')
<div class="row mt-5" id="login"> 
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                <h5>Login Form</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email :</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="invalid-feedback">Please provide a valid informations.</div>
                    <div class="form-group">
                        <label for="">Password :</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="invalid-feedback">Please provide a valid informations.</div>
                    <a href="{{ route('home') }}" class="btn btn-info">BACK</a>
                    <input type="submit" class="btn btn-success" value="LOGIN">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection