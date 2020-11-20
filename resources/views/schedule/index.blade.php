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
          <h2 class="d-inline-block"> Schedule List </h2>
          <a href="{{route('schedule.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-4 dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Date</th>
                <th>Route Name</th>
                <th>Flight Name</th>
                <th>Time Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @php $i=1;@endphp
             @foreach($schedules as $schedule)
              <tr>
                <td> {{$i++}}  </td>
                <td> {{$schedule->date}} </td>
                <td>From {{$schedule->route->fromCity->name}} To {{$schedule->route->toCity->name}}</td>
                <td> {{$schedule->flight->name}}</td>
                <td>{{$schedule->time->name}} </td>
               
                <td> 
                  <a href="{{route('schedule.edit',$schedule->id)}}" class="btn btn-success">Edit</a>
                  <a href="" class="btn btn-info">Show</a>
                  <form action="{{route('schedule.destroy',$schedule->id)}}" method="POST" class="d-inline-block" onsubmit="
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

@section('script')
<!-- Data table plugin-->
<script type="text/javascript" src="{{asset('backend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
$('.dataTable').DataTable();
</script>
@endsection