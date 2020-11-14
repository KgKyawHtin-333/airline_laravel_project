@extends('backendtemplate')

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
          <h2 class="d-inline-block"> Flight List </h2>
          <a href="{{route('flight.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-4 dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Total Seats</th>
                <th>AirLine Name</th>
               
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @php $i=1;@endphp
             @foreach($flights as $flight)
              <tr>
                <td> {{$i++}}  </td>
                <td>{{$flight->name}}</td>
                <td> {{$flight->total_seats}}   </td>
                <td> {{$flight->airline->name}}   </td>
               
                <td> 
                  <a href="{{route('flight.edit',$flight->id)}}" class="btn btn-success">Edit</a>
                  <a href="" class="btn btn-info">Show</a>
                  <form action="{{route('flight.destroy',$flight->id)}}" method="POST" class="d-inline-block" onsubmit="
                        return confirm('Are you sure want to delete?')">
                        @csrf 
                        @method ('DELETE')
                         <input type="submit" class="btn btn-danger" name="btnsubmit" value="delete">
                        </form> 
                  
                </td>
              </tr>
            @endforeach
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection