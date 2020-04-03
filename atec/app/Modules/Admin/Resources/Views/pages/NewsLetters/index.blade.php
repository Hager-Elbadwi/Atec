@extends('admin::layout.master')
@section('title', 'News Letter')
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
              <span class="active">News Letter</span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">News Letter</span>
        </div>
        <div class="actions">
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
                    <th>Email </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $n)
                <tr>
                    <td>{{ $n->id}} </td>
                    <td>{{ $n->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
