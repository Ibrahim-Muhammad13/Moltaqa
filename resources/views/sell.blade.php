@extends('layouts.app_index');
@section('content')
    

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
          <input id="Fname" type="text" name="firstname" placeholder="First Name" />
          <input id="Lname" type="text" name="lastname" placeholder="Last Name"  />
          <input id="email" type="text" name="email" placeholder="Email" />
          <input id="phone"type="text" name="phone" placeholder="Mobile Phone" />
          <input type="button" name="next" class="next action-button chervon-right rounded-pill px-4" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Property information</h2>
            <h3 class="fs-subtitle">This is step 2 out of 3</h3>
            
            <select class="form-select mt-1 mb-2 " aria-label="Property Type" name="type">
                <option selected>Property Type</option>
                <option value="1">villa</option>
                <option value="2">split-level house</option>
                <option value="3">Duplex </option>
                <option value="3">apartment</option>
              </select>
              <select class="form-select mt-1 mb-2 " aria-label="Bedrooms" name="bath">
                <option selected>Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="7">9</option>
                <option value="8">10+</option>
              </select>
              <select class="form-select mt-1 mb-2 " aria-label="rooms">
                <option selected>Bathrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="7">9</option>
                <option value="8">10+</option>
              </select>
              <p class="med">Upload property Media:</p>
              <input type="file" id="myFile" name="image">
              <input type="number" name="Price" placeholder="Price" name="price" />
            <select class="form-select mt-1 mb-2 " aria-label="city" name="location_id">
                <option selected>city</option>
                <option value="2">Cairo</option>
                <option value="1">Giza</option>
                <option value="3">luxor</option>
                <option value="3">Alexandria</option>
                <option value="5">Hurghada</option>
                <option value="6">Port Said</option>
                <option value="7">Sharm El-Sheikh</option>
                <option value="8">Other</option>
              </select>
              <input class="d-none" type="text" name="otherOption" placeholder="if you select other,Enter City Name" />
              <textarea name="adress" placeholder="Address"></textarea>
           

           

             
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