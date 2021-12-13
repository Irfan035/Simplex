<x-app-layout>
    
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row pb-2">
        <div class="col-md-6">
            <h2>Role Management</h2>
        </div>
        <div class="col-md-6">
        @can('role-create')
            <a class="btn btn-success" href="{{ _('createRole') }}"> Create New Role</a>
            @endcan
        </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="p-3 table  table-dark table-striped table-responsive">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('showRole',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('editRole',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'GET','route' => ['destroyRole', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


</div>
</div>
@endsection
</x-app-layout>