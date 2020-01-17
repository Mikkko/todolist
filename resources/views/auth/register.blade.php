@extends('layouts.layout')

@section('navbar')
    @include('templates.authenticationNavBar')
@endsection

@section('content')
    @include('templates.registrationHeader')
    @include('templates.registrationContent')
@endsection
