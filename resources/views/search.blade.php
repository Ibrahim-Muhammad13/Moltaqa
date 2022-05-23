@extends('layouts.app_index');
@section('content')
              
         
  <section class="search" id="search">
  
      <form action="{{route('result')}}" method="post">
        @csrf
          <div class="inputBox position-relative ">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" name="location_id" id="exampleFormControlSelect1">
                            <option hidden selected disabled>city</option>
                        @foreach($locations as $location)
                        <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                      
                        </select>
            </div>
              <select name="minprice" id="" class="form-control bg-transparent text-dark shadow-none">
                  <option value="" disabled hidden selected>minimum price</option>
                  <option value="5000">$5000</option>
                  <option value="10000">$10000</option>
                  <option value="15000">$15000</option>
                  <option value="20000">$20000</option>
                  <option value="25000">$25000</option>
              </select>
              <select name="maxprice" id="" class="form-control bg-transparent text-dark shadow-none">
                  <option value="" disabled hidden selected>maximum price</option>
                  <option value="30000">$30000</option>
                  <option value="35000">$35000</option>
                  <option value="40000">$40000</option>
                  <option value="45000">$45000</option>
                  <option value="50000">$50000</option>
              </select>
            
              <select name="type" id="" class="form-control bg-transparent text-dark shadow-none">
                  <option value="" disabled hidden selected>property type</option>
                  <option value="flat">flat</option>
                  <option value="house">house</option>
                  <option value="shop">shop</option>
                  <option value="warehouse">warehouse</option>
                  <option value="land">land</option>
              </select>
          
              <select name="rooms" id="" class="form-control bg-transparent text-dark shadow-none">
                  <option value="" disabled hidden selected>Bedrooms</option>
                  <option value="1">1 bedroom</option>
                  <option value="2">2 bedroom</option>
                  <option value="3">3 bedroom</option>
                  <option value="4">4 bedroom</option>
                  <option value="5">5 bedroom</option>
              </select>
              <select name="bath" id="" class="form-control bg-transparent text-dark shadow-none">
                  <option value="" disabled hidden selected>Bathrooms</option>
                  <option value="1">1 bathroom</option>
                  <option value="2">2 bathroom</option>
                  <option value="3">3 bedroom</option>
                  <option value="4">4 bathroom</option>
                  <option value="5">5 bathroom</option>
              </select>
          </div>
  
          <input type="submit" value="Search property" class="btn btn-outline-success rounded-pill  px-4 ">
  
      </form>
      
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
                        <h3>{{$property->price}}</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>{{$property->title}}</h3>
                        <p>jogeshwari west, mumbai, india - 400104</p>
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
    

  
  </section>
  
  @endsection
  
  
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/signLogin.js')}}"></script>
      </body>
  </html>