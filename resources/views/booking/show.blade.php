@extends('backendtemplate')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          
          <h2>Booking Detail</h2>

    
          
            
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                
                <th>First Name</th>
                <th>Second Name</th>
                <th>Total Price</th>
                <th>Total Passenger</th>
                <th>Passport/NRC*</th>
                <th>Schedule Id</th>
              </tr>
            </thead>
            <tbody>
              <!-- {{$booking}} -->
             
              
              <tr>
                 <td>{{$booking->fname}}</td>
                <td> {{$booking->sname}} </td>
                <td>{{$booking->total_price}}</td>
                <td>{{$booking->total_passenger}}</td>
                <td>{{$booking->nrc_passport}}</td>
                <td> {{$booking->schedule_id}} </td>  
               
              
              </tr>
              
             

              
            </tbody>
          </table>

          @if($booking->status == 0)
          <form method="post" action="{{route('booking.confirm',$booking->id)}}">
            @csrf
            <button class="btn btn-info" type="submit">Confirm</button>
          </form>

          @elseif($booking->status == 1)
            <button class="btn btn-success">Success Order</button>
          @endif
        </div>
      </div>
    </div>
  </main>
@endsection