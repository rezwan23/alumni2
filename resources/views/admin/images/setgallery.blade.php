@extends('layouts.master')

@section('title', 'Set Image To Gallery')

@section('content')

    <div class="row">
        <div class="col-md-6">
            @include('admin.messages')
            <form action="{{route('set.gallery', $image)}}" method="post">
                @csrf
                <img src="/uploads/{{$image->image}}" width="250px" height="auto" alt="">
                <div class="form-group">
                    <label class="control-label">Set Gallery</label>
                    <select id="gallery_id" multiple name="gallery_id[]" id="" class="form-control">
                        @foreach($galleries as $gallery)
                            <option
                                    @foreach($image->galleries as $g)
                                        @if($g->id==$gallery->id)
                                            selected
                                            @break
                                        @endif
                                    @endforeach
                                    value="{{$gallery->id}}">{{$gallery->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Set</button>
            </form>
        </div>
    </div>

@endsection

@section('footer')
    <script src="/admin/js/plugins/select2.min.js"></script>
    <script>
        $('#gallery_id').select2();
    </script>
@endsection