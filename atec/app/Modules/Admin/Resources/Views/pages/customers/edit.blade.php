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
          <li>
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
        <form method="POST" action="{{ route('admin.customers.update', $customer->id) }}">
            @csrf
            @method('PUT')
            <div class="portlet-body">
              <!--<div class="form-group">-->
              <!--    <label for="name">Name</label>-->
              <!--    <div class="input-icon right input-medium margin-top-10">-->
              <!--        <i class="fa fa-check"></i>-->
              <!--        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $customer->name }}">-->
              <!--    </div>-->
              <!--</div>-->
              <!--<div class="form-group">-->
              <!--    <label for="email">Email</label>-->
              <!--    <div class="input-icon right input-medium margin-top-10">-->
              <!--        <i class="fa fa-check"></i>-->
              <!--        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $customer->email }}">-->
              <!--    </div>-->
              <!--</div>-->
              <!--<div class="form-group">-->
              <!--    <label for="password">Password</label>-->
              <!--    <div class="input-icon right input-medium margin-top-10">-->
              <!--        <i class="fa fa-check"></i>-->
              <!--        <input type="password" name="password" class="form-control" placeholder="Password">-->
              <!--    </div>-->
              <!--</div>-->
              <!--<div class="form-group">-->
              <!--    <label for="password">Confirm Password</label>-->
              <!--    <div class="input-icon right input-medium margin-top-10">-->
              <!--        <i class="fa fa-check"></i>-->
              <!--        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">-->
              <!--    </div>-->
              <!--</div>-->
              
              
              
               <div class="form-group">
                  <label for="name">First_Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="first_name" class="form-control" placeholder="Name" value="{{ $customer->first_name }}" >
                  </div>
              </div>
               <div class="form-group">
                  <label for="name">Last_Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="last_name" class="form-control" placeholder="Name" value="{{ $customer->last_name }}">
                  </div>
              </div>
              <div>
                  <label for="name">Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="name" class="form-control" placeholder="Name"value="{{ $customer->name }}" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $customer->email }}" >
                  </div>
              </div>
              
               <div class="form-group">
                  <label for="email">Address</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="address" class="form-control" placeholder="address" value="{{ $customer->address }}" >
                  </div>
              </div>
              
               <div class="form-group">
                  <label for="email">Phone</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="phone" class="form-control" placeholder="phone"value="{{ $customer->phone }}" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="password" name="password" class="form-control" placeholder="Password" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="password">Confirm Password</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                  </div>
              </div>
          
              <div class="mt-radio-inline">
                  <label class="mt-radio">
                      <input type="radio" name="status" value="1" {{ $customer->status == 1 ? 'checked' : '' }}> Active
                      <span></span>
                  </label>
                  <label class="mt-radio">
                      <input type="radio" name="status" value="0" {{ $customer->status == 0 ? 'checked' : '' }}> Not Active
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
