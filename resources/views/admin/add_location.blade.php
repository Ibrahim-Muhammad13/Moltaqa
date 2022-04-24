@extends('layouts.admin.index')


@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <form action="{{route('saveLocation')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">location name</label>
                <input type="text" class="form-control"  name="name">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">image</label>
                <input type="file" class="form-control" name="location_img">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
@endsection