@extends('frontendtemplate')

@section('content')

  <div class="container">
  	<div class="row">
  		<div class="col-md-6">

            <form action="" method="">

  			<div class="card my-5">

  				<div class="card-header">
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
  						<input type="number" name="phone" id="phone" class="form-control" required="">
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

   			<a href="" class="btn btn-success submit_change float-right mb-5" style="padding-left: 30px;padding-right: 30px; font-size: 20px;" type="submit"> Submit </a>
   		    
   		    </form>
   			

  		</div>

  		<div class="offset-md-2"></div>

  		<div class="col-md-4 my-5">
  			<div class="card">
  				<div class="card-header">
  					<h2> Booking Details </h2>
  				</div>
  				<div class="card-body">
  					<div>
  						<h5>From-To</h5>
  						<p> Yangon <strong>---></strong> Mandalay</p>
  						<hr>
  						<h5>Time</h5>
  						<p> 6:30 - 7:30 </p>
  						<hr>
  						<h5> Departure Date - date</h5>
  						<hr>
  						<h5> Airline Name </h5>
  						<p> Class Name</p>
  						<hr>
  					</div>
  				</div>
  				<div class="card-footer">
  					<div>
  						<h5> Total price -</h5>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

@endsection

