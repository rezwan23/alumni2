@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title float-left">All Partners</h3>
                <a href="{{route('partner.create')}}" class="float-right btn btn-primary btn-sm">Add New</a>
                <div class="tile-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($partners as $partner)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$partner->name}}</td>
                            <td><img src="/uploads/{{$partner->image}}" alt=""></td>
                            <td>
                                <a href="{{route('partner.edit', $partner)}}" class="btn btn-warning btn-sm float-left">Edit</a>
                                <form action="{{route('partner.destroy', $partner)}}" method="post" class="float-left" style="margin-left: 4px;" onsubmit="return confirm('Are You Sure?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection