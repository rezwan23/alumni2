@extends('layouts.master')

@section('title', 'Create Event')

@section('footer')

    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script src="/admin/js/plugins/bootstrap-datepicker.min.js"></script>
    <script>

        $('#demoDate').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
        });
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('admin.messages')
            <div class="tile">
                <h3 class="tile-title">Edit Event</h3>
                <form action="{{route('event.update', $event)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" value="{{$event->title}}" placeholder="Enter Event Title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <input class="form-control" autocomplete="off" type="text" id="demoDate" name="date" value="{{$event->date}}" placeholder="Enter Event Date">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Content</label>
                            <textarea id="editor" class="form-control" name="content" rows="4" placeholder="Enter Event Content">{{$event->content}}</textarea>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection