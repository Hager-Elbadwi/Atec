@extends('admin::layout.master')
@section('title','Add New page')
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
              <a href="{{ route('admin.blogs.index') }}">Blogs</a>
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
        <form method="POST" action="{{route('admin.blogs.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="portlet-body">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                      @foreach($languages as $language)
                      <li class="{{$language->locale==App::getLocale()?'active':''}}">
                          <a href="#tab_15_{{$language->locale}}" data-toggle="tab" aria-expanded="false"> {{$language->name}} </a>
                      </li>
                      @endforeach
                  </ul>
                    <div class="tab-content">
                      <div class="form-group">
                          <label for="name">Photo</label>
                          <div class="input-icon right input-medium margin-top-10">
                              <i class="fa fa-check"></i>
                              <input type="file" name="photo" class="form-control" placeholder="page name" value="{{old('name') ? old("name"):''}}">
                          </div>
                      </div>
                     
                      @foreach($languages as $language)
                      <div class="tab-pane  {{$language->locale==App::getLocale()?'active':''}} " id="tab_15_{{$language->locale}}">
                            <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="portlet light bordered">
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <div class="input-icon right input-medium margin-top-10">
                                                            <i class="fa fa-check"></i>
                                                            <input type="text" name="{{$language->locale}}[title]" class="form-control" placeholder=" Title" value="{{old('name') ? old('name'):''}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <div class="input-icon right input-medium margin-top-10">
                                                            <i class="fa fa-check"></i>
                                                            <textarea name="{{$language->locale}}[description]"  class="form-control" placeholder="description" rows="8" cols="80">{{old($language->locale .'.description') ? old($language->locale .'.description'):''}}</textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach

                            <div class="form-actions left">
                                <input type="submit" class="btn green" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
