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
    <div class="about1-area">
        <div class="container">
            <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Welcome To Academics</h1>
            <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Tmply dummy text of the printing and typesetting industry. Lorem Ipsum has been theindustry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
            <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                <img src="/user/img/about/1.jpg" alt="about" class="img-responsive" />
            </div>
        </div>
    </div>
    <!-- About 1 Area End Here -->
    <!-- Courses 1 Area Start Here -->
    <div class="courses1-area">
        <div class="container">
            <h2 class="title-default-left">Featured Courses</h2>
        </div>
        <div id="shadow-carousel" class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="/user/img/course/1.jpg" alt="courses">
                            <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                            <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>40
                                    <br><span> Classes</span></li>
                                <li>10 am - 11 am
                                    <br><span> Classes</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="/user/img/course/2.jpg" alt="courses">
                            <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">GMAT</a></h3>
                            <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                            <ul class="courses-info">
                                <li>3 Months
                                    <br><span> Course</span></li>
                                <li>30
                                    <br><span> Classes</span></li>
                                <li>10 am - 11 am
                                    <br><span> Classes</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="/user/img/course/3.jpg" alt="courses">
                            <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">IELTS</a></h3>
                            <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                            <ul class="courses-info">
                                <li>2 Months
                                    <br><span> Course</span></li>
                                <li>24
                                    <br><span> Classes</span></li>
                                <li>10 am - 11 am
                                    <br><span> Classes</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="/user/img/course/4.jpg" alt="courses">
                            <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Regular MBA</a></h3>
                            <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>50
                                    <br><span> Classes</span></li>
                                <li>10 am - 11 am
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="/user/img/course/5.jpg" alt="courses">
                            <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Basic Philosopphy</a></h3>
                            <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>40
                                    <br><span> Classes</span></li>
                                <li>10 am - 11 am
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="/user/img/course/6.jpg" alt="courses">
                            <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">GMAT</a></h3>
                            <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                            <ul class="courses-info">
                                <li>3 Months
                                    <br><span> Course</span></li>
                                <li>30
                                    <br><span> Classes</span></li>
                                <li>10 am - 11 am
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="/user/img/course/7.jpg" alt="courses">
                            <a href="single-courses1.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">Regular MBA</a></h3>
                            <p class="item-content">Rmply dummy text printing setting industry it’s free demo.</p>
                            <ul class="courses-info">
                                <li>1 Year
                                    <br><span> Course</span></li>
                                <li>50
                                    <br><span> Classes</span></li>
                                <li>10 am - 11 am
                                    <br><span> Time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses 1 Area End Here -->
    <!-- Video Area Start Here -->
    <div class="video-area overlay-video bg-common-style" style="background-image: url('/user/img/banner/1.jpg');">
        <div class="container">
            <div class="video-content">
                <h2 class="video-title">Watch Campus Life Video Tour</h2>
                <p class="video-sub-title">Vmply dummy text of the printing and typesetting industryorem
                    <br>Ipsum industry's standard dum an unknowramble.</p>
                <a class="play-btn popup-youtube wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- Video Area End Here -->
    <!-- Lecturers Area Start Here -->
    <div class="lecturers-area">
        <div class="container">
            <h2 class="title-default-left">Our Skilled Lecturers</h2>
        </div>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" src="/user/img/team/1.jpg" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">Senior Finance Lecturer</span>
                            <ul class="lecturers-social">
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" src="/user/img/team/2.jpg" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">Mike Hussy</a></h3>
                            <span class="item-designation">Senior Finance Lecturer</span>
                            <ul class="lecturers-social">
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" src="/user/img/team/3.jpg" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">Daziy Millar</a></h3>
                            <span class="item-designation">Senior Finance Lecturer</span>
                            <ul class="lecturers-social">
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" src="/user/img/team/4.jpg" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">Kazi Fahim</a></h3>
                            <span class="item-designation">Senior Finance Lecturer</span>
                            <ul class="lecturers-social">
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" src="/user/img/team/1.jpg" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">Senior Finance Lecturer</span>
                            <ul class="lecturers-social">
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive" src="/user/img/team/2.jpg" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#">Mike Hussy</a></h3>
                            <span class="item-designation">Senior Finance Lecturer</span>
                            <ul class="lecturers-social">
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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
    <div class="counter-area bg-primary-deep" style="background-image: url('/user/img/banner/4.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                    <h2 class="about-counter title-bar-counter" data-num="80">80</h2>
                    <p>PROFESSIONAL TEACHER</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                    <h2 class="about-counter title-bar-counter" data-num="20">20</h2>
                    <p>NEWS COURSES EVERY YEARS</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                    <h2 class="about-counter title-bar-counter" data-num="56">56</h2>
                    <p>NEWS COURSES EVERY YEARS</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                    <h2 class="about-counter title-bar-counter" data-num="77">77</h2>
                    <p>REGISTERED STUDENTS</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End Here -->
    <!-- Students Say Area Start Here -->
    <div class="students-say-area">
        <h2 class="title-default-center">What Our Students Say</h2>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="/user/img/students/1.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">UI Designer</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="/user/img/students/2.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                            <span class="item-designation">Manager</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="/user/img/students/1.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">UI Designer</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="/user/img/students/2.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                            <span class="item-designation">Manager</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="/user/img/students/1.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                            <span class="item-designation">UI Designer</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="single-item-wrapper">
                        <div class="profile-img-wrapper">
                            <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="/user/img/students/2.jpg" alt="Testimonial"></a>
                        </div>
                        <div class="tlp-tm-content-wrapper">
                            <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                            <span class="item-designation">Manager</span>
                            <ul class="rating-wrapper">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Students Say Area End Here -->
    <!-- Students Join 1 Area Start Here -->
    <div class="students-join1-area">
        <div class="container">
            <div class="students-join1-wrapper">
                <div class="students-join1-left">
                    <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                        <ul class="ri-grid-list">
                            <li>
                                <a href="#"><img src="/user/img/students/student1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student8.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student8.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student8.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="img/students/student1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="/user/img/students/student8.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="students-join1-right">
                    <div>
                        <h2>Join<span> 29,12,093</span> Students.</h2>
                        <a href="#" class="join-now-btn">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Students Join 1 Area End Here -->
    <!-- Brand Area Start Here -->
    <div class="brand-area">
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/1.jpg" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/2.jpg" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/3.jpg" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/4.jpg" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/1.jpg" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/2.jpg" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/3.jpg" alt="brand"></a>
                </div>
                <div class="brand-area-box">
                    <a href="#"><img src="/user/img/brand/4.jpg" alt="brand"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End Here -->
    @endsection