<x-app-layout>
    
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row pb-3 pt-2">
    <div class="col-md-6">
            <h1>Quote List</h1>
            </div>
        <div class="col-md-6 text-lg-center">
            <a class="btn btn-success" href="{{ _('get-a-quote')}}"> Get A Quote</a>
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
    <th>Country</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Website/Business</th>
    <th>Project Duration</th>
    <th>Required Resources</th>
    <th>Call Time</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
  <thead>
  @foreach ($data as $key => $quote)
  <tbody>
    <tr>
    <td >{{ ++$i }}</td>
    <td>{{ $quote->name }}</td>
    <td>{{ $quote->country }}</td>
    <td>{{ $quote->email }}</td>
    <td>{{ $quote->phone }}</td>
    <td>{{ $quote->bussiness }}</td>
    <td>{{ $quote->duration }}</td>
    <td>{{ $quote->resources }}</td>
    <td>{{ $quote->callTime }}</td>
    <td>{{ $quote->message }}</td>
    <td>{!! Form::open(['method' => 'GET','route' => ['destroyQuote', $quote->id],'style'=>'display:inline']) !!}
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