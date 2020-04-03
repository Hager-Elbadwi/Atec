@extends('customer::layout.master')
@section('content')
       
    @include('customer::layout.sidebar')
                
    
    <div class="col-9 secondpart" style="margin-top:20px;">
        <div class="container">

            <!------- Search ---------------------------->
            <div class="row">
                <div class="container">
                    <div class="col-12" style=" margin-top:74px;">
                        <form style="display: flex;margin-top:20px;justify-content: space-between;">
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
    
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Email </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
    
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Phone</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
    
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Number</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"  >
                            </div>
                            <a href="#"><i class="fa fa-search" style="margin-top:40px;"></i></a>
                                
                    </form>
                    </div>
                </div>
            </div>
            <!------- End Search ------------------------>
            

            <!------- Table ---------------------------->
            <div class="row">
                <div class="col-12">
                    <table class="table table-sm" style="margin-left:5px;">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Consignee</th>
                                <th scope="col">Employee</th>
                                <th scope="col">Lens</th>
                                <th scope="col">type</th>
                                <th scope="col">ago</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->consignee->name}}</td>
                                <td>{{$order->employee->name}}</td>
                                <td>{{$order->lens->name}}</td>
                                <td>{{$order->lens_type}}</td>
                                <td>{{$order->created_at}}</td>
                                
                                <td>
                                    <a href="" class="btn btn-light"><i class="fa fa-copy"></i></a>
                                    <a href="" class="btn btn-light"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-light"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>     
            <!------- End Table ------------------------>

            
        </div>
    </div>
@endsection






     