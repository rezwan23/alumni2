@extends('user.master')

@section('title', $news->title)

@section('content')

    <div class="inner-page-banner-area" style="background-image: url('/user/img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>News Details</h1>
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
                        <div class="event-details-img">
                            <a href="#"><img src="/uploads/{{$news->image}}" alt="event" class="img-responsive"></a>
                        </div>
                        <h2 class="title-default-left-bold-lowhight"><a href="#">{{$news->title}}</a></h2>
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Page Area End Here -->
@endsection