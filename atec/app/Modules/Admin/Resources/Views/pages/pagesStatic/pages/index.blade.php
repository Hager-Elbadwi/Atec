@extends('admin::layout.master')
@section('title','Pages Static')
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
                      <span class="active">Pages</span>
                  </li>
              </ul>
              <hr>
              <!-- END PAGE BREADCRUMB -->
                <div class="actions">
                    <a href="{{route('admin.pages.create')}}" class="btn blue   ">
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
                                    <th class="hidden-xs">locale </th>

                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Paragraphs</th>
                                    <th>Images</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pages as $page)
                                    @foreach($page->translations as $trans)
                                        <tr>
                                            <td class="highlight">
                                                <div class="success"></div>
                                                <a href="javascript:;"> {{ App::getlocale() == $trans->locale? $page->id:'' }} </a>
                                            </td>
                                            <td class="hidden-xs"> {{ $trans->locale }} </td>

                                            <td> {{ $page->name }} </td>
                                            <td> {{ $trans->title }} </td>
                                            <td> {{  App::getlocale() == $trans->locale ? $page->status == 1? 'Active':'Not Active':''}} </td>
                                            <td>
                                                <a href="{{route('admin.pages.paragraphs.index',$page->id)}}" class="btn btn-sm blue">
                                                {{$page->paragraphs_count}}</a>
                                            </td>
                                            
                                             <td>
                                                <a href="{{route('admin.pages.images.index',$page->id)}}" class="btn btn-sm blue">
                                                {{$page->images_count}}</a>
                                            </td>
                                            
                                            
                                            <td>
                                                <a href="{{route('admin.pages.edit',$page->id)}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach

                            </tbody>
                        </table>
            </div>
        </div>
@endsection
