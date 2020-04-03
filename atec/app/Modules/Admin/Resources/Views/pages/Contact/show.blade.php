@extends('admin::layout.master')
@section('content')
<div class="portlet light bordered">
    <div class="portlet-body">
      <!-- BEGIN PAGE BREADCRUMB -->
      <ul class="page-breadcrumb breadcrumb" style="padding: 10px;">
          <li>
              <a href="{{ route('admin.dashboard') }}">Home</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <a href="{{ route('admin.contact.index') }}">contacts</a>
              <i class="fa fa-circle"></i>
          </li>
          <li>
              <span class="active">Show</span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
        <h4 class="block">Show</h4>
        <ul class="list-group">
            <style>
                .show-data label {
                    width: 10%;
                }

                .show-data span h4,
                img {
                    display: -webkit-inline-box;
                    margin-right: 20px;
                }
            </style>

            
            <li class="list-group-item show-data">
                <label>Name </label>
                <span>
                    <h4>{{ $contact->name }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Email </label>
                <span>
                    <h4>{{ $contact->email }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Mobile </label>
                <span>
                    <h4>{{ $contact->mobile ? $contact->mobile : 'Not Found' }}</h4>
                </span>
            </li>
            <li class="list-group-item show-data">
                <label>Subject </label>
                <span>
                    <h4>{{ $contact->subject }}</h4>
                </span>
            </li>
           
            <li class="list-group-item show-data">
                <label>Description </label>
                <span>
                    <h4>{{ $contact->description }}</h4>
                </span>
            </li>
           
            
        </ul>
    </div>
</div>
@endsection
