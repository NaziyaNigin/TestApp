@extends('master.layouts')
@section('title','Registration Page')
@section('page-content')
    <form method="post" action="{{ route('doRegister') }}">
    @csrf
        <div class="container">
            <h1>Sign Up</h1><p></p>
            <div class="input">
                <input type="text" name="name" placeholder="Full Name" class="form-control" value="{{ old('name') }}">
                @error('name')
                <p>{{ $message }}</p>
            @enderror
            </div><p></p>
            <div class="input">
                <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                @error('email')
                <p>{{ $message }}</p>
            @enderror
            </div><p></p>
            <div class="input">
                <input type="password" name="password" class="form-control" placeholder="Password">
                @error('password')
                <p>{{ $message }}</p>
            @enderror
            </div><p></p>
            <div class="input">
                <input type="text" name="mobile" placeholder="Mobile" class="form-control" value="{{ old('mobile') }}">
                @error('mobile')
                <p>{{ $message }}</p>
            @enderror
            </div><p></p>
            <div class="input">
                <input type="submit" class="btn btn-primary" value="Register">
            </div>
        </div>
    </form>
@endsection
