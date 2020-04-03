@extends('admin::layout.master')

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
              <a href="{{ route('admin.social.index') }}">Social Link</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Create</span>
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
        <form method="POST" action="{{ route('admin.social.store') }}">
            @csrf
            <div class="portlet-body">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="">
                          <div class="row">
                              <div class="col-md-12 ">
                                  <div class="portlet light bordered">
                                      <div class="portlet-body form">
                                          <div class="form-body">

                                              <div class="form-group">
                                                  <div class="input-icon right input-medium margin-top-10">
                                                      <label>Name</label>
                                                      <input type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}"> </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="input-icon right input-medium margin-top-10">
                                                      <label>Icon</label>
                                                      <input type="text" name="icon" class="form-control" placeholder="icon" value="{{old('icon')}}"> </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="input-icon right input-medium margin-top-10">
                                                      <label>Link</label>
                                                      <input type="text" name="link" class="form-control" placeholder="link" value="{{old('link')}}"> </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="mt-radio-inline">

                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios25" value="0" checked=""> Inactive
                                <span></span>
                            </label>

                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios26" value="1">Active
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
