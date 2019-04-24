@extends('user.master')

@section('title', $event->title)

@section('content')

    <div class="inner-page-banner-area" style="background-image: url('/user/img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Event Details</h1>
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
                            <a href="#"><img src="/uploads/{{$event->image}}" alt="event" class="img-responsive"></a>
                        </div>
                        <h2 class="title-default-left-bold-lowhight"><a href="#">{{$event->title}}</a></h2>
                        <ul class="event-info-inline title-bar-sm-high">
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($event->date)->format('d F, Y')}}</li>
                        </ul>
                        {!! $event->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Page Area End Here -->
@endsection