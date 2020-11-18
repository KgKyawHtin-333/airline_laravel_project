@extends('frontendtemplate')

@section('content')
      <!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container pt-5">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6 class="text-white">Fly with Us</h6>
							
							<p class="text-white">
								If you are looking at blank cassettes on the web, you may be very confused at the difference in price. 
							</p>
							<a href="#" class="btn btn-outline-info text-uppercase">Get Started</a>
						</div>
						<div class="col-lg-4 col-md-6 banner-right">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">One Way</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Round Trip</a>
							  </li>
							 
							</ul>
							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
								<form class="form-wrap" id="searchFlightForm" action="{{route('flightSearch')}}" method="POST" >
								@csrf	
									<input type="hidden" name="type" value="oneway">
									<select class="form-control" name="Fromcity"  required="">
										<option> From city </option>
										@foreach($cities as $city)
										<option value="{{$city->id}}"> {{$city->name}} </option>
									    @endforeach
									</select>

									<select class="form-control" name="Tocity" class="required">
										<option> To city </option>
										@foreach($cities as $city)
										<option value="{{$city->id}}"> {{$city->name}} </option>
									    @endforeach
									</select>

									<input type="date" class="form-control " name="start" placeholder="Departure " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '"  required="">

									<input type="number" min="1" max="20" class="form-control" name="adults" id="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '"  required="">

                           <input type="number" min="1" max="20" class="form-control" name="child" id="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '"  required="">
                            <div class="form-group">
                              <select class="form-control" name="class" id="class">
                                          <option>Seat Class</option>
                                       @foreach($classes as $class)
                                          <option value="{{$class->id}}" data-id="{{$class->id}}">{{$class->name}}</option>
                                       @endforeach

                              </select>
                            </div>							
									<input type="submit" value="searchFlight"  class="btn btn-outline-info">
							</form>
							  </div>
							   
							  <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
							  <form class="form-wrap" id="roundsearchFlightForm" action="{{route('flightSearch')}}" method="POST" >
								@csrf	
								<input type="hidden" name="type" value="roundtrip">
                                   <select class="form-control" name="Fromcity" required="" >
										<option> From city </option>
										@foreach($cities as $city)
										<option value="{{$city->id}}"> {{$city->name}} </option>
									    @endforeach
									</select>

									<select class="form-control" name="Tocity" required="">
										<option> To city </option>
										@foreach($cities as $city)
										<option value="{{$city->id}}"> {{$city->name}} </option>
									    @endforeach
									</select>

									<input type="date" class="form-control " name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '" required="">
									<input type="date" class="form-control " name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '" required="">
									<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '" required="">
                           			<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '" required="">
									<select class="form-control" name="class_seats" id="class_seats" required="">
												<option>Seat Class</option>
												@foreach($classes as $class)
													<option value="{{$class->id}}">{{$class->name}}</option>
												@endforeach
									</select>						
									<input type="submit" value="searchFlight" class="btn btn-outline-info">	
								</form>							  	
							  </div>
							</div>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start popular-destination Area -->
			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">AirLine Name</h1>
		                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{asset('frontend_asset/img/kbz.png')}}" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">about</a>			
									<h4>Air KBZ</h4>
											
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{asset('frontend_asset/img/goldenmyanmar.jpg')}}" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">about</a>			
									<h4>Golden Myanmar</h4>
											
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-destination relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{asset('frontend_asset/img/mmair.jpg')}}" alt="">
								</div>
								<div class="desc">	
									<a href="#" class="price-btn">about</a>			
									<h4>Myanmar National AirLine</h4>
											
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End popular-destination Area -->

     

@endsection
@section('script')
<script>
	$(document).ready(function(){
		$('#searchFlightForm').on('submit',function(e){
			// let formData=new FormData(this);
			e.preventDefault();
			//alert('hello');
			let adults=$('#adults').val();
			let child =$('#child').val();
			let type=$('#searchFlightForm input[name="type"]').val();
			let class_seats =$('select[name=class] option').filter(':selected').val()
			//alert(class_seats);

			let passenger={
				adults:adults,
				child :child,
				type:type,
				class_seats:class_seats,
				toschedule:0,
				fromschedule:0,
			}
			//console.log(passenger);
			// let passenger_list=localStorage.getItem("people");
 		
			//  var passenger_array;
			//  if(passenger_list==null){
			// 	passenger_array=[];
			// 	}else{
			// 		passenger_array=JSON.parse(passenger_list);
			// 	}
			// 	passenger_array.push(passenger);
				let passenger_string=JSON.stringify(passenger);
 		       localStorage.setItem("people",passenger_string);

			
			e.currentTarget.submit();
			
			
		})

		// roundtrip
		$('#roundsearchFlightForm').on('submit',function(e){
			// let formData=new FormData(this);
			e.preventDefault();
			//alert('hello');
			let adults=$('#adults').val();
			let child =$('#child').val();
			let type=$('#roundsearchFlightForm input[name="type"]').val();
			let class_seats =$('select[name=class] option').filter(':selected').val()
			//alert(class_seats);

			let passenger={
				adults:adults,
				child :child,
				type:type,
				class_seats:class_seats,
				toschedule:0,
				fromschedule:0,
			}
			//console.log(passenger);
			// let passenger_list=localStorage.getItem("people");
 		
			//  var passenger_array;
			//  if(passenger_list==null){
			// 	passenger_array=[];
			// 	}else{
			// 		passenger_array=JSON.parse(passenger_list);
			// 	}
			// 	passenger_array.push(passenger);
				let passenger_string=JSON.stringify(passenger);
 		       localStorage.setItem("people",passenger_string);

			
			e.currentTarget.submit();
			
			
		})
	})
</script>
@endsection