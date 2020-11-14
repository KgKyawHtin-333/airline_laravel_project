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
          <h2 class="d-inline-block"> Route List </h2>
          <a href="" class="btn btn-info float-right">Add New</a>
          <table class="table mt-4 dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>From_city</th>
                <th>To_city</th>
                <th>Price</th>
               
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @php $i=1;@endphp
             @foreach($routes as $route)
              <tr>
                <td> {{$i++}}  </td>
                <td>{{$route->From_city}}</td>
                <td> {{$route->To_city}}   </td>
                <td> {{$route->price}}   </td>
                
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
@endsection