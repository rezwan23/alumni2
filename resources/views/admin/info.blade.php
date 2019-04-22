@extends('layouts.master')

@section('title', 'General Info')

@section('content')

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @include('admin.messages')
            <div class="tile">
                <h3 class="tile-title">General Settings</h3>
                <form action="{{route('info')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" name="title" value="{{!empty($info->title)?$info->title:''}}" placeholder="Enter Site Title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Moto</label>
                            <input class="form-control" type="text" name="moto" value="{{!empty($info->moto)?$info->moto:''}}" placeholder="Enter Moto Here">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{!empty($info->email)?$info->email:''}}" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input class="form-control" type="text" name="phone" value="{{!empty($info->phone)?$info->phone:''}}" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <textarea class="form-control" rows="4" name="address" placeholder="Enter your address">{{!empty($info->address)?$info->address:''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Map</label>
                            <textarea class="form-control" rows="4" name="map" placeholder="Enter your address">{{!empty($info->map)?$info->map:''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Facebook</label>
                            <input class="form-control" type="text" name="fb" value="{{!empty($info->fb)?$info->fb:''}}" placeholder="Enter Fb page linke">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Youtube</label>
                            <input class="form-control" type="text" name="yt" value="{{!empty($info->yt)?$info->yt:''}}" placeholder="Enter Youtube Link">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Linked In</label>
                            <input class="form-control" type="text" name="ln" value="{{!empty($info->ln)?$info->ln:''}}" placeholder="Enter Linked In Profile">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Google Plus</label>
                            <input class="form-control" type="text" name="gp" value="{{!empty($info->gp)?$info->gp:''}}" placeholder="Enter google Plus Id link">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Logo</label>
                            <input class="form-control" type="file" name="logo">
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection