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
              <a href="{{ route('admin.social.index') }}">Social</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Update</span>
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
        <form method="POST" action="{{ route('admin.social.update', $social->id) }}">
            @method('PATCH')
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
                                                    <label>name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="name" value="{{old('name', $social->name)}}"> </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="input-icon right input-medium margin-top-10">
                                                    <label>Icon</label>
                                                    <input type="text" name="icon" class="form-control" placeholder="icon" value="{{old('icon', $social->icon)}}"> </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="input-icon right input-medium margin-top-10">
                                                    <label>link</label>
                                                    <input type="text" name="link" class="form-control" placeholder="link" value="{{old('link', $social->link)}}"> </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="input-icon right input-medium margin-top-10">
                                                    <label>Background Color</label>
                                                    <input type="color" name="background" class="form-control" placeholder="link" value="{{old('link', $social->background)}}"> </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="input-icon right input-medium margin-top-10">
                                                    <label>Font Color</label>
                                                    <input type="color" name="color" class="form-control" placeholder="link" value="{{old('link', $social->color)}}"> </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="mt-radio-inline">
                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios25" value="0" {{$social->status == 0 ? 'checked' : ''}}> Inactive
                                <span></span>
                            </label>
                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios26" value="1" {{$social->status == 1 ? 'checked' : ''}}>Active
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
