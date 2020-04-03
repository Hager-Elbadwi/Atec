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
              <a href="{{ route('admin.users.history', $history->FK_users_id) }}">Users History</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Show</span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
        <h4 class="block">Show</h4>
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

            <li class="list-group-item show-data">
                <label>Name </label>
                <span>
                    <h4>{{ $history->users_history_name . ' ' . $history->users_history_last_name }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Email </label>
                <span>
                    <h4>{{ $history->email }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Email Verified </label>
                <span>
                    <h4>{{$history->email_verified_at}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Gender </label>
                <span>
                    <h4>{{$history->users_history_gender == 0 ? 'Female': 'Male'}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>About </label>
                <span>
                    <h4>{{$history->users_history_about}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>DOB </label>
                <span>
                    <h4>{{$history->users_history_dob->format('d/m/Y')}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Mobile </label>
                <span>
                    <h4>{{ $history->users_history_country_code . $history->users_history_mobile }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>City </label>
                <span>
                    <h4>{{$history->user_history_city->city_name}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Picture</label>
                <span>
                    <img src="{{asset('uploads/images/original/' . $history->users_history_photo)}}" style="width:100px;">
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Perfect Roommate Age </label>
                <span>
                    <h4>{{ $history->users_history_perfect_roommate_age_min .' - '. $history->users_history_perfect_roommate_age_max }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Perfect Roommate Gender</label>
                <span>
                    <h4>{{ $history->users_history_perfect_roommate_gender == 0 ? 'Female': 'Male'}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Choosed City </label>
                <span>
                    <h4>{{$history->user_history_choosed_city->city_name}}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Rent Budget </label>
                <span>
                    <h4>{{ $history->users_history_rent_budget }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Looking For Room </label>
                <span>
                    <h4>{{ $history->users_history_looking_for_room == 0 ? 'No': 'Yes' }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Status </label>
                <span>
                    <h4>
                        @switch($history->users_history_status)
                            @case(1)
                                {{ $history->user->users_approved_at ? 'Update' : 'Pending' }}
                                @break;
                          
                            @case(2)
                                Approved
                                @break;
                          
                              @default
                                Updated
                         @endswitch
                    </h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Created at </label>
                <span>
                    <h4>{{$history->users_history_created_at }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Updated at </label>
                <span>
                    <h4>{{ $history->users_history_updated_at }}</h4>
                </span>
            </li>
        </ul>
        @if($history->users_history_status == 1)
            <a href="{{route('admin.users.approve', $history->users_history_id)}}" class="btn btn-lg blue">Approve</a>
        @endif
    </div>
</div>
    @endsection
