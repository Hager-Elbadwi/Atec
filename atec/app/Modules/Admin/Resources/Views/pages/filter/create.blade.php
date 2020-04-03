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
            <a href="{{ route('admin.filter.index') }}">Filters</a>
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
            
            <form method="POST" action="{{ route('admin.filter.store') }}"  enctype="multipart/form-data">
            @csrf
            <div class="portlet-body">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_15_filter" data-toggle="tab" aria-expanded="false"> Filter </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_15_filter">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="portlet light bordered">
                                        <div class="portlet-body form">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="input-icon right input-medium margin-top-10">
                                                      <label>Name</label>
                                                        <input type="text" name="text" class="form-control" value="{{old('text')}}"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                          <div class="row">
                            
                            <div class="col-md-12 ">
                                <div class="portlet light bordered">
                                    <div class="portlet-body form">
                                        <div class="form-group">
                                            <div class="input-icon right input-medium margin-top-10">
                                                <label>Parent Filter</label>
                                                <input type="hidden" name="type" value="2">

                                                <select name="parent_id" class="form-control">
                                                    <option value="0">Not Parent</option>
                                                    @forelse ($filters as $item)
                                                            
                                                        <option value="{{ $item->id }}">{{ $item->text }}</option>
                                                    @empty
                                                        
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="mt-radio-inline">
                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios25" value="1" checked=""> Active
                                <span></span>
                            </label>
                            <label class="mt-radio">
                                <input type="radio" name="status" id="optionsRadios26" value="0"> Not Active
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
