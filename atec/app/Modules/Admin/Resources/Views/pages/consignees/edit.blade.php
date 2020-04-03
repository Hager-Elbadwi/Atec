@extends('admin::layout.master')
@section('title', 'Edit')
@section('content')
<div class="portlet light portlet-fit portlet-datatable bordered">
    <div class="portlet-body">
      <!-- BEGIN PAGE BREADCRUMB -->
      <ul class="page-breadcrumb breadcrumb" style="padding: 10px;">
          <li>
              <a href="{{ route('admin.dashboard') }}">Home</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>zz
              <a href="{{ route('admin.admins.index') }}">Admins</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Update</span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $message)
                  <li>{{ $message }}</li>
              @endforeach
            </ul>
        </div>
      @endif
        <form method="POST" action="{{ route('admin.consignees.update', $consignee->id) }}">
            @csrf
            @method('PUT')
            <div class="portlet-body">
              
             
               <div class="form-group">
                  <label for="name">Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $consignee->name }}">
                  </div>
              </div>
             
          
              <div class="mt-radio-inline">
                  <label class="mt-radio">
                      <input type="radio" name="status" value="1" {{ $consignee->status == 1 ? 'checked' : '' }}> Active
                      <span></span>
                  </label>
                  <label class="mt-radio">
                      <input type="radio" name="status" value="0" {{ $consignee->status == 0 ? 'checked' : '' }}> Not Active
                      <span></span>
                  </label>
              </div> 
             
              <div class="form-actions left">
                  <input type="submit" class="btn green" value="Submit">
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
