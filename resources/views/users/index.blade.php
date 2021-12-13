<x-app-layout>
    
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row pb-3 pt-2">
    <div class="col-md-6">
            <h2>Users Management</h2>
            </div>
        <div class="col-md-6 text-lg-center">
            <a class="btn btn-success" href="{{ _('createUser') }}"> Create New User</a>
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
    <th>Roles</th>
    <th width="280px">Action</th>
  </tr>
  <thead>
  @foreach ($data as $key => $user)
  <tbody>
    <tr>
    <td >{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('showUser',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('editUser',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'GET','route' => ['destroyUser', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
  <tbody>
 @endforeach
</table>


{!! $data->render() !!}
</div>
</div>
@endsection
</x-app-layout>