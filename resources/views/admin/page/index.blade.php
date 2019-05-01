@extends('layouts.master')

@section('title','All Pages')

@section('content')

    <div class="row">
        <div class="col-md-6">
            @include('admin.messages')
            <div class="tile">
                <h3 class="tile-title">All Pages</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Acttion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <th>{{$page->title}}</th>
                            <td>
                                {{$page->slug}}
                            </td>
                            <td>
                                <a href="{{route('page.edit', $page)}}" class="btn btn-primary btn-sm float-left">Edit</a>
                                {{--<form onsubmit="return confirm('Are you sure?')" style="float:left;margin-left: 4px" action="{{route('page.destroy', $page)}}" method="post">--}}
                                    {{--@csrf--}}
                                    {{--@method('DELETE')--}}
                                    {{--<button type="submit" class="btn btn-warning btn-sm">Delete</button>--}}
                                {{--</form>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection