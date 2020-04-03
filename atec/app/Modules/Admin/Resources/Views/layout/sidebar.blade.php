 <!-- BEGIN SIDEBAR -->
 <div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

        <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-auto-scroll="true" data-slide-speed="200">
            {{-- Home --}}
            <li class="start {{request()->segment(3) == null ? 'active open' : ''}}">
                <a href="{{route('admin.dashboard')}}">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                </a>
            </li>

        
                <li  class="{{request()->segment(3) == 'admins' || request()->segment(3) == 'roles' ? 'active open' : ''}}">
                    <a href="javascript:;">
                    <i class="icon-user"></i>
                    <span class="title">Admins</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="{{request()->segment(3) == 'admins' ? 'active open' : ''}}">
                            <a href="{{ route('admin.admins.index') }}">
                            Admins</a>
                        </li>
                        <li class="{{request()->segment(3) == 'roles' ? 'active open' : ''}}">
                            <a href="{{ route('admin.roles.index') }}">
                            Role</a>
                        </li>
                    </ul>
                </li>
           
                <li  class="{{request()->segment(3) == 'users' || request()->segment(3) == 'roles' ? 'active open' : ''}}">
                    <a href="javascript:;">
                    <i class="icon-user"></i>
                    <span class="title">users</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="{{request()->segment(3) == 'users' ? 'active open' : ''}}">
                            <a href="{{ route('admin.users.index') }}">
                            users</a>
                        </li>
                    </ul>
                </li>
            
            
           
                <li  class="{{request()->segment(3) == 'pages' ? 'active open' : ''}}">
                    <a href="javascript:;">
                    <i class="icon-docs"></i>
                    <span class="title">Pages</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="{{request()->segment(3) == 'pages' && request()->segment(4) == null? 'active open' : ''}}">
                            <a href="{{ route('admin.pages.index') }}">
                            Pages</a>
                        </li>
                        <li class="{{request()->segment(4) == '1' ? 'active open' : ''}}">
                            <a href="{{route('admin.pages.paragraphs.index', 1)}}">
                            Home</a>
                        </li>
                        <li class="{{request()->segment(4) == '2' ? 'active open' : ''}}">
                            <a href="{{route('admin.pages.paragraphs.index', 2)}}">
                            About</a>
                        </li>
                        <li class="{{request()->segment(4) == '3' ? 'active open' : ''}}">
                            <a href="{{route('admin.pages.paragraphs.index', 3)}}">
                            Place An Ad</a>
                        </li>
                        <li class="{{request()->segment(4) == '4' ? 'active open' : ''}}">
                            <a href="{{route('admin.pages.paragraphs.index', 4)}}">
                            Contact Us</a>
                        </li>
                        <li class="{{request()->segment(5) == '5' ? 'active open' : ''}}">
                            <a href="{{route('admin.pages.paragraphs.index', 5)}}">
                            Terms And Condition</a>
                        </li>
                        <li class="{{request()->segment(6) == '6' ? 'active open' : ''}}">
                            <a href="{{route('admin.pages.paragraphs.index', 6)}}">
                            Privacy Policy</a>
                        </li>
                    </ul>
                </li>
            
     
                <li class="{{request()->segment(3) == 'contact' ? 'active open' : ''}}">
                    <a href="{{ route('admin.contact.index') }}">
                    <i class="icon-envelope"></i>
                    <span class="title">Messages</span>
                    {{-- <span class="arrow "></span> --}}
                    </a>
                    {{-- <ul class="sub-menu">
                        <li class="{{request()->segment(3) == 'contact'  ? 'active open' : ''}}">
                            <a href="{{ route('admin.contact.index') }}">
                            Contacts</a>
                        </li>
                       
                        
                    </ul> --}}
                </li>
            


       
                <li class="{{request()->segment(3) == 'news-letters' ? 'active open' : ''}}">
                    <a href="{{ route('admin.news-letters.index') }}">
                    <i class="icon-briefcase"></i>
                    <span class="title">News Letter</span>
                    {{-- <span class="arrow "></span> --}}
                    </a>
                    {{-- <ul class="sub-menu">
                        <li>
                            <a href="table_basic.html">
                            Basic Datatables</a>
                        </li>
                        <li>
                            <a href="table_responsive.html">
                            Responsive Datatables</a>
                        </li>
                        <li>
                            <a href="table_managed.html">
                            Managed Datatables</a>
                        </li>
                        <li>
                            <a href="table_editable.html">
                            Editable Datatables</a>
                        </li>
                        <li>
                            <a href="table_advanced.html">
                            Advanced Datatables</a>
                        </li>
                        <li>
                            <a href="table_ajax.html">
                            Ajax Datatables</a>
                        </li>
                    </ul> --}}
                </li>
          
          
               
           
            
                <li class="{{request()->segment(3) == 'informations' ? 'active open' : ''}}">
                    <a href="{{ route('admin.informations.index') }}">
                    <i class="icon-briefcase"></i>
                    <span class="title">Informations</span>
                    </a>
                </li>
        

           
                <li class="{{request()->segment(3) == 'pages' ? 'active open' : ''}}">
                    <a href="{{ route('admin.pages.index') }}">
                    <i class="icon-briefcase"></i>
                    <span class="title">Pages</span>
                    </a>
                </li>
       

          
                <li class="{{request()->segment(3) == 'mails' ? 'active open' : ''}}">
                    <a href="{{ route('admin.mails.index') }}">
                    <i class="icon-briefcase"></i>
                    <span class="title">Mail Messages</span>
                    </a>
                </li>
           

       
            <li class="{{request()->segment(3) == 'languages' ? 'active open' : ''}}">
                <a href="{{ route('admin.languages.index') }}">
                <i class="icon-briefcase"></i>
                <span class="title">Languages </span>
                </a>
            </li>
       

      
        <li class="{{request()->segment(3) == 'blogs' ? 'active open' : ''}}">
            <a href="{{ route('admin.blogs.index') }}">
            <i class="icon-briefcase"></i>
            <span class="title">Blogs </span>
            </a>
        </li>
        
        
        
        </ul>

    </div>
