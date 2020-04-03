
    <!DOCTYPE html>
    <!--
    Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
    Version: 4.7.5
    Author: KeenThemes
    Website: http://www.keenthemes.com/
    Contact: support@keenthemes.com
    Follow: www.twitter.com/keenthemes
    Dribbble: www.dribbble.com/keenthemes
    Like: www.facebook.com/keenthemes
    Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
    Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
    -->
    <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en">
        <!--<![endif]-->
        <!-- BEGIN HEAD -->

        <head>
            <meta charset="utf-8" />
            <title>Atec</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <meta content="" name="author" />
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <link href="{{asset('adminassets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />

            <link href="{{asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />

            <link href="{{asset('adminassets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />



            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


            <link href="{{asset('adminassets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL STYLES -->
            <link href="{{asset('adminassets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
            <link href="{{asset('adminassets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" type="text/css" href="http://youzstar.com/adminassets/global/plugins/ckeditor/skins/moono/editor.css?t=E8PB">
            <!-- END THEME GLOBAL STYLES -->
            <!-- BEGIN THEME LAYOUT STYLES -->
            <link href="{{asset('adminassets/layouts/layout4/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('adminassets/layouts/layout4/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
            <link href="{{asset('adminassets/layouts/layout4/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- END THEME LAYOUT STYLES -->
            <script src="{{asset('adminassets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
            {{-- <link rel="shortcut icon" href="favicon.ico" /> --}}
            <style>


    .striped2 tr {
        /* Example color */
        background: #d3e0ff;
    }


    .striped2 tr:nth-child(4n+1), .striped2 tr:nth-child(4n+2) {
     background: #fff;
    }
            </style>
         </head>
        <!-- END HEAD -->


        <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="" class="logo-default" style="margin: 0px 50px; width: 71px;">
                            
                            {{-- <img src="{{asset('adminassets/layouts/layout4/img/logo-light.png')}}" alt="logo" class="logo-default" />  --}}
                        </a>
                        <div class="menu-toggler sidebar-toggler">
                            <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                  
                    <!-- BEGIN PAGE TOP -->
                    <div class="page-top">
                        <!-- BEGIN HEADER SEARCH BOX -->
                        <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                        {{-- <form class="search-form" action="page_general_search_2.html" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                                <span class="input-group-btn">
                                    <a href="javascript:;" class="btn submit">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </span>
                            </div>
                        </form> --}}
                        <!-- END HEADER SEARCH BOX -->
                        <!-- BEGIN TOP NAVIGATION MENU -->
                        <div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                <li class="separator hide"> </li>
                                <!-- BEGIN NOTIFICATION DROPDOWN -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                               
                                <!-- END NOTIFICATION DROPDOWN -->
                                
                                <!-- END TODO DROPDOWN -->
                                <!-- BEGIN USER LOGIN DROPDOWN -->
                                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                <li class="dropdown dropdown-user dropdown-dark">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> {{ auth()->guard('admin')->user()->name }}</span>
                                        <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                        {{-- <img alt="" class="img-circle" src="{{asset('adminassets/layouts/layout4/img/avatar9.jpg')}}" />  --}}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        {{-- <li>
                                            <a href="page_user_profile_1.html">
                                                <i class="icon-user"></i> My Profile </a>
                                        </li>
                                        <li>
                                            <a href="app_calendar.html">
                                                <i class="icon-calendar"></i> My Calendar </a>
                                        </li>
                                        <li>
                                            <a href="app_inbox.html">
                                                <i class="icon-envelope-open"></i> My Inbox
                                                <span class="badge badge-danger"> 3 </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="app_todo_2.html">
                                                <i class="icon-rocket"></i> My Tasks
                                                <span class="badge badge-success"> 7 </span>
                                            </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="page_user_lock_1.html">
                                                <i class="icon-lock"></i> Lock Screen </a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('admin.logout') }}">
                                                <i class="icon-key"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- END USER LOGIN DROPDOWN -->
                            </ul>
                        </div>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                    <!-- END PAGE TOP -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
               <!--azsxdcfvbgnhjbvfgtvfgtv salah -->
               @include('admin::layout.sidebar')
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <div class="page-head">
                            <!-- BEGIN PAGE TITLE -->
                            
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE BREADCRUMB -->

                            @yield('content')

                        </div>
                    <!-- END CONTENT BODY -->
                    </div>
                    <!-- END CONTENT -->
                </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2020 &copy; <a href="https://www.techvillageco.com/">Atech</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            <!--[if lt IE 9]>
    <script src="{{asset('adminassets/global/plugins/respond.min.js')}}"></script>
    <script src="{{asset('adminassets/global/plugins/excanvas.min.js')}}"></script>
    <script src="{{asset('adminassets/global/plugins/ie8.fix.min.js')}}"></script>
    <![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('adminassets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('adminassets/global/scripts/datatable.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>





            <script src="{{asset('adminassets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('adminassets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->




            <script src="{{asset('adminassets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('adminassets/pages/scripts/components-editors.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->




 <!-- BEGIN PAGE LEVEL PLUGINS  for Charts-->
        <script src="{{asset('adminassets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
        <script src="{{asset('adminassets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('adminassets/pages/scripts/dashboard.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

            <script src="{{asset('adminassets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/pages/scripts/table-datatables-buttons.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('adminassets/layouts/layout4/scripts/layout.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/layouts/layout4/scripts/demo.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('adminassets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script type="text/javascript" src="http://youzstar.com/adminassets/global/plugins/ckeditor/ckeditor.js"></script>
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>
        </body>

    </html>
