<!DOCTYPE html>
<html lang="en">
<head>
  <title> THE RESIDENT </title><!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta content="HTML5 Bootstrap 3 Admin Template UI Theme" name="keywords">
  <meta content="AdminDesigns - A Responsive HTML5 Admin UI Framework" name="description">
  <meta content="AdminDesigns" name="author">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"><!-- Font CSS (Via CDN) -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css"><!-- Theme CSS -->
  <link href="libs/skin/default_skin/css/theme.css" rel="stylesheet" type="text/css"><!-- Admin Forms CSS -->
    <link href="libs/admin-tools/admin-forms/css/admin-forms.css" rel="stylesheet" type="text/css"><!-- Favicon -->
  <link href="libs/parsleyjs/dist/error.css" rel="stylesheet" type="text/css"><!-- Error css for Parsleyjs -->
  <link href="libs/img/favicon.ico" rel="shortcut icon"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
  <!-- BEGIN: PAGE SCRIPTS -->
  
   <script type="text/javascript" src="libs/jquery/jquery-1.11.1.min.js"></script>
<script src="libs/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="libs/dist/sweetalert.css">

  <script src="libs/jquery/jquery_ui/jquery-ui.min.js" type="text/javascript">
  </script>
  <script src="libs/js/bootstrap/bootstrap.min.js" type="text/javascript">
  </script>
  <script src="libs/js/pages/login/EasePack.min.js" type="text/javascript">
  </script>
  <script src="libs/js/pages/login/rAF.js" type="text/javascript">
  </script>
  <script src="libs/js/pages/login/TweenLite.min.js" type="text/javascript">
  </script>
  <script src="libs/js/pages/login/login.js" type="text/javascript">
  </script>
  <script src="libs/js/utility/utility.js" type="text/javascript">
  </script>
  <script src="libs/js/main.js" type="text/javascript">
  </script>
  <script src="libs/js/demo.js" type="text/javascript">
  </script>
  <script src="libs/parsleyjs/dist/parsley.min.js">
  </script>

  <link rel="stylesheet" type="text/css" href="libs/plugins/fullcalendar/fullcalendar.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="libs/plugins/magnific/magnific-popup.css">

  <link rel="stylesheet" type="text/css" href="libs/admin-tools/admin-forms/css/admin-forms.css">
    <link rel="stylesheet" type="text/css" href="libs/admin-tools/admin-plugins/admin-modal/adminmodal.css">
  <link rel="stylesheet" type="text/css" href="libs/skin/default_skin/css/theme.css">

  <script type="text/javascript" src="libs/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="libs/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>
 

  <!-- <script src="libs/parsleyjs/dist/i18n/malay.js">
  </script> -->
  <script type="text/javascript">
         jQuery(document).ready(function() {

             "use strict";

             // Init Theme Core      
             Core.init();

             // Init Demo JS
             Demo.init();

             // Init CanvasBG and pass target starting location
             CanvasBG.init({
                 Loc: {
                     x: window.innerWidth / 2,
                     y: window.innerHeight / 3.3
                 },
             });
         });
  </script>
</head><!-- jQuery -->
<!-- Bootstrap -->
<!-- Page Plugins -->
<!-- Theme Javascript -->
<!-- Page Javascript -->
<!-- END: PAGE SCRIPTS -->

<br />


    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-dark ">
            <div class="navbar-branding dark bg-dark">
               <a class="navbar-brand" href="#" style="color:#fff"><img src="images/logo.png" title="THE RESIDENT" class="img-responsive w200 mt10"></a>

                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>

             <ul class="nav navbar-nav navbar-left">
                <li>
                    <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
                </li>
                
                <li class="hidden-xs">
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="octicon octicon-screen-full fs18"></span>
                    </a>
                </li>
            </ul>

            <i class="icon-time icon-large"></i>
                                                                          <a class="navbar-brand"> <b><?php                        
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo date("l jS \of F Y h:i:s A"); //Returns IST
    
?></b> </a>


</br>

        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

        
                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <li>
                        <a href="main.php">
                            <span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Main Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="about.php">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            <span class="sidebar-title">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="fa fa-sign-in"></span>
                            <span class="sidebar-title">Login</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="login_r.php">
                                    <h5> User </h5> </a>
                            </li>
                            <li>
                                <a href="login_v.php">
                                   <h5> Visitor <h5> </a>
                            </li>
                        </ul>
                    
                        <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-pencil"></span>
                            <span class="sidebar-title">Register</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="register_r.php">
                                    <h5> User </h5> </a>
                            </li>
                            <li>
                                <a href="register_v.php">
                                   <h5> Visitor <h5> </a>
                            </li>
                        </ul>
                    
                    <li>
                        <a href="facility.php">
                            <span class="fa fa-building-o"></span>
                            <span class="sidebar-title">Facilities</span>
                        </a>
                    </li>
                
                  <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-user"></span>
                            <span class="sidebar-title">List</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                           
                        <li>
                                <a href="userslist.php">
                                    <span class="glyphicons glyphicons-file"></span> User List </a>
                            </li>
                            <li>
                                <a href="visitorlist.php">
                                    <span class="glyphicons glyphicons-file"></span> Visitor List </a>
                            </li>
                            <li>
                                <a href="stafflist.php">
                                    <span class="glyphicons glyphicons-file"></span> Security Guard </a>
                            </li>
                            
        </ul>
        <li>
                        <a href="visit.php">
                            <span class="fa fa-file-text"></span>
                            <span class="sidebar-title">Visitor Form</span>
                        </a>
                    </li>
                         
                <div class="sidenav">
  
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            
       
      
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

     <script type="text/javascript" src="libs/js/utility/utility.js"></script>
    <script type="text/javascript" src="libs/js/main.js"></script>
    <script type="text/javascript" src="libs/js/demo.js"></script>
  
    <!-- Page Javascript -->
    <script type="text/javascript" src="libs/js/pages/widgets.js"></script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>

<header class="header-main" role="banner">

<p>
        
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/1.png">
    </div>

    <div class="item">
      <img src="images/2.png" >
    </div>

    <div class="item">
      <img src="images/3.png" >
    </div>

    <div class="item">
      <img src="images/4.png" >
    </div>

    <div class="item">
      <img src="images/5.png" >
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br><br>

<?php include 'footer1.php';
?>