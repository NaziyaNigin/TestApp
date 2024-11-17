@extends('master.layouts')
@section('title','Home Page')
@section('page-content')
<div class="container mt-5 text-center">
    @if(session()->has('message'))
            <span class="nav-link">{{ session()->get('message') }}</span>
    @endif
    <h2 id="wel">Welcome to Home Page!!</h2>
</div>
@endsection
