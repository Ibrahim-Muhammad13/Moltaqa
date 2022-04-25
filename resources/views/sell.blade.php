@extends('layouts.app_index');
@section('content')
    

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-5">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif

{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<div class="container justify-content-center">

    <!-- multistep form -->
 <form id="msform" action="{{route('seller')}}" method="post" enctype="multipart/form-data">
    @csrf
   
        <!-- progressbar -->
    <div class="row">
          <ul id="progressbar">
            <li class="active">Personal information</li>
            <li>Property information</li>
            <li>Complete!</li>
        </ul>
    </div>
        <!-- fieldsets -->
      <fieldset>
          <h2 class="fs-title">Personal information</h2>
          <h3 class="fs-subtitle">This is step 1 out of 3</h3>
          <input id="Fname" type="text" name="firstname" class="form-control" placeholder="First Name" />
          @error('firstname')
          <small  class="form-text alert alert-danger">{{ $message }}</small>
           @enderror
           
          <input id="Lname" type="text" name="lastname" class="form-control" placeholder="Last Name"  />
          @error('lastname')
          <small  class="form-text alert alert-danger">{{ $message }}</small>
           @enderror
          <input id="email" type="text" name="email" class="form-control" placeholder="Email" />
          @error('email')
          <small  class="form-text alert alert-danger">{{ $message }}</small>
           @enderror
          <input id="phone"type="text" name="phone" class="form-control" placeholder="Mobile Phone" />
          @error('phone')
          <small  class="form-text alert alert-danger">{{ $message }}</small>
           @enderror
          <input type="button" name="next" class="next action-button chervon-right rounded-pill px-4" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Property information</h2>
            <h3 class="fs-subtitle">This is step 2 out of 3</h3>
            
            
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="title">
            </div>
            <select class="form-select mt-1 mb-2 " aria-label="Property Type" name="location_id">
              <option selected>city</option>
              @foreach($locations as $location)
              <option value="{{$location->id}}">{{$location->name}}</option>
              @endforeach
            </select>
              <div class="form-group">
                <input type="text" class="form-control" name="adress" placeholder="address">
            </div>
            <div class="form-group">
            
                <input type="text" class="form-control" name="status" placeholder="status">
            </div>
            <div class="form-group">
             
                <input type="number" class="form-control" name="price" placeholder="price">
            </div>
            <select class="form-select mt-1 mb-2 " aria-label="Property Type" name="type">
              <option selected>Property Type</option>
              <option value="villa">villa</option>
              <option value="house">house</option>
              <option value="office">office </option>
              <option value="apartment">apartment</option>
            </select>
            <div class="form-group">
              <input type="file" class="form-control" name="image">
          </div>
            <div class="form-group">
                
                <input type="number" class="form-control" name="rooms" placeholder="rooms">
            </div>
            <div class="form-group">
                
                <input type="number" class="form-control" name="bath" placeholder="bath">
            </div>
              
    
           

           

             
            <input type="button" name="previous" class="previous action-button  rounded-pill px-4" value="Previous" />
            <input type="button" name="next" class="next action-button  rounded-pill px-4" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Complete</h2>
            <h3 class="fs-subtitle">This is step 3 out of 3</h3>
            <h2 class="med"> Thank you, we will contact you soon</h2>
            <input type="button" name="previous" class="previous action-button rounded-pill px-4" value="Previous" />
          
            <input type="submit" name="submit" class="action-button rounded-pill px-4" value="submit" />
            
        </fieldset>
      
       
    </form>
    </div>
    <!-- jQuery -->
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="{{asset('js/sell.js')}}"></script>

    @endsection