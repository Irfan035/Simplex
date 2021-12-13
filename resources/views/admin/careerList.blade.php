<x-app-layout>
    
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row pb-3 pt-2">
    <div class="col-md-6">
            <h1>Job Applications List</h1>
            </div>
        <div class="col-md-6 text-lg-center">
            <a class="btn btn-success" href="{{ _('career')}}"> Career</a>
        </div>
    
</div>


                      @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                      @endif


<div class="table-responsive">
<table class="table  table-dark table-striped">
  <thead>
   <tr>
    <th >No</th>
    <th>Name</th>
    <th>CNIC</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Position Applied</th>
    <th>LinkedIn</th>
    <th>Hear about us?</th>
    <th>Resume</th>
    <th>Availability</th>
    <th>Cover Letter</th>
    <th>Action</th>
  </tr>
  <thead>
  @foreach ($data as $key => $career)
  <tbody>
    <tr>
    <td >{{ ++$i }}</td>
    <td>{{ $career->name }}</td>
    <td>{{ $career->cnic }}</td>
    <td>{{ $career->email }}</td>
    <td>{{ $career->phone }}</td>
    <td>{{ $career->address }}</td>
    <td>{{ $career->position }}</td>
    <td>{{ $career->LinkedIn }}</td>
    <td>{{ $career->aboutUs }}</td>
   <td><a href="media/{{$career->Resume}}" target="_blank">Check</a></td> 
   <!--  <td><img src="media/{{$career->Resume}}" alt="Resume"></td>-->
    <td>{{ $career->available }}</td>
    <td>{{ $career->message }}</td>
    <td>{!! Form::open(['method' => 'GET','route' => ['destroyCareer', $career->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}</td>
  </tr>
  <tbody>
 @endforeach
</table>
</div>


{!! $data->render() !!}
</div>
</div>
@endsection
</x-app-layout>