@extends('frontendtemplate')

@section('content')

<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
                        @foreach($data as $d)
						<div class="col-md-12">
                            <div class="row">
                           
                             <div class="col-md-3 centerSummaryFlight">    
                                 <span>From {{$d->route->fromCity->name}}- To{{$d->route->toCity->name}}</span><br>
                                 <span>{{$d->flight->airline->name}}</span> <br><span>{{$d->flight->name}}</span><br>
                                 
                             </div> 
                             <div class="col-md-3">
                                 <span>{{$d->time->name}}</span>
                             </div>
                             <div class="col-md-3">
                                 <span>{{$d->route->price}}</span>
                             </div>
                             <div class="col-md-3">
                                 <button class="btn-outline-success checkout" data-price="{{$d->route->price}}" data-route="{{$d->route_id}}" data-time="{{$d->time_id}}" data-flight="{{$d->flight_id}}"> Choose </button>
                             </div>
                        @endforeach
                        <br><br>
				</div>
                				
			</section>
			<!-- End banner Area -->

			<!-- Start popular-destination Area -->
			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    
		                </div>
		            </div>						
					
				</div>	
			</section>
			<!-- End popular-destination Area -->

     

@endsection