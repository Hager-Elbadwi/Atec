@extends('admin::layout.master')
@section('title','Admins')
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
                <span class="active">Filters</span>
            </li>
           
        </ul>
        <hr>
        <!-- END PAGE BREADCRUMB -->
        <div class="actions">
            <a href="{{route('admin.filter.create')}}" class="btn blue">
                Add New
            </a>
            <a href="{{route('admin.filter.trash')}}" class="btn red">
                Trash
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
                    <th>Parent</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($filters as $fil)
                    <tr style="background-color: #3b3f51;color: #fff;">
                        <td class="highlight">
                            {{ $fil->id }}
                        </td>
                        <td>
                            {{-- <span class="badge badge-roundless badge-success">Parent</span> --}}
                        </td>
                        <td> {{ $fil->text }}

                            {{-- {{ $fil->text }}  --}}
                        </td>
                        <td> {{ $fil->status == 1? 'Active' : 'Not Active' }} </td>
                        <td>
                            <a href="{{route('admin.filter.edit', $fil->id)}}" class="btn btn-sm green">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form style="display:inline-block" action="{{route('admin.filter.destroy', $fil->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm red"><i class="icon-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    
                        @forelse ($fil->children->where('deleted_at', null) as $filter)
                            <tr>
                                <td class="highlight">
                                    {{ $filter->id }}
                                </td>
                                <td>
                                    <span class="badge badge-roundless badge-primary">{{  $filter->parent_id . ' : ' . $filter->parent->text}} </span>
                                </td>
                                <td> {{ $filter->text }} </td>
                                <td> {{ $filter->status == 1? 'Active' : 'Not Active' }} </td>
                                <td>
                                    <a href="{{route('admin.filter.edit', $filter->id)}}" class="btn btn-sm green">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form style="display:inline-block" action="{{route('admin.filter.destroy', $filter->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm red"><i class="icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                @empty
                @endforelse

            </tbody>
        </table>
    </div>
</div>    

@endsection
