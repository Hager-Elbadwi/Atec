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
                    <form action="{{ route('admin.users.search') }}" method="POST">
                        @csrf

                        <th><input type="text" name="id" placeholder="Search By ID" class="col-3"></th>
                        <th><input type="text" name="name" placeholder="Search By Name" class="col-3"></th>
                        <th><input type="text" name="email" placeholder="Search By Email" class="col-3"></th>
                        <th><input type="text" name="mobile" placeholder="Search By Mobile" class="col-3"></th>
                        <th><select name="status">
                                <option disabled selected>Status</option>
                                <option value="0">Pending</option>
                                <option value="1">Active</option>
                                <option value="2">Updated</option>
                                <option value="3">Deleted</option>
                              </select></th>
                              <th></th>
                        <th><button type="submit" class="btn btn-primary col-3">Search</button></th>
                    </form>
                  </tr>
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Mobile </th>
                        <th> Status </th>
                        <th> History </th>
                        <th> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="highlight">
                            <div class="success"></div>
                            <a href="javascript:;"> {{ $user->users_id}} </a>
                        </td>
                        <td class="hidden-xs"> {{ $user->users_name}}</td>
                        <td> {{ $user->email}} </td>
                        <td> {{ $user->users_mobile}} </td>
                        <td>

                            @if ($user->users_approved === 0)
                                Pending
                            @elseif ($user->users_approved === 1)
                                Active
                            @elseif ($user->users_approved === 2)
                                Updated
                            @else
                                Deleted
                            @endif

                        </td>
                <td> <a href="{{ route('admin.users.history',['id'=>$user->users_id]) }}">{{ $user->userhistory_count}}</a> </td>
                        <td>
                            <a href="{{ route('admin.users.show',['id'=>$user->users_id]) }}" class="btn   btn-sm blue">
                                <i class="fa fa-eye"></i> Show
                            </a>

                            <form  style="display: inline;" method="POST" action="{{ route('admin.users.destroy',['id'=>$user->users_id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn   btn-sm red"><i class="fa fa-trash-o"></i> Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $users->links() }}
@endsection
