@extends('customer::layout.master')
@section('content')
    <div class="section">
        <form action="{{route('customer.order.store')}}" method="post">
            @csrf
            <div class="container">
                <div class="row">

                    {{-- Customer Data --}}
                    <div class="col-md-6" style="margin-top:60px;">
                        <h2 style="text-align:center">Customer Data</h2>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Order Reference</label>
                                <input type="text" class="form-control" name="customer" value="{{old('customer', auth()->user()->name)}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Consignee</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    @forelse($consignees as $consignee)
                                        <option value="{{$consignee['id']}}">{{$consignee['name']}}</option>
                                    @empty
                                        <option value="">Not Fond Consignee</option>
                                    @endforelse
                                </select>
                            </div>
                            
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Employee</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    @forelse($employees as $employee)
                                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @empty
                                        <option value="">Not Fond Consignee</option>
                                    @endforelse
                                </select>
                            </div>
                            {{-- Refraction --}}
                            <div>
                                <div><h2>Refraction</h2></div>
    
                                <div class="row" style="margin: 0px 20px;" style="margin-top:30px!important;">
                                    <div class="col-3" >
                                        <a class="btn btn-danger btn-tab" data-tab="tab1" role="button" style="width: 120px!important;color:white!important;">4.12</a>
                                    </div>
                                    
                                    <div class="col-3" >
                                        <a class="btn btn-danger btn-tab" data-tab="tab2" style="width: 120px!important;color:white!important;">5.1</a>
                                    </div>
                                    
                                    <div class="col-3" >
                                        <a class="btn btn-danger" style="width: 120px!important;color:white!important;">2.1</a>
                                    </div>
                                    
                                    <div class="col-3" >
                                        <a class="btn btn-danger" style="width: 120px!important;color:white!important;">Prism</a>
                                    </div>
                                
                                </div>
                                
                            </div>
                                
                            <div class="form-check">
                                
                                <div class="row" style="margin-top:15px;">
                                        
                                    <div class="col-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Single
                                    </label>
                                </div>
                                
                                <div class="col-4">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Both
                                    </label>
                                    </div>  
                                    
                                </div>
                                
                            </div>
    
                            <div class="row " style="padding-top:30px; ">
                                
                                <div class="col-2">
                                        <div class="form-group form-check">
                                        <input class="inp-cbx" id="cmx" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="cmx"><span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg></span><span>R</span></label>
                                    </div>
                                </div>  
                                
                                <div class="col-10" style="display:flex;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" >
                                </div>
                            
                            </div>
                                
                            <div class="row " style="padding-top:10px;">
                                
                                <div class="col-2">
                                    <div class="form-group form-check">
                                        <input class="inp-cbx" id="cvx" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="cvx"><span>
                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg></span><span>L</span></label>
                                    </div>
                                </div>  
                            
                                <div class="col-10" style="display:flex;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                </div>
                            
                            </div>
                            
                            <div class="row" style="padding-top:10px;">
                                    
                                <div class="col-1">
                                    <div class="form-group form-check">
                                        <label class="form-check-label" for="exampleCheck1">L</label>
                                    </div>
                                </div>  
                                
                                <div class="col-11" style="display:flex;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                </div>
                                
                            </div>
                                
                            <div class="row" style="padding-top:10px;">
                                    
                                <div class="col-1">
                                    <div class="form-group form-check">
                                        <label class="form-check-label" for="exampleCheck1">R</label>
                                    </div>
                                </div>  
                                
                                <div class="col-11" style="display:flex;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                    <input type="text" class="form-control col-2" style="margin-right:6px;">
                                </div>
                                
                            </div>
                                
                            <div style="text-align:center;margin-top:10px;">
                                {{-- <p>Iam a acrazy girl don't play with me</p> --}}
                            </div>
                        
                            <div>
                                <a class="btn btn-danger" style="color:white!important;width:30%;height:40px;font-size:18px;">Balance</a>
                                
                                    <input class="inp-cbx" id="cdx" type="checkbox" style="display: none;"/>
                                        <label class="cbx" for="cdx"><span>
                                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                        </svg></span><span>Right=Left</span></label>
                                
                            </div>
                            
                            <div style="margin-top:20px"></div>
                        
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class=" modeledit modal-dialog modal-dialog-centered " role="document" style="max-width:100% !important">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                        <img src="{{asset('systemassets/img/Izone.png')}}">
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
    
                                            <div class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <style>
                                                            .cbx {
                                                                    margin: auto;
                                                                    -webkit-user-select: none;
                                                                    user-select: none;
                                                                    cursor: pointer;
                                                                }
                                                                .cbx span {
                                                                    display: inline-block;
                                                                    vertical-align: middle;
                                                                    transform: translate3d(0, 0, 0);
                                                                }
                                                                .cbx span:first-child {
                                                                    position: relative;
                                                                    width: 18px;
                                                                    height: 18px;
                                                                    border-radius: 3px;
                                                                    transform: scale(1);
                                                                    vertical-align: middle;
                                                                    border: 1px solid #9098A9;
                                                                    transition: all 0.2s ease;
                                                                }
                                                                .cbx span:first-child svg {
                                                                    position: absolute;
                                                                    top: 3px;
                                                                    left: 2px;
                                                                    fill: none;
                                                                    stroke: #FFFFFF;
                                                                    stroke-width: 2;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-dasharray: 16px;
                                                                    stroke-dashoffset: 16px;
                                                                    transition: all 0.3s ease;
                                                                    transition-delay: 0.1s;
                                                                    transform: translate3d(0, 0, 0);
                                                                }
                                                                .cbx span:first-child:before {
                                                                    content: "";
                                                                    width: 100%;
                                                                    height: 100%;
                                                                    background: #506EEC;
                                                                    display: block;
                                                                    transform: scale(0);
                                                                    opacity: 1;
                                                                    border-radius: 50%;
                                                                }
                                                                .cbx span:last-child {
                                                                    padding-left: 8px;
                                                                }
                                                                .cbx:hover span:first-child {
                                                                    border-color: #506EEC;
                                                                }
    
                                                                .inp-cbx:checked + .cbx span:first-child {
                                                                    background: #506EEC;
                                                                    border-color: #506EEC;
                                                                    animation: wave 0.4s ease;
                                                                }
                                                                .inp-cbx:checked + .cbx span:first-child svg {
                                                                    stroke-dashoffset: 0;
                                                                }
                                                                .inp-cbx:checked + .cbx span:first-child:before {
                                                                    transform: scale(3.5);
                                                                    opacity: 0;
                                                                    transition: all 0.6s ease;
                                                                }
    
                                                                @keyframes wave {
                                                                    50% {
                                                                        transform: scale(0.9);
                                                                    }
                                                                }
                                                        </style>
                                                        <div class="row">
                                                            @forelse ($filters as $filter)
                                                                <div class="col-6">
                                                                    <h3>{{$filter->text}}</h3>
                                                                    @forelse ($filter->children as $child)
                                                                        <div>
                                                                            <input class="inp-cbx" id="{{$child->text}}" type="checkbox" style="display: none;"/>
                                                                            <label class="cbx" for="{{$child->text}}"><span>
                                                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                                            </svg></span><span>{{$child->text}}</span></label>
                                                                        </div>
                                                                    @empty
                                                                        
                                                                    @endforelse
                                                                </div>
                                                            @empty
                                                                
                                                            @endforelse
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <label>R</label>
                                                        <input type="text" class="form-control">
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1"></label>
                                                            <select class="form-control products"></select>
                                                        </div>
                                                        
                                                        <div style="display:flex">
                                                            <button class="btn btn-danger" style="margin-right:10px;width:60%;height:50px;">Reset Fiter</button>
                                                            <button class="btn btn-danger" style="margin-right:10px;width:60%;height:50px;">Cancle</button>
                                                            <button class="btn btn-danger" style="width:60%;height:50px;">Select Lense</button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            </div>
    
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                </div>
                            </div>
    
                            {{-- Refraction --}}
                    </div>
                    {{-- End Customer Data --}}
                    
                    {{-- Lenses Type --}}
                    <div class="col-md-6" style="margin-top:60px;">
                        <h2 style="text-align:center">Lences Type</h2>
                        
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Lenses</label>
                                <select class="form-control" id="lenses">
                                    <option value="" disabled selected>Select Lenses</option>
                                    @forelse($lenses as $lens)
                                        <option value="{{$lens->id}}">{{$lens->name}}</option>
                                    @empty
                                        <option value="" disabled selected>Not Fond lenses</option>
                                    @endforelse
                                </select>
                            </div>
    
                            <div id="Product_Control" class="hidden">
                                <div>
                                    
                                    <div class="row">
                                        <label for="exampleFormControlInput1" class="editlabel2">R </label>
                                        
                                        <div class="col-9">
                                            <label class="editlabel">Lense Type</label>
                                            <select class="form-control products"></select>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color:#dc3545!important;border-color:#dc3545!important;">
                                            <i class="fa fa-filter"></i>
                                                </button>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div >
    
                                    <div class="row" style="margin-top:20px;">
                                        <label for="exampleFormControlInput1" class="editlabel2">R </label>
                                        
                                        <div class="col-4">
                                                <label class="editlabel">Diameter</label>
                                                <input type="text" class="form-control" ></div>
                                        
                                        
                                        <div class="col-4"> 
                                            <label class="editlabel">Optimized Diameter</label>
                                        <input type="text" class="form-control" ></div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                <div>
                                    
                                    <div class="row" style="margin-top:20px;">
                                        <label for="exampleFormControlInput1" class="editlabel2">L </label>
                                        
                                        
                                        <div class="col-9"> 
                                        <label class="editlabel">Lense Type</label>
                                        <select class="form-control products"></select>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color:#dc3545!important;border-color:#dc3545!important;">
                                            <i class="fa fa-filter"></i>
                                        </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div >
    
                                    <div class="row" style="margin-top:20px;">
                                        <label for="exampleFormControlInput1" class="editlabel2">L </label>
                                        
                                        <div class="col-4">
                                            <label class="editlabel">Diameter</label>
                                                <input type="text" class="form-control" ></div>
                                        
                                        
                                        <div class="col-4"> 
                                        <label class="editlabel">Optimized Diameter</label>
                                        <input type="text" class="form-control" ></div>
                                    </div>
                                
                                </div>  
                            </div>
    
                    </div>
                    {{-- End Lenses Type --}}
                    
                </div>
            </div>
        </form>
    </div>
@endsection
