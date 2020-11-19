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
        <a href="{{route('seat.index')}}" class="btn btn-info float-right"><i class="fas fa-backward"></i></a>

        <h2>Seat Form</h2>
        <form action="{{route('seat.update',$seat->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            
            <div class="form-group row">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{$seat->name}}"> 
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>

                @enderror 
            </div>


            <div class="form-group row">
                <label for="c_name">Class Name</label>
                <select  class="form-control" name="classflight" value="classflight">
                @foreach ($classflights as $classflight)
                    <option value="{{ $classflight->id }}" {{ $seat->class_flight_id == $classflight->id ? 'selected' : ''  }}>{{ $classflight->name }}</option>
                @endforeach
               
            </select>
       

            </div>

            <div class="form-group row">
                <label for="c_name">Flight Name</label>
                <select  class="form-control" name="flight" value="flight">
                @foreach ($flights as $flight)
                 <option value="{{ $flight->id }}" {{ $seat->flight_id == $flight->id ? 'selected' : ''  }}>{{ $flight->name }}</option>
                @endforeach
               
            </select>
       

            </div>
           
          
       

            </div>
        
            <div class="form-group">
                <input type="submit" value="Update" name="btnsubmit" class="btn btn-success">
            </div>
            
                
        </form>

 
          
          
        </div>
      </div>
    </div>
  </main>
@endsection