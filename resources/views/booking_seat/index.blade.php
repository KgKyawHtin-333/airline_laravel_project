<!-- @extends('backendtemplate')

@section('content')

  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Airline Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Airline Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2 class="d-inline-block"> Booking List </h2>
          <a href="{{route('booking_seat.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-4 dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Booking ID</th>
                <th>Seat Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
               @php $i=1;@endphp
               @foreach($booking_seats as $book_seat)
               <tr>
                <td>{{$i++}}</td>
                <td>{{$book_seat->id}}</td>
                <td>{{$book_seat->seats->if}}</td>
                <td> 
                  <a href="" class="btn btn-success">Edit</a>
                  <a href="" class="btn btn-info">Show</a>
                  
                </td>

              </tr>
              @endforeach
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection -->