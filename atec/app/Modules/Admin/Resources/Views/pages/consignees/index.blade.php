@extends('admin::layout.master')
@section('title','Customers')
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
                        <span class="active">Admins</span>
                    </li>
                </ul>
                <hr>
                <!-- END PAGE BREADCRUMB -->
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Consignees</span>
                </div>
                <div class="actions">
                    <a href="{{route('admin.consignees.create')}}" class="btn blue">
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
                    <table class="table table-bordered table-advance">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($consignees as $consignee)
                                    <tr>
                                        <td> {{ $consignee->id }} </td>
                                        <td> {{ $consignee->name }} </td>
                                          <td> {{ $consignee->status == 1 ? 'Active' : 'Not Active' }} </td>                                        <td>
                                            <a href="{{route('admin.consignees.edit',$consignee->id)}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                                            </a>
                                            <form style="display: inline-block;" method="POST" action="{{route('admin.consignees.destroy',$consignee->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm red"><i class="icon-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
            </div>
        </div>

@endsection
