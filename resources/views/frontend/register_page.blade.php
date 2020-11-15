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
  						<label for="title"> Title* </label>
  						<select class="form-control" name="title" required="">
  							<option> Mr.</option>
  							<option> Mrs.</option>
  							<option> Mr. </option>
  						</select>
  					</div>
  				  
       				<div class="form-group">
  						<label for="firstname"> First Name </label>
  						<input type="text" name="firstname" class="form-control" required="">
  					</div>
  				    
   					<div class="form-group">
  						<label for="secondname"> Second Name </label>
  						<input type="text" name="secondname" class="form-control" required="">
  					</div>

  					<div class="form-group">
  						<label for="email"> Email </label>
  						<input type="email" name="email" class="form-control" required="">
  					</div>

  					<div class="form-group">
  						<label for="phone"> Phone </label>
  						<input type="number" name="phone" class="form-control" required="">
  					</div>

  					<div class="form-group"><!--Bootstrap mr date form atwt ready shi tl -->
      					<label for="birthdate"> Date of Birth* </label>
      					<input type="date" name="birthdate" required="" class="form-control" required="">
       				</div>

       				<div class="form-group">
       					<label for="passport"> Passport/NRC number* </label>
       					<input type="text" name="passport" class="form-control" required="">
       				</div>
  				    
                  
   				</div>

  			</div>

   			<a href="" class="btn btn-success float-right" style="padding-left: 30px;padding-right: 30px; font-size: 20px;" type="submit"> Submit </a>
   		    
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