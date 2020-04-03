
application/x-httpd-php create.blade.php ( ASCII HTML document text )
@extends('admin::layout.master')
@section('title', 'Add New')
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
              <span class="active">Create</span>
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
        <form method="POST" action="{{ route('admin.customers.store') }}">
            @csrf
            <div class="portlet-body">
               <div class="form-group">
                  <label for="name">First_Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="first_name" class="form-control" placeholder="Name" >
                  </div>
              </div>
               <div class="form-group">
                  <label for="name">Last_Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="last_name" class="form-control" placeholder="Name" >
                  </div>
              </div>
              <div>
                  <label for="name">Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="name" class="form-control" placeholder="Name" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="email" name="email" class="form-control" placeholder="Email" >
                  </div>
              </div>
              
               <div class="form-group">
                  <label for="email">Address</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="address" class="form-control" placeholder="address" >
                  </div>
              </div>
              
               <div class="form-group">
                  <label for="email">Phone</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="phone" class="form-control" placeholder="phone" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
              </div>
              <div class="form-group">
                  <label for="password">Confirm Password</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
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