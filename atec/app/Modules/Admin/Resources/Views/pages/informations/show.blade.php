@extends('backend.master')
@section('content')
<div class="col-12">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Informations </p>
                    <div class="col-12">
                   
                       @include('informations.show_fields')
                        <a href="{!! route('admin.informations.index') !!}" class="btn btn-default">Back</a>
                        
                      </div>
                  </div>
                </div>
              </div>
</div>
 @endsection    