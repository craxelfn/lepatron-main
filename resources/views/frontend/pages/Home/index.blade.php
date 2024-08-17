@extends('layouts.frontend') 

@section('content')
@include('frontend.Component.header')
@include('frontend.pages.Home.Component.hero')
@include('frontend.pages.Home.Component.trend')
@include('frontend.pages.Home.Component.post1')
@include('frontend.Component.footer')
@endsection