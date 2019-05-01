@extends('user.master')

@section('title', 'Home')


@section('content')
    <!-- Slider 1 Area Start Here -->
    <div class="slider1-area overlay-default index1">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                @foreach($sliders as $slider)
                <img src="/uploads/{{$slider->image}}" alt="slider" title="#slider-direction-{{$loop->index+1}}" />
                {{--<img src="/user/img/slider/1-2.jpg" alt="slider" title="#slider-direction-2" />--}}
                {{--<img src="/user/img/slider/1-3.jpg" alt="slider" title="#slider-direction-3" />--}}
                @endforeach
            </div>
            @foreach($sliders as $slider)
            <div id="slider-direction-{{$loop->index+1}}" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-{{$loop->index+1}}">
                    <div class="title-container s-tb-c">
                        <div class="title1">{{$slider->title}}</div>
                        <p>{{$slider->content}} </p>
                        <div class="slider-btn-area">
                            <a href="{{$slider->link}}" class="default-big-btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{--<div id="slider-direction-2" class="t-cn slider-direction">--}}
                {{--<div class="slider-content s-tb slide-2">--}}
                    {{--<div class="title-container s-tb-c">--}}
                        {{--<div class="title1">Best Education For HTML Template</div>--}}
                        {{--<p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard--}}
                            {{--<br>dummy text ever sinceprinting and typesetting industry. </p>--}}
                        {{--<div class="slider-btn-area">--}}
                            {{--<a href="#" class="default-big-btn">Start a Course</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div id="slider-direction-3" class="t-cn slider-direction">--}}
                {{--<div class="slider-content s-tb slide-3">--}}
                    {{--<div class="title-container s-tb-c">--}}
                        {{--<div class="title1">Best Education Into PHP</div>--}}
                        {{--<p>Emply dummy text of the printing and typesetting industry orem Ipsum has been the industry's standard--}}
                            {{--<br>dummy text ever sinceprinting and typesetting industry. </p>--}}
                        {{--<div class="slider-btn-area">--}}
                            {{--<a href="#" class="default-big-btn">Start a Course</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <!-- Slider 1 Area End Here -->
    <!-- Service 1 Area Start Here -->

    <!-- Service 1 Area End Here -->
    <!-- About 1 Area Start Here -->
    {{--<div class="about1-area">--}}
        {{--<div class="container">--}}
            {{--<h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Welcome To Academics</h1>--}}
            {{--<p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been theindustry's standard dummy text ever since the 1500s, when an unknown printer took.</p>--}}
            {{--<div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">--}}
                {{--<img src="/user/img/about/1.jpg" alt="about" class="img-responsive" />--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- About 1 Area End Here -->--}}
    {{--<!-- Courses 1 Area Start Here -->--}}
    {{--<!-- Courses 1 Area End Here -->--}}
    {{--<!-- Video Area Start Here -->--}}
    {{--<div class="video-area overlay-video bg-common-style" style="background-image: url('/user/img/banner/1.jpg');">--}}
        {{--<div class="container">--}}
            {{--<div class="video-content">--}}
                {{--<h2 class="video-title">Watch Campus Life Video Tour</h2>--}}
                {{--<p class="video-sub-title">Vmply dummy text of the printing and typesetting industryorem--}}
                    {{--<br>Ipsum industry's standard dum an unknowramble.</p>--}}
                {{--<a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- Video Area End Here -->
    <!-- Lecturers Area Start Here -->
    <div class="lecturers-area">
        <div class="container">
            <h2 class="title-default-left">Our Skilled Alumni Members</h2>
        </div>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                @foreach($members as $member)
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" src="/uploads/{{$member->image}}" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">{{$member->name}}</a></h3>
                            {{--<span class="item-designation">Senior Finance Lecturer</span>--}}
                            {{--<ul class="lecturers-social">--}}
                                {{--<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Lecturers Area End Here -->
    <!-- News and Event Area Start Here -->
    <div class="news-event-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                    <h2 class="title-default-left">Latest News</h2>
                    <ul class="news-wrapper">
                        @foreach($news as $s_news)
                        <li>
                            <div class="news-img-holder">
                                <a href="{{route('news.single', $s_news)}}"><img src="/uploads/{{$s_news->image}}" class="img-responsivee" width="150px" style="height: 101px !important;" alt="news"></a>
                            </div>
                            <div class="news-content-holder">
                                <h3><a href="{{route('news.single', $s_news)}}">{{$s_news->title}}</a></h3>
                                <div class="post-date">{{\Carbon\Carbon::parse($s_news->created_at)->format('F d, Y')}}</div>
                                <p>{!! Str::words($s_news->content, 10,'....') !!}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                    <h2 class="title-default-left">Upcoming Events</h2>
                    <ul class="event-wrapper">
                        @foreach($events as $event)
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <div class="event-calender-wrapper">
                                <div class="event-calender-holder">
                                    <h3>{{\Carbon\Carbon::parse($event->date)->format('d')}}</h3>
                                    <p>{{\Carbon\Carbon::parse($event->date)->format('F')}}</p>
                                    <span>{{\Carbon\Carbon::parse($event->date)->format('Y')}}</span>
                                </div>
                            </div>
                            <div class="event-content-holder">
                                <h3><a href="{{route('event.single', $event)}}">{{$event->title}}</a></h3>
                                <p>{!! Str::words($event->content, 20, '....') !!}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- News and Event Area End Here -->
    <!-- Counter Area Start Here -->
    <!-- Counter Area End Here -->
    <!-- Students Say Area Start Here -->
    <!-- Students Say Area End Here -->
    <!-- Students Join 1 Area Start Here -->

    <!-- Students Join 1 Area End Here -->
    <!-- Brand Area Start Here -->
    <div class="brand-area">
        <div class="container">
            <h2 class="title-default-left">Our Partners</h2>
        </div>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
                @foreach($partners as $partner)
                <div class="brand-area-box">
                    <a href="#"><img src="/uploads/{{$partner->image}}" alt="brand"></a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->
    @endsection