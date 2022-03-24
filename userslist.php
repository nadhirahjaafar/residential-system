<?php
session_start ();
include 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> User List </title><!-- Meta, title, CSS, favicons, etc. -->
  <link rel="stylesheet" type="text/css"href="css/table.css">
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
                         
                    <li>
                    <a href="logout.php" >
                    <span class="fa fa-power-off pr5"></span>
                            <span class="sidebar-title">Logout</span>
                           
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
                            <h2><label >User List</label></h2>
                        </li>
                        <li class="crumb-icon">
                            <a href="index.php">
                                <span class="glyphicon glyphicon-user"></span>
                            </a>
                        </li>

                        
                                 
                        
        
                    
                </div>
</header>
<?php



if (isset($_SESSION ['login']) and $_SESSION ['login']== true ){
    $userid = $_SESSION ['id'];

    if($_SESSION['role']=='admin'){
        $sql = "SELECT * FROM users" ;
    }

    if($_SESSION['role']=='user'){
        $sql = "SELECT id, `name`, `address`, `ic no`, `tel no` , `vehicle reg no` , `username` FROM users WHERE `id`= $userid" ;
    }



    
    $result= $conn -> query ($sql);

if ($result->num_rows > 0) {
    // output data of each row

    echo "<div class='card shadow mb-4'>
    <div class='card-header py-3'>
        <div class='card-body'>
            <div class='table-responsive'>
                <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>


    <thead>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>IC</th>
        <th>TEL NO</th>
        <th>VEHICLE REG NO</th>
        <th>USERNAME</th>
    
    
    </tr>
    </thead><tbody>";

    
    while($row = $result->fetch_assoc()) {
        $userid = $row['id'];
        $name = $row['name'];
        $address = $row['address'];
        $ic = $row['ic no'];
        $telno = $row['tel no'];
        $regno = $row['vehicle reg no'];
        $username = $row['username'];
        
    echo "<tr>
    <td> $userid </td>
    <td> $name </td>
    <td> $address </td>
    <td> $ic </td>
    <td> $telno </td>
    <td> $regno </td>
    <td> $username </td>
 

    </tr>";

    
    }
    echo "</tbody></table>
    </div>
    </div>
    </div>";

} else {
    echo "0 result";
}
$conn->close();
} else {
     echo "<h2><center> You Are Not Authorized. Please <a href= 'login_r.php'> Login </a></center></h2>";
 }
?>

<br> 
<br><br><br> 
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<?php include 'footer1.php' ?>