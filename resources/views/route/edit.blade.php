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
        <a href="{{route('route.index')}}" class="btn btn-info float-right"><i class="fas fa-backward"></i></a>

        <h2>Route Form</h2>
        <form action="{{route('route.update',$route->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method ('PUT')
                <div class="form-group row">
                        <label for="from_city">From_city</label>
                        <select id="From_city" class="form-control" name="From_city" value="">
                        @foreach($cities as $city)
                            <option value="{{$city->id}}" {{ $route->From_city_id == $city->id ? 'selected' : ''  }}>{{$city->name}}</option>
                        @endforeach   
                        </select>
                </div>
                <div class="form-group row">
                    <label for="to_city">To_city</label>
                    <select id="To_city" class="form-control" name="To_city" value="">
                    @foreach($cities as $city)
                            <option value="{{$city->id}}" {{ $route->To_city_id == $city->id ? 'selected' : ''  }}>{{$city->name}}</option>
                        @endforeach     
                    </select>
                </div>
                <div class="form-group row">
                    <label for="price">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror"  name="price" value="{{$route->price}}"> 
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>

                    @enderror 
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