@extends('layouts.app_index')
@section('content')
    
   

        <section id="slider">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="content text-center position-relative ">
                    <img src="imgs/slideshow-2.jpg" class="d-block w-100" alt="...">
                    <h3 class="text text-center">Discover Your New Home </h3>
                  </div>
        
                </div>
        
                <div class="carousel-item">
                  <div class="content text-center position-relative">
                    <img src="imgs/slideshow-1.jpg" class="d-block w-100" alt="...">
                    <h3 class="text">Discover Your New Home </h3>
                  </div>
                </div>
        
                <div class="carousel-item">
                  <div class="content text-center position-relative ">
                    <img src="imgs/slideshow-3.jpg" class="d-block w-100" alt="...">
                    <h3 class="text">Discover Your New Home </h3>
                  </div>
                </div>
              </div>
        
              <div class="leftside ">
        
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                  data-bs-slide="prev">
                  <div class="BtnContent">
                    <span class="carousel-control-prev-icon " aria-hidden="true">
                      <i class="fas fa-chevron-left position-relative "></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                    <div class="layer "></div>
                  </div>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                  data-bs-slide="next">
                  <div class="BtnContent">
                    <span class="carousel-control-next-icon " aria-hidden="true">
                      <i class="fas fa-chevron-right position-relative "></i></span>
                    <span class="visually-hidden">Next</span>
                    <div class="layer"></div>
                  </div>
                </button>
              </div>
        
            </div>
          </section>
          <section id="sec2"><div class="container mt-5 ">
            <div class="row d-flex align-items-center g-5 ">

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="buy-img">
                        <img src="imgs/sec1.jpg" class="w-100" >
                   </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="buy-content text-center  ">
                        <h2>Buy a home</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, optio unde impedit natus soluta error placeat culpa labore laudantium ex.
                        </p>
                        <a class="btn btn-outline-success rounded-pill px-4" href="Buy.html">See More</a>
                      </div>
                </div>
                


                </div>
           </div></section>
           <section id="sec3"><div class="container mt-5">
            <div class="row d-flex align-items-center g-5 ">
                <div class=" col-lg-6 col-md-6 col-sm-6">
                    <div class="sell-content text-center  ">
                
                        <h2>Sell a home</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          At illum excepturi ipsa impedit accusamus sunt dicta explicabo rem fuga quidem?</p>
                        <a class="btn btn-outline-success rounded-pill px-4" href="sell.html">See More</a>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="sell-img">
                        <img src="imgs/sec3.jpeg" class="w-100" >
                   </div>
                </div>
                
                


                </div>
           </div></section>
           <section id="sec4">
     <div class="container mt-5"> <h3 class=" alert-danger h-75 ">Most Viewed</h3></div>
           
        
          </section>
          <section id="sec5">
            <div class="container text-center">
                <div class="section-title text-center">
                    <h2>Client Reviews</h2>
                    <p class="w-50 m-auto">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae nesciunt obcaecati porro aut doloribus !
                    </p>
                </div>
        
        
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators position-static d-flex align-items-center">
        
                        <div class="indicator-item">
                            <img type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class=" rounded-circle" aria-current="true" aria-label="Slide 1" src="imgs/client-1.png"
                                alt="" srcset="">
                            <div class="client-info">
                                <h3>Hugh Tace</h3>
                                <span>From Capital</span>
                            </div>
                        </div>
                        <div class="indicator-item">
                            <img type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                class="rounded-circle" aria-current="true" aria-label="Slide 2" src="imgs/client-2.png"
                                alt="" srcset="">
                            <div class="client-info">
                                <h3>Hugh Tace</h3>
                                <span>From Capital</span>
                            </div>
                        </div>
                        <div class="indicator-item">
                            <img type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                class="rounded-circle active" aria-current="true" aria-label="Slide 3"
                                src="imgs/client-3.png" alt="" srcset="">
                            <div class="client-info">
                                <h3>Hugh Tace</h3>
                                <span>From Capital</span>
                            </div>
                        </div>
                        <div class="indicator-item">
                            <img type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                class="rounded-circle" aria-current="true" aria-label="Slide 4" src="imgs/client-4.png"
                                alt="" srcset="">
                            <div class="client-info">
                                <h3>Hugh Tace</h3>
                                <span>From Capital</span>
                            </div>
                        </div>
                        <div class="indicator-item">
                            <img type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                class="rounded-circle" aria-current="true" aria-label="Slide 5" src="imgs/client-5.png"
                                alt="" srcset="">
                            <div class="client-info">
                                <h3>Hugh Tace</h3>
                                <span>From Capital</span>
                            </div>
                        </div>
        
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="single-box">
                                <p><i class="fas fa-quote-left"></i> Aenean sit amet est orci. Aenean at nisi eget nulla
                                    lobortis commodo. Nam eget lorem in ex aliquam dapibus. <i
                                        class="fas fa-quote-right"></i></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="single-box">
                                <p><i class="fas fa-quote-left"></i> Aenean sit amet est orci. Aenean at nisi eget nulla
                                    lobortis commodo. Nam eget lorem in ex aliquam dapibus. <i
                                        class="fas fa-quote-right"></i></p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="single-box">
                                <p><i class="fas fa-quote-left"></i> Aenean sit amet est orci. Aenean at nisi eget nulla
                                    lobortis commodo. Nam eget lorem in ex aliquam dapibus. <i
                                        class="fas fa-quote-right"></i></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="single-box">
                                <p><i class="fas fa-quote-left"></i> Aenean sit amet est orci. Aenean at nisi eget nulla
                                    lobortis commodo. Nam eget lorem in ex aliquam dapibus. <i
                                        class="fas fa-quote-right"></i></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="single-box">
                                <p><i class="fas fa-quote-left"></i> Aenean sit amet est orci. Aenean at nisi eget nulla
                                    lobortis commodo. Nam eget lorem in ex aliquam dapibus. <i
                                        class="fas fa-quote-right"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                
             
         
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/signLogin.js')}}"></script>
@endsection