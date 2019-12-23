@extends('layout')

@section('title', 'FranBeauty - Home')

@section('content')

    @include('home.jumbotron')
    @include('home.services')
    @include('home.about')
    @include('home.jobs')
    @include('home.contact')

@endsection