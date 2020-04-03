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
              <a href="{{ route('admin.pages.index') }}">Pages</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <a href="{{ route('admin.pages.paragraphs.index', $page->id) }}">Paragraphs</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Create</span>
          </li>
      </ul>
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
        <form method="POST" action="{{route('admin.pages.paragraphs.store', $page->id)}}">
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
                        <div class="mt-radio-inline">
                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios25" value="1" checked=""> Active
                                <span></span>
                            </label>
                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios26" value="0" > Not Active
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
                                                        <label for="{{$l->locale}}[text]">Text</label>
                                                        <div class="input-icon right input-medium margin-top-10">
                                                            <i class="fa fa-check"></i>
                                                            <input type="text" name="{{$l->locale}}[text]" class="form-control" placeholder="Text" value="{{old($l->locale .'.text') ? old($l->locale .'.text'):''}}">
                                                        </div>
                                                    </div>
                                                    <div class="portlet light bordered">
                                                        <label for="{{$l->locale}}[style_text]">Style Text</label>
                                                        <div class="input-icon right  margin-top-10">
                                                            <i class="fa fa-check"></i>
                                                            <textarea type="text" name="{{$l->locale}}[style_text]" class="form-control wysihtml5" placeholder="Text" rows="24"> {{old($l->locale .'.style_text') ? old($l->locale .'.style_text'):''}}</textarea>
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
                @csrf
            <input type="hidden" name="page_id" value="{{$page->id}}">
        </form>
    </div>
</div>

@endsection
