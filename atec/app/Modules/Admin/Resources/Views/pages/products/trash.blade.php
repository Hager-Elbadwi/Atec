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
                        <a href="{{ route('admin.products.index') }}">Products</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Trash</span>
                    </li>
                </ul>
                <hr>
                <!-- END PAGE BREADCRUMB -->
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Products</span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                @if(session()->has('msg'))
                    <div class="alert alert-success text-center">
                        {!! session('msg') !!}
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
                        @foreach ($products as $product)
                            <tr>
                                <td> {{ $product->id }} </td>
                                <td> {{ $product->name }} </td>
                                <td> {{ $product->status == 1 ? 'Active' : 'Not Active' }} </td>
                                <td>
                                    <a href="{{ route('admin.products.edit',$product->id) }}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                                    </a>
                                    <form style="display: inline-block;" method="POST" action="{{route('admin.products.destroy',$product->id)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm red">Recovery</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </table>
                {{$products->links()}}
            </div>
        </div>

@endsection
