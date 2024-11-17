@extends('master.layouts')
@section('title','Login Page')
@section('page-content')
    <form method="post" action="{{ route('doLogin') }}">
        @csrf
        <div class="container">
            <div class="log">
                <h1>Sign in</h1>
            </div><p></p>
            @if(session()->has('message'))<p>{{ session()->get('message') }}</p>@endif
            <div >
                <input type="email" class="form-control" name="email" placeholder="Email">
                @error('email')
                <p>{{ $message }}</p>
            @enderror
            </div><p></p>
            <div>
                <input type="password" class="form-control" name="password" placeholder="Password">
                @error('password')
                <p>{{ $message }}</p>
            @enderror
            </div><p></p>
            <div class="checkbox" >
                <input type="checkbox" name="remember_token" >
                <label>Remember Me</label>
            </div><p></p>
            <div>
                <input type="submit" class="btn btn-primary" name="submit" value="LOGIN">
            </div><p></p>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                <a href="{{ route('registration') }}"class="link-danger">Register</a></p>
        </div>
    </form>
@endsection
