@extends('frontendtemplate')

@section('content')
<section >
         <div class="banner-main">
            <img src="{{asset('frontend_asset/images/background.jpg')}}" alt="#"/>
            <div class="container">
               <div class="text-bg">
                  <h1>Flight With<br><strong class="white">Us</strong></h1>
                  <div class="button_section"> <a class="main_bt" href="#">Read More</a>  </div>
                  <div class="container">
                     <form class="main-form">
                        <h3>Find Your Tour</h3>
                        <div class="row">
                          
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                              <a href="#">search</a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>About  our Flight With Us</h2>
                     <span> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="about-box">
                        <p> <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure thereThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</span></p>
                        <div class="palne-img-area">
                           <img src="{{asset('frontend_asset/images/plane-img.png')}}" alt="images">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a href="#">Read More</a>
         </div>
      </div>
      <!-- end about -->
      <!-- traveling -->
      <div id="travel" class="traveling">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Select Offers For Traveling</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="{{asset('frontend_asset/icon/mmnationalairline.png')}}" alt="icon"/></i>
                     <h3>Myanmar national Airline</h3>
                     
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="{{asset('frontend_asset/icon/airkbz.png')}}" alt="icon"/></i>
                     <h3>Air KBZ</h3>
                     
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="{{asset('frontend_asset/icon/goldenmm.png')}}" alt="icon"/></i>
                     <h3>Golden Myanmar</h3>
                     
                  </div>
               </div>
               
               </div>
            </div>
         </div>
      </div>
      <!-- end traveling -->
     
      <!--Tours -->
     
      <!-- end Tours -->
     
      
      <!-- footer -->
      <footer>

         

@endsection
