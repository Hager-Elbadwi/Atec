@extends('admin::layout.master')
@section('title','Social link')
@section('content')
    <div class="portlet light portlet-fit portlet-datatable bordered">
            <div class="portlet-title">
              <!-- BEGIN social BREADCRUMB -->
              <ul class="social-breadcrumb breadcrumb" style="padding: 10px;">
                  <li>
                      <a href="{{ route('admin.dashboard') }}">Home</a>
                      <i class="fa fa-circle"></i>
                  </li>
                  <li>
                      <a href="{{ route('admin.social.index') }}">Social Link</a>
                      <i class="fa fa-circle"></i>
                  </li>
                  <li>
                      <span class="active">Social Link</span>
                  </li>
              </ul>
              <hr>
              <!-- END social BREADCRUMB -->
              <div class="actions">
                  <a href="{{route('admin.social.create')}}" class="btn blue   ">
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
                                    <th>Icon</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($socials as $social)
                                        <tr>
                                            <td> {{ $social->id }} </td>
                                            <td> {{ $social->name }} </td>
                                            <td><a href="{!!$social->link!!}" style="background:{{ $social->background }};color:{{ $social->color }};"><i class="{{ $social->icon }}" style="background:{{ $social->background }};color:{{ $social->color }}; "></i></a></td>
                                            <td> {{ $social->link }} </td>
                                            
                                            <td> 
                                                @switch($social->status)
                                                @case(1) Active @break
                                                @case(0) Inactive @break
                                                @default Super @endswitch
                                            </td>

                                           <td>
                                                <a href="{{route('admin.social.edit', $social->id)}}" class="btn btn-sm green"><i class="fa fa-edit"></i>
                                                </a>
                                                <form style="display: inline-block;" action="{{route('admin.social.destroy', $social->id)}}" method="post">
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
