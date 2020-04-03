@extends('admin::layout.master')
{{-- @section('title','Contacts Us') --}}
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
                    <span class="active">Contacts Us</span>
                </li>
            </ul>
            <hr>
            <!-- END PAGE BREADCRUMB -->
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Contacts Us</span>
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
                                <th>Subject</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($contacts as $contact)
                                <tr>
                                    <td> {{ $contact->subject }} </td>
                                    <td> {{ $contact->name }} </td>
                                    <td> {{ $contact->email }} </td>
                                    <td>
                                        <a href="{{route('admin.contact.show',$contact->id)}}" class="btn btn-sm blue"><i class="icon-eye"></i>
                                            </a>
                                        <form style="display: inline-block;" method="POST" action="{{route('admin.contact.destroy',$contact->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm red"><i class="icon-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{$contacts->links()}}
        </div>
    </div>

@endsection
