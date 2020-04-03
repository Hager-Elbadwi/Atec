@extends('customer::layout.master')
@section('content')
<div class="section">
    <div class="row">
        @include('customer::layout.sidebar')

        <!---- start of col 9------>
        <div class="col-9 secondpart" style="margin-top:20px;">
            <!-- Button trigger modal -->
            <div>
                <button type="button"
                    urlFormEdit="{{ route('customer.employees.store') }}"
                    nameFormEdit=""
                    class="btn btn-secondary edit_employee" 
                    data-toggle="modal" 
                    data-target="#editModel"
                    style="margin-top:60px;"
                    >
                     Add Employee 
                </button>

                <!-- Modal Edit -->
                <div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Izone Opstics</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form method="POST" id="formEditEmployee">
                            @csrf
                            <div class="modal-body">
                                @csrf
                                <div class="portlet-body">
                                    <div class="form-group">
                                        <label for="name">Employee Name</label>
                                        <div class="input-icon right input-medium margin-top-10">
                                            <input type="text" name="name" class="form-control" id="inputEditEmployee" value="" placeholder="Name" >
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <!---- end of modal----->
            </div> 
            
            <!---- start of table section---->
            <div class="portlet-body" style="height: 400px;padding: 63px;">
                @if(session()->has('msg'))
                    <div class="alert alert-success text-center">
                        {{session('msg')}}
                    </div>
                @endif
                <!------- start of table----->
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
                        @foreach ($employees as $employee)
                            <tr>
                                <td> {{ $employee->id }} </td>
                                <td> {{ $employee->name }} </td>
                                <td> {{ $employee->status == 1 ? 'Active' : 'Not Active' }} </td>
                                <td>
                                    <button type="button"
                                        urlFormEdit="{{route('customer.employees.update', $employee->id)}}"
                                        nameFormEdit="{{$employee->name}}"
                                        class="btn btn-secondary edit_employee" 
                                        data-toggle="modal" 
                                        data-target="#editModel"
                                        >
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <form style="display: inline-block;" method="POST" action="{{route('customer.employees.delete', $employee->id)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-secondary"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!------end of table------>
            </div>
            <!-------end of table section----->
        </div>
        <!-----end of col 9 ------>
    </div>
</div>
@endsection