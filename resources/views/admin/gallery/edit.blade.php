@extends('layouts.master')

@section('title', 'Edit Gallery')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Edit Gallery</h3>
            <form action="{{route('gallery.update', $gallery)}}" method="post">
                @csrf
                @method('PUT')
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control" value="{{$gallery->name}}" type="text" name="name" placeholder="Enter Gallery Name">
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection