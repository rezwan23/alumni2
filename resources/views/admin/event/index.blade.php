@extends('layouts.master')

@section('title','All Events')

@section('content')

    <div class="row">
        <div class="col-md-6">
            @include('admin.messages')
            <div class="tile">
                <h3 class="tile-title">All Events</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Acttion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <th>{{$event->title}}</th>
                            <td>
                                {{$event->date}}
                            </td>
                            <td>
                                <a href="{{route('event.edit', $event)}}" class="btn btn-primary btn-sm float-left">Edit</a>
                                <form onsubmit="return confirm('Are you sure?')" style="float:left;margin-left: 4px" action="{{route('event.destroy', $event)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning btn-sm">Delete</button>
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