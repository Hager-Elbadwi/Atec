<div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">Atec. <span>Traning Center</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>youremail@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: + 1235 2355 98</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
                             <ul style="list-style:none;">
							@php
									$url = url()->full();
									$en = str_replace('/ar', '/en',$url);
									$ar = str_replace('/en', '/ar',$url);
								@endphp
							@if (request()->segment(1) != 'en')	
								<li class="active"><a href="{{$en}}" class="c-link"style="color:#ed1821!important;"><div><img src="{{asset('siteassets/images/britsh.webp')}}" style="width:50px; height:30px;"> English</div></a></li>
								
							@else
								<li class="active"><a href="{{$ar}}" class="c-link" style="color:#ed1821!important;"><div><img src="{{asset('siteassets/images/egypt.png')}}" style="width:50px; height:30px;"> العربية</div></a></li>
							@endif
							</ul>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>