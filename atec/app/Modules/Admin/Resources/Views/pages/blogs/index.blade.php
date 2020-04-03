@extends('admin::layout.master')
@section('title','Blogs')
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
                      <span class="active">Blogs</span>
                  </li>
              </ul>
              <hr>
               <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Blogs</span>
                </div>
              <!-- END PAGE BREADCRUMB -->
                <div class="actions">
                    <a href="{{route('admin.blogs.create')}}" class="btn blue   ">
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
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($blogs as $blog)
                                    @foreach($blog->translations as $trans)
                                        <tr>
                                            <td class="highlight">
                                                <div class="success"></div>
                                                <a href="javascript:;"> {{ App::getlocale() == $trans->locale? $blog->id:'' }} </a>
                                            </td>
                                            <td class="hidden-xs"> {{ $trans->locale }} </td>
                                            <td>{{$blog->photo}}</td>
                                            <td> {{ $trans->title }} </td>
                                            <td> {{ $trans->description }} </td>
                                            
                                            <td>
                                                <a href="{{route('admin.blogs.edit',$blog->id)}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
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
