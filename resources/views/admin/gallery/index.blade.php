@extends('layouts.master')

@section('title', 'All Gallery')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title float-left">All Gallery</h3>
                <a href="{{route('gallery.create')}}" class="btn btn-primary float-right">Add New</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Gallery Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($galleries as $gallery)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$gallery->name}}</td>
                        <td>
                            <a href="{{route('gallery.edit',$gallery)}}" class="btn btn-primary btn-sm float-left">Edit</a>
                            <form onsubmit="return confirm('Are You Sure?')" action="{{route('gallery.destroy', $gallery)}}" class="float-left" style="margin-left:4px" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection