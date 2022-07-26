@extends('layouts.app')


@section('page_title','Comics DC')
    
@section('page_content')
    @include('jumbotron')
    @include('current_series')
    <div class="banner bg-blue">
        @include('bannerBlu')
    </div>
    
@endsection