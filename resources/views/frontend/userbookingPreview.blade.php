
@extends('frontendtemplate')
@section('content')
<style type="text/css">
	h2,h4,#border,.btn-sm,.rtotal{
		color:white;
	}
</style>
  <!-- <h1 id="airlinename">	I am user preview booking</h1> -->

    <div class="container py-5" >
  	<div class="row my-5">
  		<div class="col-md-6">
  	
        <h2 class="text-success success my-3" ></h2>

        <h2 class="text-danger  danger my-3"></h2>

          <form id="bookingForm" action="" method=""> 
<!-- aco adding id="bookingForm" -->
  			<div class="card my-5">

  				<div class="card-header"  style="background-color:#222223">
  			      <h2> Traveller Details </h2>
  		        </div>

  				<div class="card-body"> 
       				<div class="form-group">
  						<label for="firstname"> First Name </label>
  						<input type="text" name="firstname" id="firstname" class="form-control" required="">
              <p id="paragraph_one" style="color: red;"></p>
  					</div>
  				    
   					<div class="form-group">
  						<label for="secondname"> Second Name </label>
  						<input type="text" name="secondname" id="secondname" class="form-control" required="">
              <p id="paragraph_one" style="color: red;"></p>
  					</div>

  					<div class="form-group">
  						<label for="email"> Email </label>
  						<input type="email" name="email" id="email" class="form-control" required="">
              <p id="paragraph_two" style="color: red;"></p>
  					</div>

  					<div class="form-group">
  						<label for="phone"> Phone </label>
  						<input type="text" name="phone" id="phone" class="form-control" required="">
              <p id="paragraph_three" style="color: red;"></p>
  					</div>

  					<div class="form-group"><!--Bootstrap mr date form atwt ready shi tl -->
      					<label for="birthdate"> Date of Birth* </label>
      					<input type="date" name="birthdate" id="birthdate" required="" class="form-control" required="">
                <p id="paragraph_five" style="color: red;"></p>
       				</div>

       				<div class="form-group">
       					<label for="passport"> Passport/NRC number* </label>
       					<input type="text" name="passport" id="passport" class="form-control" required="">
                <p id="paragraph_four" style="color: red;"></p>
       				</div>
   				</div>


  			</div>


   			
   		     <input type="submit" class="btn btn-sm btn-success btn-book float-right" style="padding-left: 20px;padding-right: 20px;font-size: 20px;background-color:#222223" value="Book Now!" >
            <input type="button" class="d-none  btn btn-sm btn-danger float-right btn-again" style="padding-left: 20px;padding-right: 20px;font-size:20px" value="Try Again" >

   		    
   		</form>

   			

  		</div>

  		<div class="offset-md-2"></div>

  		<div class="col-md-4 my-5">
  			<!-- <form action="" method=""> -->
  			<div class="card">
  				<div class="card-header" style="background-color:#222223">
  					<h2 > Departure Details </h2>
  				</div>
  				<div class="card-body">
  					<div>
  						<h5>From-To</h5>
  						<span class="fromCity"></span>-<span class="toCity"></span>
  						<hr>
  						<h5>Time</h5>
  						<p class="time"> </p>
  						<hr>
  						<h5> Departure Date - <span class="date"></span></h5>
  						<hr>
  						<h5 class="airlinename">  </h5>
  						<hr>
  						<h5>Seat - <span class="classname"></span></h5>
  						<hr>
  						<h5>Adult - <span class="adult"></span></h5>
  						<h5>Child - <span class="child"></span></h5>
  					</div>
  				</div>
  				<div class="card-footer" style="background-color:#222223">
  					<div>
  						<h4 > Total price - <span class="total"></span></h4>
  					</div>
  				</div>
  			</div>

  			<div class="card roundTripDetail d-none" >
  				<div class="card-header" style="background-color:#222223 ">
  					<h2 > Return Details </h2>
  				</div>
  				<div class="card-body">
  					<div>
  						<h5>From-To</h5>
  						<span class="rfromCity"></span>-<span class="rtoCity"></span>
  						<hr>
  						<h5>Time</h5>
  						<p class="rtime"> </p>
  						<hr>
  						<h5> Departure Date - <span class="rdate"></span></h5>
  						<hr>
  						<h5 class="rairlinename">  </h5>
  						<hr>
  						<h5>Seat - <span class="rclassname"></span></h5>
  						<hr>
  						<h5>Adult - <span class="radult"></span></h5>
  						<h5>Child - <span class="rchild"></span></h5>
  					</div>
  				</div>
  				<div class="card-footer" style="background-color:#222223">
  					<div>
  						<h4> Total price - <span class="rtotal"></span></h4>
  					</div>
  				</div>
  			</div>
  			<!--  <button type="submit" class="btn btn-success booking float-right my-3" > Booking </button> -->
  		<!-- </form> -->
  		</div>
  		
  	</div>
  </div>
  

<!-- <h1 id="airlinename">	I am user preview booking</h1> -->


   <div class="container py-3">
      <div class="row">
        
         <div class="col-md-12">
            <div class="card text-center">
               <div class="card-header" style="background-color:#222223">
                  <div class="row">
                     <div class="col-md-3"><img class="img-fluid" src="{{asset('frontend_asset/img/flight1.png')}}" alt="" width="50px";height="50px"></div>
                     <div class="col-md-3"><img class="img-fluid" src="{{asset('frontend_asset/img/flywithus.jpg')}}" alt="" width="80px";height="80px"></div>
                     <div class="col-md-3" id="border">BOARDING PASS</div>
                     <div class="col-md-3" id="border">BOARDING PASS</div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-1"></div>
                     <div class="col-md-2 "><span>Passenger Name:</span><br><b><span class="text-uppercase">Hike Min Swan</span></b></div>
                     <div class="col-md-2 "><span>Carrier:</span><br><b><span class="">AC</span></b></div>
                     <div class="col-md-2 "><span>Flight No:</span><br><b><span class="airlinename"></span></b></div>
                     <div class="col-md-2 "><span>Class:</span><br><b><span class="classname"></span></b></div>
                     <div class="col-md-2 "><span>Passenger Name:</span><br><span class="text-uppercase">Hike Min Swan</span></div>
                  </div>
                  <div class="row my-3">
                     <div class="col-md-1 fluid"></div>
                     <div class="col-md-2 "><span>From:<b><span class="fromCity"></span></b></span><br><span>To:<b><span class="toCity"></span></b><span></div>
                     <div class="col-md-2 "><span>Date:</span><br><b><span class="date"></span></b></div>
                     <div class="col-md-2 "><span>Luggage:</span><br><b><span>Y</span></b></div>
                     <div class="col-md-2 "><span>Class:</span><br><b><span class="classname"></span></b></div>
                     <div class="col-md-2 "><span>From:<b><span class="fromCity"></span></b></span><br><span>To:<b><span class="toCity"></span></b></span></div>
                  </div>
                  <div class="row my-3">
                     <div class="col-md-1 fluid"></div>
                     <div class="col-md-2"><span>Gate:</span><br><b><span>K18</span></b></div>
                     <div class="col-md-2 "><span>BOARDING TIME:</span><br><b><span>3:30</span></b></div>
                     <div class="col-md-4 "><span></span><br></div>
                     <div class="col-md-1"><span>Seat:</span><br><b><span class="classname"></span></b></div>
                     <div class="col-md-2"><span>Date:</span><br><b><span class="date"></span></b></div>
                  </div>
               </div>
               <div class="card-footer text-muted" style="background-color:#222223">
               </div>
            </div>
         </div>
      </div>
   </div>

    <div class="container py-3">
      <div class="row"> 
         <div class="col-md-12">
            <div class="card text-center roundTripDetail d-none">
               <div class="card-header" style="background-color:#222223">
                  <div class="row">
                     <div class="col-md-3"><img class="img-fluid" src="{{asset('frontend_asset/img/flight1.png')}}" alt="" width="50px";height="50px"></div>
                     <div class="col-md-3"><img class="img-fluid" src="{{asset('frontend_asset/img/flywithus.jpg')}}" alt="" width="80px";height="80px"></div>
                     <div class="col-md-3">BOARDING PASS</div>
                     <div class="col-md-3">BOARDING PASS</div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-1"></div>
                     <div class="col-md-2 "><span>Passenger Name:</span><br><b><span class="text-uppercase">Hike Min Swan</span></b></div>
                     <div class="col-md-2 "><span>Carrier:</span><br><b><span class="">AC</span></b></div>
                     <div class="col-md-2 "><span>Flight No:</span><br><b><span class="rairlinename"></span></b></div>
                     <div class="col-md-2 "><span>Class:</span><br><b><span class="rclassname"></span></b></div>
                     <div class="col-md-2 "><span>Passenger Name:</span><br><span class="text-uppercase">Hike Min Swan</span></div>
                  </div>
                  <div class="row my-3">
                     <div class="col-md-1 fluid"></div>
                     <div class="col-md-2 "><span>From:<b><span class="rfromCity"></span></b></span><br><span>To:<b><span class="rtoCity"></span></b><span></div>
                     <div class="col-md-2 "><span>Date:</span><br><b><span class="rdate"></span></b></div>
                     <div class="col-md-2 "><span>Luggage:</span><br><b><span>Y</span></b></div>
                     <div class="col-md-2 "><span>Class:</span><br><b><span class="rclassname"></span></b></div>
                     <div class="col-md-2 "><span>From:<b><span class="rfromCity"></span></b></span><br><span>To:<b><span class="rtoCity"></span></b></span></div>
                  </div>
                  <div class="row my-3">
                     <div class="col-md-1 fluid"></div>
                     <div class="col-md-2"><span>Gate:</span><br><b><span>K18</span></b></div>
                     <div class="col-md-2 "><span>BOARDING TIME:</span><br><b><span>3:30</span></b></div>
                     <div class="col-md-4 "><span>12345678</span><br></div>
                     <div class="col-md-1"><span>Seat:</span><br><b><span class="rclassname"></span></b></div>
                     <div class="col-md-2"><span>Date:</span><br><b><span class="rdate"></span></b></div>
                  </div>
               </div>
               <div class="card-footer text-muted" style="background-color:#222223">
               </div>
            </div>
         </div>
      </div>
   </div>


@endsection
@section('script')

<script type="text/javascript">
    
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

	$(document).ready(function(){
		let var1=localStorage.getItem('people');
		let varArr=JSON.parse(var1);
		 console.log(varArr);

		    $('.classname').html(varArr.seat_name);
		    $('.adult').html(varArr.adults);
		    $('.child').html(varArr.child);

        // var totalpeople=varArr.adults + varArr.child;
        // console.log(totalpeople);
        //  var totalseatprice=varArr.seat_price * totalpeople;
        //  console.log(totalseatprice);

        // var sdata=varArr.toschedule.route.price;
        // console.log(sdata);

         // var routeprice=sdata.route.price;
         // var routeprice=routeprice * totalpeople;

        // var total= routeprice + totalseatprice;
        // $('#total').html(total);



		let sid=varArr.toschedule;

		console.log(sid);

		let fid=varArr.fromschedule;
		 console.log(fid); //departure way

		$.get(`/getScheduleUser/${sid}`,function(res){
			console.log(res);
			//$('#passengerName').html(res)
			$('.airlinename').html(res.flight.airline.name);
			$('.fromCity').html(res.route.from_city.name);
			$('.toCity').html(res.route.to_city.name);
			$('.time').html(res.time.name);
			$('.date').html(res.date);
			// $('#totalprice').html(res.route.price);

        var totalpeople=parseInt(varArr.adults) + parseInt(varArr.child);
        console.log(totalpeople);
         var totalseatprice=varArr.seat_price * totalpeople;
         console.log(totalseatprice);

        var sdata=res.route.price;
        console.log(sdata);
        var routeprice = sdata * totalpeople;
        console.log(routeprice);
        var total= routeprice+totalseatprice;
        $('.total').html(total);
			
		})

		// return way
		if(fid!=0){
			$('.roundTripDetail').removeClass('d-none');
			$('.rclassname').html(varArr.seat_name);
		    $('.radult').html(varArr.adults);
		    $('.rchild').html(varArr.child);
			$.get(`/getScheduleUser/${fid}`,function(res){
			console.log(res);
				$('.rairlinename').html(res.flight.airline.name);
				$('.rfromCity').html(res.route.from_city.name);
				$('.rtoCity').html(res.route.to_city.name);
				$('.rtime').html(res.time.name);
				$('.rdate').html(res.date);
				var ftotalpeople=parseInt(varArr.adults) + parseInt(varArr.child);
	            console.log(ftotalpeople);
	            var ftotalseatprice=varArr.seat_price * ftotalpeople;
	            console.log(ftotalseatprice);

	            var fdata=res.route.price;
	            console.log(fdata);
	           var frouteprice = fdata * ftotalpeople;
	           console.log(frouteprice);
	           var ftotal= frouteprice+ftotalseatprice;
				$('.rtotal').html(ftotal);
				
			})
		}
		

// aco with form submitting
	$('form').submit(function(e){
      e.preventDefault();
      let formData=new FormData(this);

      let booking = localStorage.getItem('people');
     

      formData.append('data',booking);

          $.ajax({
            url:"{{route('booking.store')}}",
            method:'post',
            data: formData,
    processData: false,
    contentType: false,
            success:function(res){
              if(res.success){
                // localStorage.clear();
                $('.success').html(res.success);

              }else{
                // localStorage.clear();
                $('.btn-book').addClass('d-none');
                $('.btn-again').removeClass('d-none');
                $('.danger').html(res.error);
              }

            },
            error:function(error){
              console.log(error);
            }
          })
      });


    $('.btn-again').click(function(){
      localStorage.clear();
      location.href="/";
    })
	})
</script>

@endsection