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
        <a href="{{route('flight.index')}}" class="btn btn-info float-right"><i class="fas fa-backward"></i></a>

        <h2>Flight Form</h2>
        <form action="{{route('flight.update',$flight->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group row">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{$flight->name}}"> 
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>

                @enderror 
            </div>

            <div class="form-group row">
                <label for="name">Total Seats</label>
                <input type="text" class="form-control @error('total_seat') is-invalid @enderror"  name="total_seat" value="{{$flight->total_seats}}"> 
                @error('total_seat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>

                @enderror 
            </div>
           
            <div class="form-group row">
                <label for="c_name">AirLine Name</label>
                <select id="categoryList" class="form-control" name="airline" value="airline">
                @foreach ($airlines as $airline)
                    <option value="{{ $airline->id }}" {{ $flight->airline_id == $airline->id ? 'selected' : ''  }}>{{ $airline->name }}</option>
                @endforeach
               
            </select>
       

            </div>
        
            <div class="form-group">
                <input type="submit" value="Edit" name="btnsubmit" class="btn btn-success">
            </div>
            
                
        </form>

 
          
          
        </div>
      </div>
    </div>
  </main>
@endsection