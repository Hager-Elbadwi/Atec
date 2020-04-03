@extends('admin::layout.master')
@section('title', 'Add New')
@section('content')
<div class="portlet light portlet-fit portlet-datatable bordered">
    <div class="portlet-body">
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
              <span class="active">Create</span>
          </li>
      </ul>
      <hr>
      <!-- END PAGE BREADCRUMB -->
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $message)
                  <li>{{ $message }}</li>
              @endforeach
            </ul>
        </div>
      @endif
      <form method="POST" action="{{ route('admin.products.store') }}">
        @csrf
        <div class="portlet-body">
            <div class="form-body">
                <div class="form-group">
                  <label>Lenses</label>
                    <div class="input-icon right margin-top-10">
                        <select name="lens_id" calss="form-control">
                            @forelse ($lenses as $lens)
                                <option value="{{ $lens->id }}" {{ old('lens_id') == $lens->id ? 'selected' : '' }}>{{$lens->name}}</option>
                            @empty
                                <option value=""disabled>Not found Lenses</option>
                            @endforelse
                        </select>
                    </div>

                </div>
                <div class="form-group">
                  <label>Name</label>
                    <div class="input-icon right margin-top-10">
                        <textarea name="name" calss="form-control" cols="130" placeholder="insert product per line">{{ old("name") }}</textarea>
                    </div>

                </div>
            </div>
            <div class="form-actions left">
                <input type="submit" class="btn green" value="Submit">
            </div>
        </div>
    </form>
    </div>
</div>

@endsection
