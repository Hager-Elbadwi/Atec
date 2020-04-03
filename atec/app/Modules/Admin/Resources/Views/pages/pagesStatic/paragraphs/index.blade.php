@extends('admin::layout.master')
@section('title','Pages Paragraphs Static')
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
                      <span class="active">Paragraphs</span>
                  </li>
              </ul>
              <!-- END PAGE BREADCRUMB -->
                <div class="actions">
                    <a href="{{route('admin.pages.paragraphs.create',$page->id)}}" class="btn blue   ">
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
                          <th>Text</th>
                          <th>Status</th>
                          <th>Control</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($paragraphs as $paragraph)
                          @foreach($paragraph->translations as $trans)
                              <tr>
                                  <td class="highlight">
                                      <div class="success"></div>
                                      <a href="javascript:;"> {{ App::getlocale() == $trans->locale? $paragraph->id:'' }} </a>
                                  </td>
                                  <td class="hidden-xs"> {{ $trans->locale }} </td>

                                  <td> {{ Str::limit($trans->text, 20) }} </td>
                                  <td> {{  App::getlocale() == $trans->locale ? $paragraph->status == 1? 'Active':'Not Active':''}} </td>
                                  <td>
                                      <a href="{{route('admin.pages.paragraphs.edit',[$page->id, $paragraph->id])}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
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
