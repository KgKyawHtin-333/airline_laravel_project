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
        <a href="{{route('airline.index')}}" class="btn btn-info float-right"><i class="fas fa-backward"></i></a>

        <h2>Flight Form</h2>
        <form action="{{route('airline.update',$airline->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group row">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{$airline->name}}"> 
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>

                @enderror 
            </div>

            <div class="form-group row">
                <label for="address">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror"  name="address" value="{{$airline->address}}"> 
                @error('total_seat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>

                @enderror 
            </div>

             <div class="form-group row">
                <label for="phoneno">Phone</label>
                <input type="text" class="form-control @error('phone_no') is-invalid @enderror"  name="phone_no" value="{{$airline->phone_no}}"> 
                @error('total_seat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>

                @enderror 
            </div>
           
           
       

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