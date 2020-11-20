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
          <h2 class="d-inline-block"> Time List </h2>
          <a href="" class="btn btn-info float-right">Add New</a>
          <table class="table mt-4 dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                
              </tr>
            </thead>
            <tbody>
             @foreach($times as $time)
              <tr>
                <td> {{$time->id}}  </td>
                <td> {{$time->name}} </td>
              
              </tr>
              @endforeach
            
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection