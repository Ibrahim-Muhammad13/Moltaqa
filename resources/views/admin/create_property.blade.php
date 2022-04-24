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
        <form action="{{route('saveProperty')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">property title</label>
                <input type="text" class="form-control"  name="title">
                
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" name="location_id" id="exampleFormControlSelect1">
                            <option selected>Open this select menu</option>
                        @foreach($locations as $location)
                        <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                      
                        </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">adress</label>
                <input type="text" class="form-control" name="adress">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">status</label>
                <input type="text" class="form-control" name="status">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">type</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">rooms</label>
                <input type="number" class="form-control" name="rooms">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">bath</label>
                <input type="number" class="form-control" name="bath">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
@endsection