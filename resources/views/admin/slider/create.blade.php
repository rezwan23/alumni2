@extends('layouts.master')

@section('title', 'New slider item')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            @include('admin.messages')
            <h3 class="tile-title float-left">New slider item</h3>
            <a href="{{route('slider.index')}}" class="btn btn-primary float-right">Back to all slider items</a>
            <div class="clearfix"></div>
            <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Slider Image (1343X546)</label>
                                <input class="form-control" type="file" name="image"  onchange="readURL(this);">
                                {!!$errors->first('image', '<div class="text-danger">:message</div>')!!}
                                <img id="blah" style="margin-top:20px;" src="https://via.placeholder.com/1350x472" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input class="form-control {{$errors->has('title')?'in-invalid':''}}" type="text" name="title" placeholder="Enter slider title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Link</label>
                                <input class="form-control {{$errors->has('link')?'in-invalid':''}}" type="text" name="link" placeholder="Enter slider link">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Position</label>
                                <input class="form-control {{$errors->has('position')?'in-invalid':''}}" type="number" name="position" placeholder="Enter slider position">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Content</label>
                                <input class="form-control {{$errors->has('content')?'in-invalid':''}}" type="text" name="content" placeholder="Enter slider content">
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