@extends('admin::layout.master')
@section('content')
<div class="portlet light bordered">
    <div class="portlet-body">
      <!-- BEGIN PAGE BREADCRUMB -->
      <ul class="page-breadcrumb breadcrumb" style="padding: 10px;">
          <li>
              <a href="{{ route('admin.dashboard') }}">Home</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <a href="{{ route('admin.users.index') }}">Users</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Show</span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
        <ul class="list-group">
            <style>
                .show-data label {
                    width: 10%;
                }

                .show-data span h4,
                img {
                    display: -webkit-inline-box;
                    margin-right: 20px;
                }
            </style>
            @if(session()->has('msg'))
                <div class="alert alert-success text-center">
                    {{session('msg')}}
                </div>
            @endif
            <li class="list-group-item show-data">
                {{-- <label>Name </label> --}}
                <span>
                    <img src="{{asset('uploads/images/medium/' . $user->photo)}}" style="width:100px;">
                </span>
                <span>
                    <h4>{{ $user->name }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Email </label>
                <span>
                    <h4>{{ $user->email }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Email Verified </label>
                <span>
                    <h4>
                        @if($user->email_verified_at == null) 
                            <span class="badge badge-roundless badge-danger">Not verified yet</span>
                        @else
                            <span class="badge badge-roundless badge-success">Verified</span>
                        @endif
                            
                            
                    </h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Address </label>
                <span>
                    <h4> {{$user->district->translate(App::getLocale())->text . ', ' . $user->city->translate(App::getLocale())->text . ', ' . $user->country->translate(App::getLocale())->text}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Mobile </label>
                <span>
                    <h4>{{ $user->mobile }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Updated at </label>
                <span>
                    <h4>{{ $user->updated_at }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Created at </label>
                <span>
                    <h4>{{$user->created_at }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Status </label>
                <span>
                    <h4>{{ $user->user == null ? 'user' : 'Vape Masr' }}</h4>
                </span>
            </li>
         
            <li class="list-group-item show-data">
                <label>In Team VapeMasr</label>
                <span>
                    @if ($user->user == null)
                        <a href="{{ route('admin.users.addToTeamVapeMasr', $user->id) }}" class="btn   btn-sm blue"><i class="icon-user-following"></i> Add
                        </a>
                    @else   
                        <a href="{{ route('admin.users.reomveFromTeamVapeMasr', $user->id) }}" class="btn   btn-sm red"><i class="icon-user-unfollow"></i> Remove
                        </a>
                    @endif
                </span>
            </li>
        </ul>
    </div>
</div>
@endsection
