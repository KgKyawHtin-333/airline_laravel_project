<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('frontend_asset/img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Fly with us</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('frontend_asset/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('frontend_asset/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('frontend_asset/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('frontend_asset/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('frontend_asset/css/jquery-ui.css')}}">				
			<link rel="stylesheet" href="{{asset('frontend_asset/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('frontend_asset/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('frontend_asset/css/owl.carousel.css')}}">				
			<link rel="stylesheet" href="{{asset('frontend_asset/css/main.css')}}">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  				<ul>
			  					<li><a href="#">Visit Us</a></li>
			  					<li><a href="#">Buy Tickets</a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>			  					
					</div>
				</div>
				<div class="container main-menu ">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="{{asset('frontend_asset/img/logo.png')}}" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">

				          <li><a href="#">Home</a></li>
				          <li><a href="#">About</a></li>					          					          		          
				          <li><a href="#contact">Contact</a></li>

  				          @auth

                         <li class="nav-item dropdown">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                          </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                          </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                         </div>
                         </li>

                         @else

                          <li class="nav-item">
                            <a class="nav-link" href="{{route('login_page')}}">Log in</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('signup_page')}}">Sign Up</a>
                          </li>

                          @endauth                

				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			@yield('content')
			<!-- start footer Area -->		

			<footer class="footer-area section-gap">
				<div class="container" id="contact">



					<div class="row">
               <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h6>Partner With Us</h6>
                        <img src="http://www.quietplace.pyaynyithu.me/design/img/bg-img/visa2.png" width="45" height="45">
                        <img src="http://www.quietplace.pyaynyithu.me/design/img/bg-img/paypal.png" width="25" height="25">
                        <img src="http://www.quietplace.pyaynyithu.me/design/img/bg-img/master.png" width="50" height="50">
                        <img src="http://www.quietplace.pyaynyithu.me/design/img/bg-img/ali2.png" width="35" height="35">
                    </div>
                </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">Feature</a></li>
											<li><a href="#">Services</a></li>
											<li><a href="#">Portfolio</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="#">Team</a></li>
											<li><a href="#">Pricing</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>										
								</div>							
							</div>
						</div>							
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>
									For business professionals caught between high OEM price and mediocre print and graphic output.									
								</p>								
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
										</div>									
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6" id="contact">
							<div class="single-footer-widget mail-chimp">

								<h6 class="mb-20">InstaFeed</h6>
								<!-- <ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul> -->

								<h6 class="mb-20">have any question?</h6>
								<ul class="footer-nav">
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 39,Pwal Sar Street,Kyimyindaing,Yangon</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +95 9421099378</a></li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> flight with us@gmail.com</a></li>
                        </ul>

							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="{{asset('frontend_asset/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="{{asset('frontend_asset/js/popper.min.js')}}"></script>
			<script src="{{asset('frontend_asset/js/vendor/bootstrap.min.js')}}"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="{{asset('frontend_asset/js/jquery-ui.js')}}"></script>					
  			<script src="{{asset('frontend_asset/js/easing.min.js')}}"></script>			
			<script src="{{asset('frontend_asset/js/hoverIntent.js')}}"></script>
			<script src="{{asset('frontend_asset/js/superfish.min.js')}}"></script>	
			<script src="{{asset('frontend_asset/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('frontend_asset/js/jquery.magnific-popup.min.js')}}"></script>						
			<script src="{{asset('frontend_asset/js/jquery.nice-select.min.js')}}"></script>					
			<script src="{{asset('frontend_asset/js/owl.carousel.min.js')}}"></script>							
			<script src="{{asset('frontend_asset/js/mail-script.js')}}"></script>	
			<script src="{{asset('frontend_asset/js/main.js')}}"></script>
			<script type="text/javascript">
				$(document).ready(function(){

					  $.ajaxSetup({
                      headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                      });
					 
					  $("#paragraph_one").hide();
                      $("#paragraph_two").hide();
                      $("#paragraph_three").hide();
                      $("#paragraph_four").hide();
                      $("#paragraph_five").hide();

					 $(".submit_change").click(function(){
   
                       //input validation
                      if($("#firstname").val() == ''){
                          $("#paragraph_one").text("Please Enter your Name**").show();
                           $("#name").focus();
                           return false;
                      }
                      else if($("#email").val() == ''){
                           $("#paragraph_two").text("Please Enter your Email**").show();
                           $("#email").focus();
                           return false;
                      }
                      else if($("#phone").val() == ''){
                           $("#paragraph_three").text("Please Enter your Phone Number**").show();
                           $("#phone").focus();
                           return false;
                                }
                      else if($("#passport").val() == ''){
                           $("#paragraph_four").text("Please Enter your Passport**").show();
                           $("#passport").focus();
                           return false;
                      }
                      else if($("#date").val() == ''){
                           $("#paragraph_five").text("Please Enter your Date**").show();
                           $("#date").focus();
                           return false;
                      }


                       // alert("ok");
                       var birthdate = $("#birthdate").val();
                       var firstname = $("#firstname").val();
                       var secondname = $("#secondname").val();
                       var email = $("#email").val();
                       var phone = $("#phone").val();
                       var passport = $("#passport").val();



                       var customer={
                         birthdate : birthdate,
                         firstname : firstname,
                         secondname : secondname,
                         email : email,
                         phone : phone,
                         passport : passport
                       }

                       // console.log(customer);

                       var customerlist = localStorage.getItem("customers");
                       var customerArray;
                       if(customerlist==null){
                         customerArray=[];
                       }else{
                         customerArray = JSON.parse(customerlist);
                       }

                       customerArray.push(customer);

                       customerString = JSON.stringify(customerArray);
                       localStorage.setItem("customers" , customerString);

                       })

					})

                  //          $('.checkout').click(function () {    

                  //           alert('ok');
             
			               // var schedule_id=$(this).data('id');
			              

			               // var item={
			               // 	schedule_id:schedule_id
			               // }

			               //  var itemlist=localStorage.getItem("items");

			               //  var ItemArray;
			               //  if(itemlist==null){
			               //  	ItemArray=[];
			               //  }else{
			               //  	ItemArray=JSON.parse(itemlist);
			               //  }
			

			
			               //  ItemArray.push(item);	
			
			               //  var itemstring=JSON.stringify(ItemArray);
			               //  localStorage.setItem("items", itemstring);
			                // showdata();
			                // count();

			                 // let booking = localStorage.getItem('items'); // JSON String
                    //        $.post("{{route('booking.store')}}",{booking:booking},function (response) {
                    //         console.log(response);
                    //         // localStorage.clear();
                    //         // location.href="/";
                          // });
		                          
		                // })

                          

				

                       
            
        
                          
                        

                    
              
             
  </script>
				
</body>
</html>