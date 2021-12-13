<x-app-layout>
    
@section('content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid " id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container">
<div class="row pb-2">
        <div class="col-lg-6">
            <h2> Show User</h2>
        </div>
        <div class="col-lg-6">
            <a class="btn btn-primary" href="{{ _('users') }}"> Back</a>
        </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 shadow p-5 m-3">
        <div class="form-group">
           <strong class="text-dark display-6">Name: </strong>
            {{ $user->name }}
        </div>
        <div class="form-group">
          <strong class="text-dark display-6">Email: </strong>
            {{ $user->email }} 
        </div>
        <div class="form-group">
           
            <strong class="text-dark display-6">Roles: </strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
            
        </div>
    </div>
</div>
</div>
</div>
@endsection
</x-app-layout>