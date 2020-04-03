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
              <span class="active">Roles</span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
        <div class="actions">
            <a href="{{route('admin.roles.create')}}" class="btn blue   ">Add New
            </a>
        </div>
    </div>
    <div class="portlet-body">
        @if(session()->has('msg'))
          <div class="alert alert-success text-center">
              {{session('msg')}}
          </div>
        @endif
        <table class="table table-bordered table-advance">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                  <tr>
                      <td class="highlight">
                          <div class="success"></div>
                          <a href="javascript:;"> {{ $role->id }} </a>
                      </td>
                      <td> {{ $role->name }}</td>
                      <td>
                        @unless ($role->id == 1)
                          <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                          </a>
                          <form style="display:inline-block;" action="{{ route('admin.roles.destroy', $role->id) }}" method="post">
                              @method('DELETE')
                              @csrf
                            <button type="submit" onclick="if (!confirm('Are you sure you want to delete?')) { return false }" class="btn btn-sm red"><i class="fa fa-trash"></i></button>

                          </form>
                        @endunless
                      </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{$roles->links()}}
@endsection
