
<!DOCTYPE html>
<html lang="en">
<head>
  <title> FACILITIES </title><!-- Meta, title, CSS, favicons, etc. -->

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

<header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <h2><label>Facilities</label></h2>
                        </li>
                        <li class="crumb-icon">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-briefcase"></span>
                            </a>
                        </li>
                    </ol>
                </div>
</header>
    
            <!-- Begin: Content -->
            

                <!-- begin: .tray-center -->
                <div class="tray tray-center p20 va-t">
				<div class="product">
 
 <div class="row tray-bin pt20 bg-light dark animated-waypoint admin-filter-panels" data-animate="fadeIn">
                                     <div class="col-md-4 admin-grid">

                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class ="panel-title">1 : Car Park</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\carpark.jpeg" width="300" height="220"><p>
                                                  <br>
                                              <img src="images\carpark2.jpeg" width="300" height="220"><p>
                                             <b> Car Park Resident & Visitor <b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 10 A.M -11 P.M
                                              </p>
                                            </center>
                                               

                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">2 : Cafe</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\cafe.jpeg" width="300" height="220"><p>
                                                  <br>
                                                  <img src="images\cafe2.jpeg" width="300" height="220"><p>
                                                  Take A Break, Drink Some Coffee
                                                  <p><b>Facility Information: <b>
                                             <p> Available 10 A.M -11 P.M
                                             
                                              </p>
                                            
                                            </center>
                                               

                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">3 : 24-Hours Guard</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\guard.jpeg" width="300" height="220"><p>
                                                  <br>
                                             <img src="images\guard2.jpg" width="300" height="220"><p>
                                             
                                              <b>Your Life, Our Protection</b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 24 HOURS
                                             
                                              </p>
								
		
                                            </center>
                                               

                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">4 : Mini Garden</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\garden.jpeg" width="300" height="220"><p>
                                                  <br>
                                                  <img src="images\garden2.jpeg" width="300" height="220"><p>
                                              
                                              <b>Leisure & Peace</b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 10 A.M -11 P.M
                                              </p>
                                            
                                            </center>
                                               
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">5 : Gymnasium</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\gym.jpeg" width="300" height="220"><p>
                                                  <br>
                                                  <img src="images\gym2.jpeg" width="300" height="220"><p>
                                              
                                              <b>Get Your Day A Jump</b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 10 A.M -11 P.M
                                              </p>
                                            
                                            </center>
                                               

                                            </div>
                                        </div>
                        
                                    </div>

                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">6 : Kids Playground</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\play.jpeg" width="300" height="220"><p>
                                                  <br>
                                                  <img src="images\play2.jpeg" width="300" height="220"><p>
                                            
                                              <b>Play It Safe, Neuter For Life</b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 10 A.M -11 P.M
                                              </p>
                                            
                                            </center>
                                               

                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">7 : Swimming Pool</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\pool.jpeg" width="300" height="220"><p>
                                                  <br>
                                                  <img src="images\pool2.jpeg" width="300" height="220"><p>
                                            
                                              <b>Relax Your Mind & Swim</b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 10 A.M -11 P.M
                                              </p>
                                            
                                            </center>
                                               

                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">8 : Spa & Sauna</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\sauna.jpeg" width="300" height="220"><p>
                                                  <br>
                                                  <img src="images\sauna2.jpeg" width="300" height="220"><p>
                                              
                                              <b>Pampering Yourself & Be Happy</b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 10 A.M -11 P.M
                                              </p>
                                            
                                            </center>
                                               

                                            </div>
                                        </div>
                                    
                                    </div>

                                    <div class="col-md-4 admin-grid">
                                        <div class="panel" id="p10" data-panel-color="panel-system" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                                            <div class="panel-heading" align="center">
                                                <span class="panel-icon"><i class="fa fa-briefcase"></i>
                                                </span>
                                                <span class="panel-title">9 : Laundry</span>
                                            </div>
                                            <div class="panel-body">
											<center>
                                              <img src="images\baju.jpeg" width="300" height="220"><p>
                                                  <br>
                                                  <img src="images\baju2.jpg" width="300" height="220"><p>
                                             
                                              <b>Fresh Clothes Fresh Life</b>
                                              <p><b>Facility Information: <b>
                                             <p> Available 24 HOURS
                                              </p>
                                            
                                            </center>
                                               

                                            </div>
                                        </div>
                                    
                                    </div>

                                </div>
                                <?php include 'footer1.php';?>