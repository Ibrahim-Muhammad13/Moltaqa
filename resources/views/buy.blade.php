@extends('layouts.app_index')
    @section('content')
        
    
      <div class="title">
        <h1 class="title"> Buy in the right place</h1>
      </div>
      <section class="places">
        <div class="container">
          <div class="row ">
            @foreach ($locations as $location)
            <div class="col-xl-4 col-lg-6 col-md-12">
              <a href="{{route('location_properties',$location->id)}}">
                
                <div class="card ">
              
                  <img src="{{$location->location_img}}" class="card-img-top" alt="...">
                  <div Class="overlay">
                    <div class="text">
                      <h1>{{$location->Properties_count}}</h1>
                      <h3>Real Estate</h3>
                      <hr>
                      <h2>{{$location->name}}</h2>
                    </div>
                  </div>
                  
                </div>
              </a>
            </div>
            @endforeach
    
    
    
    
    
    
    
           
    
    
    
    
    
    
    
          </div>
        </div>
    
      </section>
    
      @endsection