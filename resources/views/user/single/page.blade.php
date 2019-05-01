@extends('user.master')

@section('title', $page->title)

@section('content')

    <div class="inner-page-banner-area" style="background-image: url('/user/img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Page Details</h1>
                <ul>
                    <li><a href="{{route('home')}}">Home</a> -</li>
                    <li>Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Event Details Page Area Start Here -->
    <div class="event-details-page-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="event-details-inner">
                        <h2 class="title-default-left-bold-lowhight"><a href="#">{{$page->title}}</a></h2>
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Page Area End Here -->
@endsection