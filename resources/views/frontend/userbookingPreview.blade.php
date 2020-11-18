@extends('frontendtemplate')

@section('content')
  <!-- <h1 id="airlinename">	I am user preview booking</h1> -->

     <div class="container" >
  	<div class="row my-5">
  		<div class="col-md-6">

        <h1 class="text-success success" ></h1>

    <form id="bookingForm" action="" method=""> 
<!-- aco adding id="bookingForm" -->
  			<div class="card my-5">

  				<div class="card-header"  style="background-color: skyblue">
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


   			
   			<input type="submit" class="btn btn-sm btn-success form-control" value="Book Now!" >

   		    
   		</form>
   			

  		</div>

  		<div class="offset-md-2"></div>

  		<div class="col-md-4 my-5">
  			<!-- <form action="" method=""> -->
  			<div class="card">
  				<div class="card-header" style="background-color: skyblue">
  					<h2 > Booking Details </h2>
  				</div>
  				<div class="card-body">
  					<div>
  						<h5>From-To</h5>
  						<span id="fromCity"></span>-<span id="toCity"></span>
  						<hr>
  						<h5>Time</h5>
  						<p id="time"> </p>
  						<hr>
  						<h5> Departure Date - <span id="date"></span></h5>
  						<hr>
  						<h5 id="airlinename">  </h5>
  						<hr>
  						<h5>Seat - <span id="classname"></span></h5>
  						<hr>
  						<h5>Adult - <span id="adult"></span></h5>
  						<h5>Child - <span id="child"></span></h5>
  					</div>
  				</div>
  				<div class="card-footer" style="background-color: skyblue">
  					<div>
  						<h5 > Total price - <span id="totalprice"></span></h5>
  					</div>
  				</div>
  			</div>
  			<!--  <button type="submit" class="btn btn-success booking float-right my-3" > Booking </button> -->
  		<!-- </form> -->
  		</div>
  	</div>
  </div>
  <section>
  <div class="container py-3">
  	<div class="row">
  		<div class="col-md-1 fluid"></div>
  		<div class="col-md-10">
  			<div class="card text-center">
			  <div class="card-header" style="background-color: skyblue">
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
			       		<div class="col-md-2 "><span>Passenger Name:</span><br><span class="text-uppercase">Hike Min Swan</span></div>
			       		<div class="col-md-2 "><span>Carrier:</span><br><span>AC</span></div>
			       		<div class="col-md-2 "><span>Flight No:</span><br><span>UB-123</span></div>
			       		<div class="col-md-2 "><span>Class:</span><br><span>A</span></div>
			       		<div class="col-md-2 "><span>Passenger Name:</span><br><span class="text-uppercase">Hike Min Swan</span></div>
			       </div>
			        <div class="row my-3">
			       		<div class="col-md-1 fluid"></div>
			       		<div class="col-md-2 "><span>From:Yangon</span><br><span>To:Mandalay</span></div>
			       		<div class="col-md-2 "><span>Date:</span><br><span>17/11/2020</span></div>
			       		<div class="col-md-2 "><span>Luggage:</span><br><span>Y</span></div>
			       		<div class="col-md-2 "><span>Class:</span><br><span>SA</span></div>
			       		<div class="col-md-2 "><span>From:Yangon</span><br><span>To:Mandalay</span></div>
			       </div>
			       <div class="row my-3">
			       		<div class="col-md-1 fluid"></div>
			       		<div class="col-md-2"><span>Gate:</span><br><span>K18:</span></div>
			       		<div class="col-md-2 "><span>BOARDING TIME:</span><br><span>3:30</span></div>
			       		<div class="col-md-4 "><span>12345678</span><br><span></span></div>
			       		<div class="col-md-1"><span>Seat:</span><br><span>5A</span></div>
			       		<div class="col-md-2"><span>Date:</span><br><span>17/11/2020</span></div>
			       		
			       </div>


			  </div>
			  <div class="card-footer text-muted" style="background-color: skyblue">
			   
			  </div>
			</div>
  		</div>
  	</div> 
  </div>
</section>

     

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

		    $('#classname').html(varArr.seat_name);
		    $('#adult').html(varArr.adults);
		    $('#child').html(varArr.child);


		let sid=varArr.toschedule;
		// console.log(sid);
		$.get(`/getScheduleUser/${sid}`,function(res){
			console.log(res);
			$('#airlinename').html(res.flight.airline.name);
			$('#fromCity').html(res.route.from_city.name);
			$('#toCity').html(res.route.to_city.name);
			$('#time').html(res.time.name);
			$('#date').html(res.date);
			$('#totalprice').html(res.route.price);
			
		})
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
              if(res){
                localStorage.clear();
                $('.success').html(res);

              }
            },
            error:function(error){
              console.log(error);
            }
          })
      });
	})
</script>

@endsection