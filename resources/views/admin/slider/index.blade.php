@extends('layouts.master')

@section('title', 'All slider')

@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title float-left">All slider</h3>
            <a href="{{route('slider.create')}}" class="btn btn-primary float-right">New slide item</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Slider title</th>
                    <th>Slider image</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$slider->title}}</td>
                        <td> <img width="400px" height="auto" src="{{asset('uploads/'.$slider->image)}}"></td>
                        <td>{{$slider->position}}</td>
                        <td>
                            <a title="Edit" data-toggle="tooltip" href="{{route('slider.edit', $slider->id)}}" class="btn btn-primary btn-sm float-left" style="margin-right:6px;"> <i class="fa fa-pencil"></i> </a>
                            <form method="post" class="float-left" action="{{ route('slider.destroy', $slider->id) }}" onsubmit="return confirm('Are your sure? you want to delete this slider item?');">
                                {{method_field('DELETE')}}
                                @csrf
                                <button title="Delete" data-toggle="tooltip" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
