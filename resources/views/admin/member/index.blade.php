@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('admin.messages')
            <div class="tile">
                <h3 class="tile-title">All Members</h3>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Batch</th>
                        <th>Approve</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$member->name}}</td>
                            <td><img src="/uploads/{{$member->image}}" alt=""></td>
                            <td>{{$member->batch}}</td>
                            <td>
                                @if(!$member->status)
                                    <form action="{{route('member.update', $member)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-warning btn-sm">Approve</button>
                                    </form>
                                @else
                                    <button class="btn btn-primary btn-sm">Approved</button>
                                @endif
                            </td>
                            <td>
                                <form action="{{route('member.destroy', $member)}}" method="post">
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