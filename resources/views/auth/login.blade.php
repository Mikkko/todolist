@extends('layouts.layout')

@section('navbar')
    @include('templates.authenticationNavBar')
@endsection
    
@section('content')
    @include('templates.loginHeader')
    @include ('templates.loginContent')
@endsection
