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
        <title>LBASS Applicant Home Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
                rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/pages/dashboard.css" rel="stylesheet">

        <link rel="stylesheet" href="jquery/jquery-ui.css">
        <link href="content/shared/styles/examples-offline.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.common.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.rtl.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.default.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.dataviz.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.dataviz.default.min.css" rel="stylesheet">

        
               <!-- Placed at the end of the document so the pages load faster --> 
    <script src="js/jquery-1.7.2.min.js"></script> 
    <script src="js/excanvas.min.js"></script> 
    <script src="js/chart.min.js" type="text/javascript"></script> 
    <script src="js/bootstrap.js"></script>
    <script src="js/base.js"></script>   

    <style type="text/css">
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 30%;        
        }
        td.table-header{
            background-color: lightgray;
        }
        .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        }
        .panel-default {

        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
        }
    </style>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  

  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">LBASS Human Resource Information System </a>
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
              <li><a href="javascript:;">Logout</a></li>
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
            <li class="active"><a href="#"><i class="icon-home"></i><span>Home</span> </a> </li>
            <li><a href="ApplicantGuidelines.html"><i class="icon-list-alt"></i><span>Guidelines</span> </a> </li>      
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->


     <!--Activities and Dates Panel-->
     <!--Date Picker JS-->
     <script src="jquery/jquery-1.9.1.js"></script>
        <script src="jquery/jquery-ui.js"></script>
        <script src="dateTimePicker/js/kendo.all.min.js"></script>
        <script src="dateTimePicker/content/shared/js/console.js"></script>

        <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">
               
                  <!-- Table -->
                  <table class="table">
                    <tr>
                        <td colspan="2"class="table-header"><center><b>Please schedule Activities and Dates</b></center></td>
                    </tr>

                    <tr>
                      <td>Teaching Demonstration @ Grade 11-Newton (Dummy Data)</td>
                      <td>
						<?php
								mysql_connect("localhost", "root", "")
										or die(mysql_error());
								
								mysql_select_db("lbas_hr") 
									or die(mysql_error());
									
									//method for finding a match in the database from $userName, $userPass
								$result = mysql_query("
									SELECT  Schedule_ID, ID_No, HR_Date, HR_Time, HR_Status, Teaching_Date, Teaching_Time, Teaching_Status, Test_Date, Test_Time, Test_Status, Coordinator_Date, Coordinator_Time, Coordinator_Status, Principal_Date, Principal_Time, Principal_Status, HR_Comments
									FROM applicant_schedule
									WHERE ID_No = '" . $user . "' 
								");
								
								while($row = mysql_fetch_array($result)){
								
									$hr_Date=$row["HR_Date"];
									$hr_Time=$row["HR_Time"];
									$hr_Status=$row["HR_Status"];
									$teaching_Date=$row["Teaching_Date"];
									$teaching_Time=$row["Teaching_Time"];
									$teaching_Status=$row["Teaching_Status"];
									$test_Date=$row["Test_Date"];
									$test_Time=$row["Test_Time"];
									$test_Status=$row["Test_Status"];
									$coor_Date=$row["Coordinator_Date"];
									$coor_Time=$row["Coordinator_Time"];
									$coor_Status=$row["Coordinator_Status"];
									$principal_Date=$row["Principal_Date"];
									$principal_Time=$row["Principal_Time"];
									$principal_Status=$row["Principal_Status"];
									$hr_Comments=$row["HR_Comments"];
								
									echo "HR interview date: $hr_Date </br>";
									echo "HR interview time: $hr_Time </br>";
									echo "HR interview Status: $hr_Status </br>";
									echo "Teaching demo date: $teaching_Date </br>";
									echo "Teaching demo time: $teaching_Time </br>";
									echo "Teaching demo Status: $teaching_Status </br>";
									echo "Test date: $test_Date </br>";
									echo "Test time: $test_Time </br>";
									echo "Test Status: $test_Status </br>";
									echo "Coordinator interview date: $coor_Date </br>";
									echo "Coordinator interview time: $coor_Time </br>";
									echo "Coordinator interview Status: $coor_Status </br>";
									echo "Principal interview date: $principal_Date </br>";
									echo "Principal interview time: $principal_Time </br>";
									echo "Principal interview Status: $principal_Status </br>";
									echo "HR comments: $hr_Comments </br>";
								
								}
								
								echo"</br>";	
							?> 
							<form action='schedule.php' method='post'>;
							<textarea rows="4" cols="50" name="comments" placeholder="Comments"></textarea></br>
							<?php
							echo"<input type ='hidden' value='$user' name='id'>";
							?>
							<input type='submit' value='Submit' class='Log'>;
          

            <!--User input for Date and Time-->

                              </td>
                            </tr>
                          </table>
                            
                        </div>
                      </div>
            </div>
        <!--Activities and Dates Panel-->


 

  </body>
</html>
