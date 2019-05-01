@extends('user.master')

@section('title', 'Register Member')

@section('content')
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form style="margin-top: 150px;" action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
            @include('admin.messages')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" required class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" required class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Batch</label>
                <input type="text" required class="form-control" name="batch" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Batch">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" required class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Image">
            </div>
            <button type="submit" required class="btn btn-primary">Submit</button>
        </form>
    </div>

    @endsection