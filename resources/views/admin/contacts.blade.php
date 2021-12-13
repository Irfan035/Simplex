<x-app-layout>
    
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row pb-3 pt-2">
    <div class="col-md-6">
            <h1>Contact Form List</h1>
            </div>
        <div class="col-md-6 text-lg-center">
            <a class="btn btn-success" href="{{ _('contact') }}"> Contact Us</a>
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


<table class="p-3 table  table-dark table-striped table-responsive">
  <thead>
   <tr>
    <th >No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
  <thead>
  @foreach ($data as $key => $contact)
  <tbody>
    <tr>
    <td >{{ ++$i }}</td>
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->phone }}</td>
    <td>{{ $contact->subject }}</td>
    <td>{{ $contact->message }}</td>
    <td>{!! Form::open(['method' => 'GET','route' => ['destroyContact', $contact->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}</td>
  </tr>
  <tbody>
 @endforeach
</table>


{!! $data->render() !!}
</div>
</div>
@endsection
</x-app-layout>