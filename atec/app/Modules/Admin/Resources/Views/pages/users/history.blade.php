@extends('admin::layout.master')
@section('content')
<div class="portlet light portlet-fit portlet-datatable bordered">
        <div class="portlet-title">
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
                  <span class="active">Users History</span>
              </li>
          </ul>
          <hr>
          <!-- END PAGE BREADCRUMB -->
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Users History</span>
            </div>
            <div class="actions">
            </div>
        </div>
        <div class="portlet-body">
          @if(session()->has('msg'))
            <div class="alert alert-success text-center">
                {{session('msg')}}
            </div>
          @endif
            <table class="table striped2 table-bordered table-advance">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Username </th>
                        <th> Email </th>
                        <th> Mobile </th>
                        <th> Status </th>
                        <th> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($histories as $history)
                    <tr>
                        <td class="highlight">
                            <div class="success"></div>
                            <a href="javascript:;"> {{ $history->users_history_id}} </a>
                        </td>
                        <td> {{ $history->users_history_name}}</td>
                        <td> {{ $history->email}} </td>
                        <td> {{ $history->users_history_country_code . $history->users_history_mobile}} </td>
                        <td>
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
                        </td>
                        <td>
                            <a href="{{ route('admin.users.showHistory',['id'=>$history->users_history_id]) }}" class="btn   btn-sm blue">
                                <i class="fa fa-eye"></i> Show
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
