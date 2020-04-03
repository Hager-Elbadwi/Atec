@extends('customer::layout.master')
@section('content')
    <div class="section">
        <form action="{{route('customer.order.store')}}" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    {{-- Customer Data --}}
                    <div class="col-md-6" style="margin-top:60px;">
                        <h2 style="text-align:center">Customer Data</h2>
                            {{-- Order Reference --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Order Reference</label>
                                <input type="text" class="form-control" value="{{old('customer', auth()->user()->name)}}">
                            </div>

                            {{-- Consignee --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Consignee</label>
                                <select class="form-control" name="consignee_id" id="exampleFormControlSelect1">
                                    @forelse($consignees as $consignee)
                                        <option value="{{ $consignee->id }}">{{ $consignee->name }}</option>
                                    @empty
                                        <option value="">Not Fond Consignee</option>
                                    @endforelse
                                </select>
                            </div>

                            {{-- Employee --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee</label>
                                <select class="form-control" name="employee_id" id="exampleFormControlSelect1">
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
                                        <button disabled class="btn btn-secondary btn-tab" data-tab="tab1" role="button" style="width: 120px!important;color:white!important;">0.25</button>
                                    </div>
                                    
                                    <div class="col-3" >
                                        <button disabled class="btn btn-secondary btn-tab" data-tab="tab2" style="width: 120px!important;color:white!important;">0.12</button>
                                    </div>
                                    
                                    <div class="col-3" >
                                        <button disabled class="btn btn-secondary" style="width: 120px!important;color:white!important;">0.01</button>
                                    </div>
                                    
                                    <div class="col-3" >
                                        <button disabled class="btn btn-secondary" style="width: 120px!important;color:white!important;">Prism</button>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-check">
                                
                                <div class="row" style="margin-top:15px;">
                                    <div class="col-4">
                                        <label class="form-check-label" for="orderBoth">
                                            <input class="form-check-input" type="radio" name="lens_type" value="both" id="orderBoth">
                                            Both
                                        </label>
                                    </div>  

                                    <div class="col-4">
                                        <label class="form-check-label" for="orderSingle">
                                            <input class="form-check-input" type="radio" name="lens_type" value="single" id="orderSingle">
                                            Single
                                        </label>
                                    </div>
                                </div>  
                            </div>
    
                            <div class="row" style="padding-top:30px; ">
                                {{-- Labal --}}
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>Sphere</label>
                                        </div>
                                        <div class="col-3">
                                            <label>Cylnder</label>
                                        </div>
                                        <div class="col-3">
                                            <label>Axis</label>
                                        </div>
                                        <div class="col-3">
                                            <label>Addition</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- Labal --}}

                                {{-- Reghit --}}

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
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" 
                                            id="R-sphere" 
                                            name="right[sphere]" 
                                            class="form-control refraction-input"
                                            valid-rang="Value from -30 to 25 in 0.25 step"
                                            valid-max="25"
                                            valid-min="-30"
                                            >
                                        </div>
                                        <div class="col-3">
                                            <input type="text" 
                                            id="R-cylnder" 
                                            name="right[cylinder]" 
                                            class="form-control refraction-input"
                                            valid-rang="Value from -12 to 12 in 0.25 step"
                                            >
                                        </div>
                                        <div class="col-3">
                                            <input type="text" 
                                            id="R-axis" 
                                            name="right[axis]" 
                                            class="form-control refraction-input"
                                            valid-rang="Value from 0 to 180 in 1 step"
                                            >
                                        </div>
                                        <div class="col-3">
                                            <input type="text" 
                                            id="R-addition" 
                                            name="right[addition]" 
                                            class="form-control refraction-input"
                                            valid-rang="Value from 0.5 to 4 in 0.25 step"
                                            >
                                        </div>
                                    </div>
                                </div>
                                {{-- Reghit --}}

                                {{-- Left --}}
                                <div class="col-2">
                                        <div class="form-group form-check">
                                        <input class="inp-cbx" id="cmx" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="cmx"><span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg></span><span>L</span></label>
                                    </div>
                                </div>  
                                
                                <div class="col-10" style="display:flex;">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" 
                                            id="L-sphere" 
                                            name="left[sphere]" 
                                            class="form-control refraction-input" 
                                            valid-rang="Value from -30 to 25 in 0.25"
                                            valid-max="25"
                                            valid-min="-30"
                                            >
                                        </div>
                                        <div class="col-3">
                                            <input type="text" 
                                            id="L-cylnder" 
                                            name="left[cylinder]" 
                                            class="form-control refraction-input"
                                            valid-rang="Value from -12 to 12 in 0.25 step"
                                            >
                                        </div>
                                        <div class="col-3">
                                            <input type="text" 
                                            id="L-axis" 
                                            name="left[axis]" 
                                            class="form-control refraction-input" 
                                            valid-rang="Value from 0 to 180 in 1 step"
                                            >
                                        </div>
                                        <div class="col-3">
                                            <input type="text" 
                                            id="L-addition" 
                                            name="left[addition]" 
                                            class="form-control refraction-input" 
                                            valid-rang="Value from 0.5 to 4 in 0.25 step"
                                            >
                                        </div>
                                    </div>
                                </div>
                                {{-- Left --}}

                                {{-- messages --}}
                                <div class="col-12">
                                    <p class="print-rang" style="color:blue"></p>
                                </div>

                                <div class="col-12">
                                    <p class="print-error" style="color:red"></p>
                                </div>
                                {{-- messages --}}
                            </div>
                            
                            <div class="row" style="padding-top:10px;">
                                    
                                <div class="col-1"></div>  
                                
                                <div class="col-11" style="display:flex;">
                                    <div class="row">
                                        <div class="col-2"><label>Prism 1</label></div>
                                        <div class="col-2"><label>Base 1</label></div>
                                        <div class="col-2"><label>Prism 2</label></div>
                                        <div class="col-2"><label>Base 2</label></div>
                                        <div class="col-2"><label>Res Prism</label></div>
                                        <div class="col-2"><label>Res Base</label></div>
                                    </div>
                                </div>

                                
                                <div class="col-1">
                                    <div class="form-group form-check">
                                        <label class="form-check-label" for="exampleCheck1">R</label>
                                    </div>
                                </div> 
                                
                                <div class="col-11">
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="right[prism_1]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <select name="right[base_1]" class="form-control" style="margin-right:6px;">
                                                <option value="In">In</option>
                                                <option value="Out">Out</option>
                                                <option value="up">Up</option>
                                                <option value="Down">Down</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="right[prism_2]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="right[base_2]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="right[res_prism]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="right[res_base]" style="margin-right:6px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-1">
                                    <div class="form-group form-check">
                                        <label class="form-check-label" for="exampleCheck1">L</label>
                                    </div>
                                </div> 
                                
                                <div class="col-11">
                                    <div class="row">
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="left[prism_1]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="left[base_1]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="left[prism_2]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="left[base_2]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="left[res_prism]" style="margin-right:6px;">
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" name="left[res_base]" style="margin-right:6px;">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div>
                                <span class="btn btn-secondary" id="refraction-balance">Balance</span>
                                <input class="inp-cbx" id="cdx" type="checkbox" style="display: none;"/>
                                    <label class="cbx" for="cdx"><span>
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span>Right=Left</span></label>
                            </div>
                            
                            <div style="margin-top:20px"></div>
                            {{-- Refraction --}}
                    </div>
                    {{-- End Customer Data --}}
                    
                    {{-- Lenses Type --}}
                    <div class="col-md-6" style="margin-top:60px;">
                        <h2 style="text-align:center">Lences Type</h2>
                        
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Portfoilo</label>
                                <select class="form-control" id="lenses" name="lens_id">
                                        <option value="" disabled selected>Select Lenses</option>
                                    @forelse($lenses as $lens)
                                        <option value="{{$lens->id}}">{{$lens->name}}</option>
                                    @empty
                                        <option value="" disabled selected>Not Fond lenses</option>
                                    @endforelse
                                </select>
                            </div>

                            <div id="Product_Control" class="hidden">
                                <br>

                                <div class="row" style="background: #f8f9fa;padding: 19px 0px;">
                                    <div class="col-12">
                                        <label class="editlabel">Right lens type</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <select class="form-control products" name="right[product_id]"></select>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                                    <i class="fa fa-filter"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="editlabel">Diameter</label>
                                        
                                        <select class="form-control" name="right[diameter]">
                                            <option value="">50</option>
                                            <option value="">55</option>
                                            <option value="">60</option>
                                            <option value="">65</option>
                                            <option value="">70</option>
                                            <option value="">75</option>
                                            <option value="">80</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="editlabel">Optimized Diameter</label>
                                        <input type="text" disabled class="form-control" name="right[optimized_diameter]t">
                                    </div>
                                    
                                </div>

                                <div class="row" style="background: #f8f9fa;padding: 19px 0px;">
                                    <div class="col-12">
                                        <label class="editlabel">Left lens type</label>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <select class="form-control products" name="left[product_id]"></select>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                                        <i class="fa fa-filter"></i>
                                                    </button>
                                                </div>
                                            </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label class="editlabel">Diameter</label>

                                        <select class="form-control" name="left[diameter]">
                                            <option value="">50</option>
                                            <option value="">55</option>
                                            <option value="">60</option>
                                            <option value="">65</option>
                                            <option value="">70</option>
                                            <option value="">75</option>
                                            <option value="">80</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="editlabel">Optimized Diameter</label>
                                        <input type="text" disabled class="form-control" name="left[optimized_diameter]">
                                    </div>
                                    
                                </div>

                                <div class="col-12">
                                    <input type="submit" value="order" class="btn btn-secondary">
                                </div>
                            </div>

                    </div>
                    {{-- End Lenses Type --}}
                    
                </div>
            </div>
        </form>
    </div>

    {{-- Filter --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class=" modeledit modal-dialog modal-dialog-centered " role="document" style="max-width:100% !important">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row" id="filter-options">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>R</label>
                                    <input type="text" class="form-control">
                                    
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1"></label>
                                        <select class="form-control products" style="height: 328px;"></select>
                                    </div>
                                    
                                    <div style="display:flex">
                                        <button class="btn btn-light" style="margin-right:10px;width:60%;height:50px;">Reset Fiter</button>
                                        <button class="btn btn-light" style="margin-right:10px;width:60%;height:50px;"  data-dismiss="modal">Cancle</button>
                                        <button class="btn btn-secondary" style="width:60%;height:50px;">Select Lense</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Filter --}}
@endsection
