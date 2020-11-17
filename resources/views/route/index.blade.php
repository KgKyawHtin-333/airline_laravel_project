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
          <a href="{{route('route.create')}}" class="btn btn-info float-right">Add New</a>
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
                <td>{{$route->fromCity->name}}</td>
                <td> {{$route->toCity->name}}   </td>
                <td> {{$route->price}}</td>
                
                <td> 
                  <a href="{{route('route.edit',$route->id)}}" class="btn btn-success">Edit</a>
                  <a href="" class="btn btn-info">Show</a>
                  <form action="{{route('route.destroy',$route->id)}}" method="POST" class="d-inline-block" onsubmit="
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