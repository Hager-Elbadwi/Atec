<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{route('home')}}" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="{{route('courses')}}" class="nav-link">Courses</a></li>
	        	<!-- <li class="nav-item"><a href="teacher.html" class="nav-link">Staff</a></li>-->
	        	<li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blog</a></li>
			  <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
			  <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
<!-- 			  <li class="nav-item"><a href="blog.html" class="nav-link">Logout</a></li>
 -->	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->