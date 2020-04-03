@extends('admin::layout.master')
@section('title','Images')
@section('content')
<div class="portlet light portlet-fit portlet-datatable bordered">
    <div class="portlet-title">
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
              <span class="active">Images</span>
          </li>
      </ul>
      <!-- END PAGE BREADCRUMB -->
        <div class="actions">
            <a href="{{route('admin.pages.images.create',$page->id)}}" class="btn blue">
                Add New
            </a>
        </div>
    </div>
    <div class="portlet-body">
      @if(session()->has('msg'))
      <div class="alert alert-success text-center">
          {{session('msg')}}
      </div>
      @endif
        <table class="table striped2 table-bordered table-advance">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Image</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>

                  @foreach ($images as $image)
                  <tr>
                      <td class="highlight">
                          <a href="javascript:;">{{$image->image_id}}</a>
                      </td>

                      <td class="fileinput-new thumbnail" style="width: 50px;"><img src="{{asset('uploads/images/original/'.$image->photo)}}" alt=""></td>
                      <td>
                          <a href="{{route('admin.pages.images.edit',[$page->id, $image->image_id])}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                          </a>
                      </td>
                  </tr>
                  @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection
