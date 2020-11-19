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
          <h2 class="d-inline-block"> Airline List </h2>
          <a href="{{route('airline.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-4 dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone no</th>
                <th>Photo</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @php $i=1;@endphp
             @foreach($airlines as $airline)
              <tr>
                <td> {{$i++}}  </td>
                <td>{{$airline->name}}</td>
                <td> {{$airline->address}}   </td>
                <td> {{$airline->phone_no}}   </td>
                <td>  {{$airline->photo}}  </td>
                <td> 
                  <a href="{{route('airline.edit',$airline->id)}}" class="btn btn-success">Edit</a>
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
@endsection