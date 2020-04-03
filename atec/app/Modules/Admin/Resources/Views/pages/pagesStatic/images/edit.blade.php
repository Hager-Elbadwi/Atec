@extends('admin::layout.master')
@section('title','Edit Image')
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
              <a href="{{ route('admin.pages.images.index', $page->id) }}">Images</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Update</span>
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
        <form method="POST" action="{{route('admin.pages.images.update',[$page->id , $image->image_id])}}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="portlet-body">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="form-group last">
                               <label class="control-label col-md-3">Image</label>
                               <div class="col-md-9">
                                   <div class="fileinput fileinput-new" data-provides="fileinput">
                                       <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                           <img src="{{asset('uploads/images/medium/'.$image->photo)}}" alt=""> </div>
                                       <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                       <div>
                                           <span class="btn default btn-file">
                                               <span class="fileinput-new"> Select image </span>
                                               <span class="fileinput-exists"> Change </span>
                                               <input type="file" name="photo"> </span>
                                           <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                       </div>
                                   </div>
                                   <div class="clearfix margin-top-10">

                                  </div>
                               </div>
                        </div>
                        <div class="form-actions left">
                            <input type="submit" class="btn green" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="page_id" value="{{$page->id}}">
        </form>
    </div>
</div>

@endsection
