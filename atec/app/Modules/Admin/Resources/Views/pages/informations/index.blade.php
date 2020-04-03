@extends('admin::layout.master')
@section('title','informations')
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
                      <span class="active">informations</span>
                  </li>
              </ul>
              <hr>
               <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">informations</span>
                </div>
              <!-- END PAGE BREADCRUMB -->
                <div class="actions">
                    <a href="{{route('admin.informations.create')}}" class="btn blue   ">
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
                                    <th>Text</th>
                                    <th>Status</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($infos as $info)
                                    @foreach($info->translations as $trans)
                                        <tr>
                                            <td class="highlight">
                                                <div class="success"></div>
                                                <a href="javascript:;"> {{ App::getlocale() == $trans->locale? $info->id:'' }} </a>
                                            </td>
                                            <td class="hidden-xs"> {{ $trans->locale }} </td>
                                            <td> {{ $trans->name }} </td>
                                            <td> {{ $trans->text }} </td>
                                            <td> {{ $info->status == 1 ? 'Active' : 'Not Active' }} </td>
                                            
                                            <td>
                                                <a href="{{route('admin.informations.edit',$info->id)}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
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
