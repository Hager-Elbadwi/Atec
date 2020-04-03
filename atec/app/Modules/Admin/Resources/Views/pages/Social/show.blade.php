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
                        <a href="{{ route('admin.pages.index') }}">Pages</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Show</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <div class="actions">
                    <a href="" class="btn blue   ">
                        Add New
                    </a>
                    <div class="btn-group">
                        <a class="btn red  " href="javascript:;" data-toggle="dropdown">
                            <i class="fa fa-share"></i>
                            <span class="hidden-xs"> Tools </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" id="datatable_ajax_tools">
                            <li>
                                <a href="javascript:;" data-action="0" class="tool-action">
                                    <i class="icon-printer"></i> Print</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="1" class="tool-action">
                                    <i class="icon-check"></i> Copy</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="2" class="tool-action">
                                    <i class="icon-doc"></i> PDF</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="3" class="tool-action">
                                    <i class="icon-paper-clip"></i> Excel</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="4" class="tool-action">
                                    <i class="icon-cloud-upload"></i> CSV</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="javascript:;" data-action="5" class="tool-action">
                                    <i class="icon-refresh"></i> Reload</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="portlet-body">
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
                                @foreach ($pages as $page)
                                    @foreach($page->translations as $page_trans)
                                        <tr>
                                            <td class="highlight">
                                                <div class="success"></div>
                                                <a href="javascript:;"> {{ App::getlocale() == $page_trans->locale? $page->page_id:'' }} </a>
                                            </td>
                                            <td class="hidden-xs"> {{ $page_trans->locale }} </td>

                                            <td> {{ $page_trans->page_text }} </td>
                                            <td> {{  App::getlocale() == $page_trans->locale?$page->page_status == 1? 'Active':'Not Active':''}} </td>
                                            <td>
                                                <a href="" class="btn   btn-sm blue"><i class="icon-eye"></i>
                                                </a>
                                                <a href="" class="btn btn-sm green"><i class="fa fa-edit"></i>
                                                </a>
                                                @if( App::getlocale() == $page_trans->locale)
                                                    <form style="display: inline-block;" method="POST" action="">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="submit" value="Delete" class="btn   btn-sm red">
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach

                            </tbody>
                        </table>
            </div>
        </div>
    <!-- END PAGE BASE CONTENT -->
@endsection
