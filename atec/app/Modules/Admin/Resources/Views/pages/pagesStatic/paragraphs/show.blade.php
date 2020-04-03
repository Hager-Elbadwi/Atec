@extends('admin::layout.master')
@section('title','Pages Static')
@section('content')
    <!-- <div class="portlet light portlet-fit portlet-datatable bordered">
            <div class="portlet-title">
                <div class="actions">
                    <a href="{{route('admin.paragraphs.create')}}" class="btn blue   ">
                        Add New
                    </a>
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

                                @foreach ($paragraph as $paragraph)
                                    @foreach($paragraph->translations as $paragraph_trans)
                                        <tr>
                                            <td class="highlight">
                                                <div class="success"></div>
                                                <a href="javascript:;"> {{ App::getlocale() == $paragraph_trans->locale? $paragraph->paragraph_id:'' }} </a>
                                            </td>
                                            <td class="hidden-xs"> {{ $paragraph_trans->locale }} </td>

                                            <td> {{ $paragraph_trans->paragraph_text }} </td>
                                            <td> {{  App::getlocale() == $paragraph_trans->locale?$paragraph->paragraph_status == 1? 'Active':'Not Active':''}} </td>
                                            <td>

                                                <a href="{{route('admin.paragraphs.edit',$paragraph->paragraph_id)}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach

                            </tbody>
                        </table>
            </div>
        </div> -->
    
@endsection
