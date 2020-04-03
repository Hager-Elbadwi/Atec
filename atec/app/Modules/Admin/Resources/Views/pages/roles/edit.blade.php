@extends('admin::layout.master')
@section('title', 'Roles')
@section('content')
<div class="portlet light portlet-fit portlet-datatable bordered">
    <div class="portlet-body">
      <!-- BEGIN PAGE BREADCRUMB -->
      <ul class="page-breadcrumb breadcrumb" style="padding: 10px;">
          <li>
              <a href="{{ route('admin.dashboard') }}">Home</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <a href="{{ route('admin.roles.index') }}">Roles</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Update 
{{--                 <em><code>
                 @foreach($lang as $l)
                  {{$role->translate($l->locale)->name}} {{ ($loop->last)? '': '-' }} 
                 @endforeach
                 </code></em> --}}
              </span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
      @if($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $message)
                  <li>{{$message}}</li>
              @endforeach
            </ul>
        </div>
      @endif
        <form method="POST" action="{{ route('admin.roles.update', $role->id) }}">
            @csrf
            @method('PATCH')
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="portlet light bordered">
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="form-group">
                                      <label>Role Name</label>
                                        <div class="input-icon right input-medium margin-top-10">
                                            <i class="fa fa-check"></i>
                                            <input type="text" name="name" class="form-control" placeholder="Add New Role" value="{{ $role->name }}"> </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Permissions</label>
                                        <?php $page = null ?>
                                      <div class="row" style="padding: 10px; border-bottom: 1px solid #eee">
                                        @forelse ($permissions as $permission)
                                          @if ($page != $permission->page)
                                            </div>
                                            <div class="row" style="padding: 10px; border-bottom: 1px solid #eee">
                                              <div class="col-md-2"><strong>{{ $permission->page }}:</strong></div>
                                          @endif

                                          <div class="col-md-2">
                                            <?php 
                                              $checked = $role->hasPermissionTo($permission->name);
                                             ?>
                                            <label>
                                              <input type="checkbox" name="{{ 'permissions['. $permission->name .']' }}" value="{{ $permission->name }}" {{ $checked ? 'checked' : '' }}>
                                              {{ $permission->action }}
                                            </label>
                                          </div>

                                            <?php $page = $permission->page ?>
                                        @empty
                                          <h3 class="text-danger">No Permission Found</h3>
                                        @endforelse
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="form-actions left">
                  <input type="submit" class="btn green" value="Submit">
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
