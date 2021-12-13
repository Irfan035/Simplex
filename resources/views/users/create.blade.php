<x-app-layout>
    
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row">
        <div class="col-md-6">
            <h2>Create New User</h2>
        </div>
        <div class="col-md-6 text-lg-center">
            <a class="btn btn-primary" href="{{ _('users') }}"> Back</a>
        </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


<form action="storeUser" method="post">
<!-- {!! Form::open(array('storeUser','method'=>'POST')) !!} -->
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 offset-md-1 col-md-9">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    
        <div class="text-right">
        <button type="submit" class="btn btn-primary m-3">Submit</button>
        </div>
    </div>
</div>
<!-- {!! Form::close() !!} -->
</form>
</div>
</div>
@endsection
</x-app-layout>