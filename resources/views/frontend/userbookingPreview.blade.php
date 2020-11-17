@extends('frontendtemplate')

@section('content')
  <h1 id="airlinename">	I am user preview booking</h1>

     

@endsection
@section('script')

<script type="text/javascript">
	$(document).ready(function(){
		let var1=localStorage.getItem('people');
		let varArr=JSON.parse(var1);
		let sid=varArr.toschedule;
		// console.log(sid);
		$.get(`/getScheduleUser/${sid}`,function(res){
			console.log(res);
			$('#airlinename').html(res.flight.airline.name);
		})
	})
</script>

@endsection