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
                             <div class="col-md-2 "><h5> Name:</h5><span class="text-uppercase"> {{$booking->fname}} {{$booking->sname}} </span></div>
                             <div class="col-md-2 "><h5>NRC:</h5><span> {{$booking->nrc_passport}} </span></div>
                             <div class="col-md-3 "><h5>Email:</h5><span> {{$booking->email}} </span></div>
                             <div class="col-md-3 "><h5>Phone:</h5><span> {{$booking->phone}} </span></div>
                            
                          </div>
                          <div class="row my-3">
                             <div class="col-md-1 fluid"></div>
                             <div class="col-md-2 "><h5>Total Price:</h5><span> {{$booking->total_price}} </span></div>
                             <div class="col-md-2 "><h5>Total Passenger:</h5><span> {{$booking->total_passenger}} </span></div>
                             <div class="col-md-3 "><h5>Date of Birth:</h5><span> {{$booking->dob}} </span></div>
                             <div class="col-md-3 "><h5>Code NO:</h5><span> {{$booking->codeno}} </span></div>
                             
                          </div>
                          <div class="row my-3">
                             <div class="col-md-1 fluid"></div>
                             <div class="col-md-2"><h5>Schedule Id:</h5><span> {{$booking->schedule_id}} </span></div>
                             
                             <div class="col-md-2"><h5>Date:</h5><span> {{$booking->created_at}} </span></div>
                          </div>
                       </div>
                       <div class="card-footer text-muted" style="background-color: skyblue">
                       </div>
                    </div>
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
                             <div class="col-md-2 "><h5> Name:</h5><span class="text-uppercase"> {{$booking->fname}} {{$booking->sname}} </span></div>
                             <div class="col-md-2 "><h5>NRC:</h5><span> {{$booking->nrc_passport}} </span></div>
                             <div class="col-md-3 "><h5>Email:</h5><span> {{$booking->email}} </span></div>
                             <div class="col-md-3 "><h5>Phone:</h5><span> {{$booking->phone}} </span></div>
                            
                          </div>
                          <div class="row my-3">
                             <div class="col-md-1 fluid"></div>
                             <div class="col-md-2 "><h5>Total Price:</h5><span> {{$booking->total_price}} </span></div>
                             <div class="col-md-2 "><h5>Total Passenger:</h5><span> {{$booking->total_passenger}} </span></div>
                             <div class="col-md-3 "><h5>Date of Birth:</h5><span> {{$booking->dob}} </span></div>
                             <div class="col-md-3 "><h5>Code NO:</h5><span> {{$booking->codeno}} </span></div>
                             
                          </div>
                          <div class="row my-3">
                             <div class="col-md-1 fluid"></div>
                             <div class="col-md-2"><h5>Schedule Id:</h5><span> {{$booking->schedule_id}} </span></div>
                             
                             <div class="col-md-2"><h5>Date:</h5><span> {{$booking->created_at}} </span></div>
                          </div>
                       </div>
                       <div class="card-footer text-muted" style="background-color: skyblue">
                       </div>
                    </div>
                 </div>
              </div>
           </div>
          


          @if($booking->status == 0)
          <form method="post" action="{{route('booking.confirm',$booking->id)}}">
            @csrf

            <button class="btn btn-info" type="submit" style="margin-left: 100px">Confirm</button>

          </form>

          @elseif($booking->status == 1)
            <button class="btn btn-success">Success Order</button>
          @endif
        </div>
      </div>
    </div>
  </main>
@endsection