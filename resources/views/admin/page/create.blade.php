@extends('layouts.master')

@section('title', 'Create Page')

@section('footer')

    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script>
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
                <h3 class="tile-title">Create Page</h3>
                <form action="{{route('page.store')}}" method="post">
                    @csrf
                <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Enter Page Title">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Content</label>
                            <textarea id="editor" class="form-control" name="content" rows="4" placeholder="Enter Page Content"></textarea>
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