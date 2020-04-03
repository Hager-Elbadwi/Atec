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
        <form method="POST" action="{{ route('admin.mails.update', $mailmessage->id) }}">
            @csrf
            @method('PUT')
            <div class="portlet-body">
           
               <div class="form-group">
                  <label for="name">Title</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $mailmessage->title }}" >
                  </div>
              </div>
               <div class="form-group">
                  <label for="name">Body</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="body" class="form-control" placeholder="Body" value="{{ $mailmessage->body }}">
                  </div>
              </div>
              <div>
                  <label for="name">Message</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="msg" class="form-control" placeholder="Message"value="{{ $mailmessage->msg }}" >
                  </div>
              </div>
              <div class="form-group">
                  <label for="email">Input_Name</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="input_name" class="form-control" placeholder="Name" value="{{ $mailmessage->input_name }}" >
                  </div>
              </div>
              
               <div class="form-group">
                  <label for="email">Link</label>
                  <div class="input-icon right input-medium margin-top-10">
                      <i class="fa fa-check"></i>
                      <input type="text" name="link" class="form-control" placeholder="Link" value="{{ $mailmessage->link }}" >
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
