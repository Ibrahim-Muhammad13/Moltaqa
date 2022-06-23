@extends('layouts.app_index')
@section('content')
    

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> properties </h1>

    <div class="box-container ">
        @foreach($properties as $property)
        <div class="box">
            <div class="image-container">
                <img src="{{asset("$property->image")}}" alt="">
                <div class="info">
                    {{-- <h3>3 days ago</h3> --}}
                    <p>{{$property->status}}</p>
                </div>
                {{-- <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div> --}}
            </div>
            <div class="content">
                <div class="price">
                    <h3>${{$property->price}}</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>{{$property->title}}</h3>
                    <p>{{$property->adress}}</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> {{$property->location->name}} </h3>
                    <h3> <i class="fas fa-bed"></i> {{$property->rooms}} </h3>
                    <h3> <i class="fas fa-bath"></i> {{$property->bath}} </h3>
                </div>
                <div class="buttons">
                    <a href="#"class="btn btn-outline-success rounded-pill  px-4">request info</a>
                    <a href="#" class="btn btn-outline-success rounded-pill  px-4">view details</a>
                </div>
            </div>
        </div>

        @endforeach
        
        
        
       

    </div>
    
</section>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/signLogin.js')}}"></script>
@endsection