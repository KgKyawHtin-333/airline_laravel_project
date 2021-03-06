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
        <a href="{{route('schedule.index')}}" class="btn btn-info float-right"><i class="fas fa-backward"></i></a>

        <h2>Schedule Form</h2>
        <form action="{{route('schedule.store')}}" method="POST" enctype="multipart/form-data">
        @csrf   

                <div class="form-group row">
                <label for="date"> Date </label>
                <input type="date" class="form-control @error('date') is-invalid @enderror"  name="date"> 
                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>

                @enderror 
                </div>

                <div class="form-group row">
                        <label for="from_city">Route Name</label>
                        <select id="From_city" class="form-control" name="route" value="route">
                       @foreach($routes as $route)
                            <option value="{{$route->id}}">From {{$route->fromCity->name}} To {{$route->toCity->name}}</option>
                        @endforeach 

                        </select>
                 </div>
                
                
                <div class="form-group row">
                    <label for="flight_name">Flight Name</label>
                    <select id="flight_name" class="form-control" name="flight_name" value="">
                    @foreach($flights as $flight)
                    <option value="{{$flight->id}}">{{$flight->name}}</option>  
                    @endforeach    
                    </select>
                </div>
                <div class="form-group row">
                    <label for="time">Time</label>
                    <select id="time" class="form-control" name="time" value="">
                    @foreach($times as $time)
                    <option value="{{$time->id}}">{{$time->name}}</option>  
                    @endforeach    
                    </select>
                </div>
                
            </div>
            <div class="form-group">
                <input type="submit" value="save" name="btnsubmit" class="btn btn-success">
            </div>          
        </form>  
          
        </div>
      </div>
    </div>
  </main>
@endsection