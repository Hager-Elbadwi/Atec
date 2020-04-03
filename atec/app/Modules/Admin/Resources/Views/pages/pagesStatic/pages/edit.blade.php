@extends('admin::layout.master')
@section('title','Edit Page')
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
              <a href="{{ route('admin.pages.index') }}">Pages</a>
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
        <form method="POST" action="{{route('admin.pages.update',$page->id)}}">
            @csrf
            @method('PATCH')
            <div class="portlet-body">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                      @foreach($lang as $l)
                      <li class="{{$l->locale==App::getLocale()?'active':''}}">
                          <a href="#tab_15_{{$l->locale}}" data-toggle="tab" aria-expanded="false"> {{$l->name}} </a>
                      </li>
                      @endforeach
                  </ul>
                    <div class="tab-content">
                      <div class="form-group">
                          <label for="name">Page Name</label>
                          <div class="input-icon right input-medium margin-top-10">
                              <i class="fa fa-check"></i>
                              <input type="text" name="name" class="form-control" value="{{$page->name}}">
                          </div>
                      </div>
                      <div class="mt-radio-inline">
                          <label class="mt-radio">
                              <input type="radio" name="status" id="optionsRadios25" value="1" {{$page->status == 1 ? 'checked=""':''}}> Active
                              <span></span>
                          </label>
                          <label class="mt-radio">
                              <input type="radio" name="status" id="optionsRadios26" value="0" {{$page->status == 0 ? 'checked=""':''}}> Not Active
                              <span></span>
                          </label>
                      </div>
                      <div class="mt-radio-inline">
                            <label class="mt-radio">
                                <input type="radio" name="menu" value="1" {{ $page->menu == 1 ? 'checked' : '' }}> Visible in menu
                                <span></span>
                            </label>
                            <label class="mt-radio">
                                <input type="radio" name="menu" value="2" {{ $page->menu == 2 ? 'checked' : '' }}> Hidden in menu
                                <span></span>
                            </label>
                        </div>
                      @foreach($lang as $l)
                      <div class="tab-pane  {{$l->locale==App::getLocale()?'active':''}} " id="tab_15_{{$l->locale}}">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="portlet light bordered">
                                            <div class="portlet-body form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label for="title">Page Title</label>
                                                        <div class="input-icon right input-medium margin-top-10">
                                                            <i class="fa fa-check"></i>
                                                            <input type="text" name="{{$l->locale}}[title]" class="form-control" value="{{$page->translate($l->locale)->title}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keywords">Pages Keywords</label>
                                                        <div class="input-icon right input-medium margin-top-10">
                                                            <i class="fa fa-check"></i>
                                                            <textarea name="{{$l->locale}}[keywords]"  class="form-control" rows="8" cols="80">{{$page->translate($l->locale)->keywords}}</textarea>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mate_desc">Meta Description</label>
                                                        <div class="input-icon right input-medium margin-top-10">
                                                            <i class="fa fa-check"></i>
                                                            <textarea name="{{$l->locale}}[meta_desc]" class="form-control" rows="8" cols="80">{{$page->translate($l->locale)->meta_desc}}</textarea>
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
