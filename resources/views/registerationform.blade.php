@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="/register">
                    @csrf
                    <div class="form-group">
                        <label for="User Name">User Name</label>
                        <input type="name" name="name" class="form-control" value="" class="@error('name') is-invalid @enderror">
                        
                    </div>
                    <div class="form-group">
                        <label for="Email Address">Email address</label>
                        <input type="email" name="email" class="form-control" value="">
                        
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="Confirm Password">Confrim Password</label>
                        <input type="password" name="confrim_password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection