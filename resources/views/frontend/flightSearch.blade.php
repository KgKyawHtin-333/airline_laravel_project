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
                                 <button class="btn-outline-success checkout"  data-id="{{$d->id}}"> Choose </button>
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
@section('script')
<script>
    $('document').ready(function(){
        $('.checkout').click(function() {  
            var data=localStorage.getItem('people');
            var dataArray=JSON.parse(data);
            console.log(dataArray);
              
           let schedule_id=$(this).data('id');
            console.log(schedule_id);
            if(dataArray.type=='oneway'){

                    dataArray.toschedule=schedule_id;
                     localStorage.setItem('people',JSON.stringify(dataArray));
                location.href="/prevbook";  

            }else{
                if(dataArray.fromschedule==0){
                     if(dataArray.toschedule!=0){
                    dataArray.fromschedule=schedule_id;
                    }else{
                        dataArray.toschedule=schedule_id;
                    }
                     localStorage.setItem('people',JSON.stringify(dataArray));
                }else{
                    console.log('you have already choosen for round trip!');
                }
               

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
