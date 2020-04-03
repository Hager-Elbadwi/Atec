@extends('customer::layout.master')
@section('content')
       

    <div class="section">
        <div class="container">
            <div class="row" style="margin-top:40px;">
                <div class="col-6"><h2> Customer Data</h2></div>
                <!-- <div class="col-6"><h2> Lences Type</h2></div> -->
            </div>
        </div>
    </div>


    <div class="section" style="margin-top:20px;">
        <div class="container">



        <div class="row" >
            <div class="container">
               <div class="row">

                <div class="col-6">
                    <table class="table table-sm" style="margin-left:5px;">
                        <tbody>
                        <tr>
                            <th scope="row">Refrence Code</th>
                            <td>Jacob</td>  
                        </tr>
                        <tr>
                            <th scope="row">Consignee</th>
                            <td>Izone</td>
                        </tr>
                        <tr>
                            <th scope="row">Employee Name</th>
                            <td>Hager</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-6">
                    <h3>Lences Order</h3>
                        <table class="table table-sm" style="margin-left:5px;">
                            <thead>
                            <tr>
                                <th scope="col">R</th>
                                <th scope="col">Sphere</th>
                                <th scope="col">Cylinder</th>
                                <th scope="col">Axis</th>
                                <th scope="col">Addition</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">L</th>
                                <td>Mark</td>
                                
                            </tr>
                            
                            </tbody>
                        </table>  

                </div>

                <div class="col-6">
                        <table class="table table-sm" style="margin-left:5px;">
                            <thead>
                            <tr>
                                <th scope="col">Lense Type</th>
                                <th scope="col">Diameter</th>
                                <th scope="col">Optimized Diameter</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">L</th>
                                <td>Mark</td> 
                            </tr>

                            <tr>
                                <th scope="row">R</th>
                                <td>Mark</td> 
                            </tr>
                            
                            </tbody>
                        </table>  

                </div>

               </div>
            </div>
        </div>



        <div class="row" >
            <div class="container" >
                <div class="col-6">
                        <table class="table table-sm" >
                            <thead>
                            <tr>
                                <th scope="col">Refrection</th>
                                <th scope="col">Type</th>
                              
                            
                            </tr>
                            </thead>
                            
                            <tbody>
                            <tr>
                                <th scope="row">2.5</th>
                                <td>Both</td>
                            </tr>
                            </tbody>
                        </table>

                </div>

                <div class="col-6">
                        <table class="table table-sm" style="margin-left:5px;">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Prism1</th>
                                <th>Base1</th>
                                <th>Prism2</th>
                                <th>Base2</th>
                                <th>Res Prism</th>
                                <th>Res Base</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">R</th>
                                <td>Mark</td>
                                
                            </tr>
                            <tr>
                                <th scope="row">L</th>
                                <td>Mark</td>
                                
                            </tr>
                            
                            </tbody>
                        </table>  

                </div>
            </div>
        </div>


        
        <div class="row" >
            <div class="container" >
                <div class="col-10" style="margin-left:350px;">
                      <a> <i class="fa fa-print" style="font-size:36px;!important"></i></a>
                       <a  class="btn" style="background-color:#525252;color:white;">Confiermed</a>
                       <a  class="btn" style="background-color:#525252;color:white;">Cancle</a>
                </div>
            </div>
        </div>



        </div>
    </div>

@endsection