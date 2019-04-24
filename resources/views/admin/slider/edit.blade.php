@extends('layouts.master')

@section('title', 'Edit slider item')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title float-left">Edit slider item</h3>
            <a href="{{route('slider.index')}}" class="btn btn-primary float-right">Back to all slider items</a>
            <div class="clearfix"></div>
            @include('admin.messages')
            <form action="{{route('slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
                <div class="tile-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Slider Image (1920X550)</label>
                                <input class="form-control {{$errors->has('image')?'is-invalid':''}}" type="file" name="image"  onchange="readURL(this);">
                                {!!$errors->first('image', '<div class="text-danger">:message</div>')!!}
                                <img id="blah" style="margin-top:20px;" src="{{asset('uploads/'.$slider->image)}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input class="form-control {{$errors->has('title')?'is-invalid':''}}" type="text" value="{{$slider->title}}" name="title" placeholder="Enter slider title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Link</label>
                                <input class="form-control {{$errors->has('link')?'is-invalid':''}}" type="text" value="{{$slider->link}}" name="link" placeholder="Enter slider link">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Position</label>
                                <input class="form-control {{$errors->has('position')?'is-invalid':''}}" type="number" value="{{$slider->position}}" name="position" placeholder="Enter slider position">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Content</label>
                                <input class="form-control {{$errors->has('content')?'is-invalid':''}}" type="text" value="{{$slider->content}}" name="content" placeholder="Enter slider content">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection