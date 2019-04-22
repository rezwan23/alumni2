@extends('layouts.master')

@section('title', 'Profile')


@section('content')


    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @include('admin.messages')
            <div class="tile">
                <h3 class="tile-title">Profile</h3>
                <form action="{{route('profile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" name="name" value="{{!empty($user->name)?$user->name:''}}" placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{!empty($user->email)?$user->email:''}}" placeholder="Enter email address">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Photo</label>
                            <input class="form-control" type="file" name="photo">
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