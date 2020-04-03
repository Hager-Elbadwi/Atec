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
                        <span class="active">Products</span>
                    </li>
                </ul>
                <hr>
                <!-- END PAGE BREADCRUMB -->
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Products</span>
                </div>
                <div class="actions">
                    <a href="{{route('admin.products.create')}}" class="btn blue">
                        Add New
                    </a>
                    <a href="{{route('admin.products.trash')}}" class="btn red">
                        Trash
                    </a>
                </div>
            </div>
            
            
            <div class="portlet-body">
                @if(session()->has('msg'))
                    <div class="alert alert-success text-center">
                        {!! session('msg') !!}
                    </div>
                @endif
                <table class="table table-bordered table-advance">
                    <div class="accordion" id="accordionExample" style="margin-top:10px">
                        <div class="card_talent">
                            <div class="card-header black_background" id="headingOne" style="padding: 0px;">
                                <p class="mb-0 yallow_color collapsed"  data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" style="cursor: pointer;">
                                    Search
                                <i class="icon-sort-down" style="margin-left:2px"></i>
                            </p>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body black_background">
                                    <form class="row" action="{{route('admin.products.index')}}" method="GET">
                                        @csrf
                                        <input type="text" name="name">
                                        <input type="submit" name="Search" class="btn black">   
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            {{-- <th>Status</th> --}}
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td> {{ $product->id }} </td>
                                <td> {{ $product->name }} </td>
                                {{-- <td> {{ $product->status == 1 ? 'Active' : 'Not Active' }} </td> --}}
                                <td>
                                    <a href="{{ route('admin.products.edit',$product->id) }}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                                    </a>
                                    <form style="display: inline-block;" method="POST" action="{{route('admin.products.destroy',$product->id)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm red"><i class="icon-trash"></i></button>
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
