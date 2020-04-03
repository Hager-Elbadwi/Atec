
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
        <form method="POST" action="{{ route('admin.mails.store') }}">
            @csrf
            <div class="portlet-body">
               <div class="form-group">
                  <label for="name">Title</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="title" class="form-control" placeholder="Title" >
                  </div>
              </div>
               <div class="form-group">
                  <label for="name">Body</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="body" class="form-control" placeholder="Body" >
                  </div>
              </div>
              <div>
                  <label for="name">Message</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="msg" class="form-control" placeholder="Message" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="email">Input_Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="input_name" class="form-control" placeholder="Input_Name" >
                  </div>
              </div>
              
               <div class="form-group">
                  <label for="email">Link</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="link" class="form-control" placeholder="Link" >
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