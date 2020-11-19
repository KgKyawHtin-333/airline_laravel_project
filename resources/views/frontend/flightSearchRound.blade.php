@extends('frontendtemplate')

@section('content')

<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>				
				<div class="container py-5">

					<div class="row fullscreen align-items-center justify-content-between py-5">
                      
						<div class="col-md-12">
                             <h3 class="text-warning">Departure</h3>
                             @foreach($data as $d)
                                <div class="card">
                                   <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">    
                                                <span>From {{$d->route->fromCity->name}}- To{{$d->route->toCity->name}}</span><br>
                                                <span>{{$d->flight->airline->name}}</span> <br>
                                                 <span>{{$d->flight->airline->photo}}</span> <br><span>{{$d->flight->name}}</span><br>
                                         </div> 
                                         <div class="col-md-3"><span>{{$d->time->name}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>{{$d->date}}</span>
                                         </div>
                                         <div class="col-md-3">
                                                <span>{{$d->route->price}}MMK</span>
                                         </div>
                                         <div class="col-md-3">
                                            <input type="button" value="Choose" class="btn btn-outline-warning checkout"  data-id="{{$d->id}}"> 

                                        </div>

                                    </div>
                                   </div>
                                </div>
                                @endforeach
				        </div>
                    
                        
                            <div class="col-md-12">
                                 <h3 class="text-warning">Return</h3>
                                 @foreach($dataReturn as $return)
                                    <div class="card my-2">
                                       <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">    
                                                    <span>From {{$return->route->FromCity->name}}- To{{$return->route->toCity->name}}</span><br>
                                                    <span>{{$return->flight->airline->name}}</span> <br>
                                                     <span>{{$return->flight->airline->photo}}</span> <br><span>{{$return->flight->name}}</span><br>
                                             </div> 
                                             <div class="col-md-3">
                                                    <span>{{$return->time->name}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>{{$return->date}}</span>
                                             </div>
                                             <div class="col-md-3">
                                                    <span>{{$return->route->price}}MMK</span>
                                             </div>
                                             <div class="col-md-3">
                                                <input type="button" value="Choose" class="btn btn-outline-warning checkout"  data-id="{{$return->id}}"> 

                                            </div>

                                        </div>
                                       </div>
                                    </div>
                                    @endforeach
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
    $('document').ready(function(){
        $('.checkout').click(function() {  
            var data=localStorage.getItem('people');
            var dataArray=JSON.parse(data);
            console.log(dataArray);
              
           let schedule_id=$(this).data('id');
            console.log(schedule_id);

             if(dataArray.fromschedule==0){
                     if(dataArray.toschedule!=0){
                     dataArray.fromschedule=schedule_id;
                     localStorage.setItem('people',JSON.stringify(dataArray));

                        location.href="/prevbook"; 

                    }else{
                        dataArray.toschedule=schedule_id;
                        localStorage.setItem('people',JSON.stringify(dataArray));
                    }
                     
                }else{
                    console.log('you have already choosen for round trip!');
                }
          
          


        //     let passenger={
		// 		schedule_id:schedule_id
		// 	}
		// 	//console.log(passenger);
		// 	let passenger_list=localStorage.getItem("schedule");
 		
		// 	 let passenger_array;
		// 	 if(passenger_list==null){
		// 		passenger_array=[];
		// 		}else{
		// 			passenger_array=JSON.parse(passenger_list);
		// 		}
		// 		passenger_array.push(passenger);
        //         let passenger_string=JSON.stringify(passenger_array);
                
 		//        localStorage.setItem("schedule",passenger_string);
        })
    })


</script>

@endsection
