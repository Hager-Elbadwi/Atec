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
                  <span class="active">Users</span>
              </li>
          </ul>
          <hr>
          <!-- END PAGE BREADCRUMB -->
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Users</span>
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
                        <th> Name </th>
                        <th> Email </th>
                        <th> Mobile </th>
                        <th> Status </th>
                        <th> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                      <tr>
                          <td class="highlight">
                              <div class="success"></div>
                              <a href="javascript:;"> {{ $user->id}} </a>
                          </td>
                          <td class="hidden-xs"> {{ $user->name}}</td>
                          <td> {{ $user->email}} </td>
                          <td> {{ $user->mobile}} </td>
                          <td>
                              {{$user->user}}
                     
                          </td>
                       
                          <td>
                              <a href="{{ route('admin.users.show', $user->id) }}" class="btn   btn-sm blue"><i class="icon-eye"></i>
                              </a>
                          </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $users->links() }}
@endsection
