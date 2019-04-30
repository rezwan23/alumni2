@extends('layouts.master')

@section('title', 'All Image')

@section('content')
    <div class="tile">
        <h3 class="float-left tile-title">All Image</h3>
        <a href="{{route('image.create')}}" class="btn btn-primary btn-sm">Add New</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Add to Gallery</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images as $image)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><img src="/uploads/{{$image->image}}" alt="" width="400px" heigh="400px"></td>
                <td>
                    <a href="{{route('gallery.add', $image)}}" class="btn btn-primary btn-sm">Add To Gallery</a>
                </td>
                <td>
                    <form action="{{route('image.destroy', $image)}}" method="post">
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
@endsection