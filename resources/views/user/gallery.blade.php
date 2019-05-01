@extends('user.master')

@section('title', 'Photo Gallery')

@section('content')
    <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Gallery</h1>
                <ul>
                    <li><a href="{{route('home')}}">Home</a> -</li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Gallery Area 2 Start Here -->
    <div class="gallery-area2">
        <div class="container" id="inner-isotope">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="isotop-classes-tab isotop-btn">
                        <a href="#" data-filter="*">All</a>
                        @foreach($galleries as $gallery)
                        <a href="#" data-filter=".{{$gallery->slug}}"> {{$gallery->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row featuredContainer gallery-wrapper">
                @foreach($images as $image)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 {{$image->galleries->pluck('slug')->implode(' ')}}">
                    <div class="gallery-box">
                        <img src="/uploads/{{$image->image}}" class="img-responsive" alt="gallery">
                        <div class="gallery-content">
                            <a href="/uploads/{{$image->image}}" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
    @endsection

@section('head')


    @endsection

@section('footer')
    <script src="/admin/js/isotope.pkgd.min.js" type="text/javascript"></script>

    @endsection