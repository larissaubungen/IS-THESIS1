<?php 
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  }

$user=$_SESSION['ID_No'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>LBASS HR Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">LBASS Human Resource Information System </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
      
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Let Rivera (Dummy Data)<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="http://localhost/IS-THESIS1/logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="http://localhost/IS-THESIS1/HR_Page.php"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="http://localhost/IS-THESIS1/EmployeesPage.php"><i class="icon-user"></i><span>Employees</span> </a> </li>
        
        <li><a href="ReportsPage.php"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="AttendancePage.php"><i class="icon-table"></i><span>Attendance</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li><a href="HR_Resignation.php"><i class="icon-list"></i><span>Requests</span></a></li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/IS-THESIS1/Signup.php">Add Applicant</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          
          <?php

           mysql_connect("localhost", "root", "")
                or die(mysql_error());
            
            mysql_select_db("lbas_hr") 
              or die(mysql_error());   

          $result = mysql_query(
                  "SELECT DISTINCT person.F_Name, person.M_Name,person.L_Name, resignation.reason, resignation.D_Filed, resignation.ID_No
                  FROM person
                  INNER JOIN resignation
                  ON person.ID_No LIKE resignation.ID_No
                  ORDER BY person.L_Name ASC") or die (mysql_error());

          echo "<h4>Resignation Request</h4>";

          while($row = mysql_fetch_array($result)){

          $idNumber = $row["ID_No"];
          echo '<li class="span5 clearfix">';
          echo '<div class="thumbnail clearfix">';
          echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
          echo '<div class="caption" class="pull-left">';
          echo'<form action="HR_ResignationApprove.php" method= "POST">';
          echo "<input type='hidden' name='id' value='$'/>";
          echo '<input type= "submit" class="btn btn-primary icon  pull-right" value="Approve">';
          echo '</form>';
          echo '<h4>';      
            echo '<a href="#" >'. $row["F_Name"] . " " . $row["L_Name"] .'</a>';
            echo '</h4>';
          echo '<small><b>ID Number: </b>'. $row["ID_No"] .'</small>';
                    echo'</div>';
                  echo'</div>';
                echo'</li>';
          }

          ?>          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>
