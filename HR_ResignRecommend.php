<?php 
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  }
$user=$_SESSION['ID_No'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>LBASS Resignation Recommendation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/pages/dashboard.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="js/jquery1.11.3/jquery-ui.css">

   <style = "text/css">

   	#yes{
   		margin-right: 1em;
   		margin-left: -10em;
   	}
   	.subnavbar{
   		margin-top: 4.5em;
   	}
   </style>

</head>
<body>

<div class="navbar navbar-fixed-top">  <!--main navbar-->
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
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
              mysql_connect('localhost', 'root', '')
              or die(mysql_error());  
              mysql_select_db('lbas_hr') 
              or die(mysql_error());

              $user=$_SESSION['ID_No']; 

              $retrieveName = "SELECT `L_Name`, `F_Name`  
                               FROM `person` 
                               WHERE `ID_No` = '".$user."'";
              $check = mysql_query($retrieveName);
              while ($row = mysql_fetch_array($check)) {
                $lastName = $row["L_Name"];
                $firstName = $row["F_Name"];
                echo "<i class='icon-user'></i> $lastName , $firstName";
                echo "<b class='caret'></b></a><ul class='dropdown-menu'/>";
              }?>
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>  
        <!--form navbar was here-->
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->

<div class="subnavbar">  <!--subnavbar-->
  <div class="subnavbar-inner">
    <div class="container">

      <ul class="mainnav">
        <li><a href="#"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="EmployeesPage.php"><i class="icon-user"></i><span>Employees</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class="icon-user"></i><span>Applicants</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="ListOfApplicant.php">View Current Applicants</a></li>
            <li><a href="Signup.php">Add Applicant Account</a></li>
          </ul>   
        </li>
                
        <li><a href="AttendancePage.php"><i class="icon-table"></i><span>Attendance</span> </a></li>
        <li><a href="ReportsPage.php"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
      
        <?php
                $leaves=mysql_query("SELECT * 
               FROM leave_table 
               WHERE L_Status ='Pending'");

        if ($leaves){ //if and else statement for handling the query

          if(mysql_num_rows($leaves) > 0)
          {
            ?>
              <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests*</span></a>
               <ul class="dropdown-menu">
                  <li><a href="HR_Resignation.php">Resignations</a></li>
                  <li><a href="HR_Transfer.php">Transfers</a></li>
                  <li><a href="LeaveRequest.php">Leaves*</a></li>
               </ul> 
              </li>
            <?php 

          }else{
            ?>
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
                   <ul class="dropdown-menu">
                      <li><a href="HR_Resignation.php">Resignations</a></li>
                      <li><a href="HR_Transfer.php">Transfers</a></li>
                <li><a href="LeaveRequest.php">Leaves</a></li>
                   </ul> 
                </li>
            <?php
          }
        }else{
            ?>
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
                   <ul class="dropdown-menu">
                      <li><a href="HR_Resignation.php">Resignations</a></li>
                      <li><a href="HR_Transfer.php">Transfers</a></li>
                <li><a href="LeaveRequest.php">Leaves</a></li>
                   </ul> 
                </li>
            <?php
        }   ?>

    </div>

    <!-- /container --> 
</div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="container">
    <div class="row">
        <div class="span12">
            <ul class="thumbnails">
		<?php

		//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

		$firstName = $_POST['firstName'];
		$middleName = $_POST['middleName'];
		$lastName = $_POST['lastName'];
		$currentWork_ID = $_POST['currentWorkID'];
		$dept = $_POST['dept'];

		echo "<h3>Recommended Replacement/Substitute for <a href='#'>".$lastName." , ".$firstName." ". $middleName.".". "</a></h3>"; 
		

		$applicantDepartment = mysql_query("SELECT DISTINCT person.ID_No as ID_No, person.F_Name as F_Name, person.M_Name as M_Name, person.L_Name as L_Name, resume.App_Department as App_Department
										   	 FROM person, resume
									   		 WHERE person.ID_No LIKE resume.ID_No AND person.E_Status = 'Applicant' AND resume.App_Department = '".$dept."' ");

		$employeeRecommendation = mysql_query("SELECT DISTINCT 
													person.ID_No, person.F_Name, person.L_Name, person.M_Name,  
    												work.E_Position1, work.E_Position2, work.Department, work.Subject, work.Subject_Type, work.Level, work.Grade, 
													TIMESTAMPDIFF(YEAR,work.Date_Assigned,CURDATE()) AS date_Employed
												FROM person, work
												WHERE 
													person.CurrentWork_ID IS NOT NULL AND 
													person.CurrentWork_ID != '".$currentWork_ID."' AND
													work.Department LIKE '".$dept."'  AND
												    work.ID_No LIKE person.ID_No AND 
												    work.Work_ID IS NOT NULL AND
													work.Date_Assigned IS NOT NULL AND 
												    TIMESTAMPDIFF(YEAR,work.Date_Assigned,CURDATE()) >=3");


		if($applicantDepartment && mysql_num_rows($applicantDepartment) <= 0 && $employeeRecommendation && mysql_num_rows($employeeRecommendation)<=0){
			echo '<div class="container">
					<div class="well" align="center">
						No Recomendations found.<br/><br/>';
						?><button class="btn btn-default" onclick="location='HR_Resignation.php'">Return to Resignation Page</button> <?php
			echo ' </div>
				 </div>';
		}else if ($applicantDepartment && mysql_num_rows($applicantDepartment) > 0){
			
			while ($row = mysql_fetch_array($applicantDepartment)) 
			{

			$idNumber = $row['ID_No'];
			$Fname = $row['F_Name'];
			$Mname = $row['M_Name'];
			$Lname = $row['L_Name'];
			$appDept = $row['App_Department'];

		echo "<hr/>";	

		  echo '<div class="thumbnail clearfix">';
          echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
          echo '<div class="caption" class="pull-left">';
          echo '<h4>';      
          echo '<a href="#" >'. $Fname . " " . $Mname .". " .$Lname.'</a>';
          echo '</h4>';
          echo '<small><b>ID Number: </b>'. $idNumber .'</small><br/>';
          echo '<small><b>Department: </b>'. $appDept .'</small><br/>';

          //for passing the details of resignee
		echo '<form action="ApplicantDetails.php" method="post">';
		echo '<input type="hidden" id="id" name="id" value="'.$idNumber.'">';
		echo '<input type="hidden" id="currentWorkID" name="currentWorkID" value="'.$currentWork_ID.'">';
		echo '<input type="hidden" id="firstName" name="firstName" value="'.$firstName.'">';
		echo '<input type="hidden" id="middleName" name="middleName" value="'.$middleName.'">';
		echo '<input type="hidden" id="lastName" name="lastName" value="'.$lastName.'">';
		echo '<input type="hidden" id="dept" name="dept" value="'.$dept.'">';
		echo '<input type="submit" class="btn btn-default pull-right" value="View Applicant">
      </form>';
        
                    echo'</div>';
                  echo'</div>';
                echo'</li>';
                echo "<hr/>";
			}
		} 
		else if($employeeRecommendation){

			while ($row = mysql_fetch_array($employeeRecommendation)) 
				{
			$idNumber = $row['ID_No'];
			$Fname = $row['F_Name'];
			$Mname = $row['M_Name'];
			$Lname = $row['L_Name'];
			$currentPosition = $row['E_Position1'];			
			$subPosition = $row['E_Position2'];			
			$dept = $row['Department'];
			$subj = $row['Subject'];
			$subj_type = $row['Subject_Type'];
			$level = $row['Level'];
			$grade = $row['Grade'];
			
		  echo '<div class="thumbnail clearfix">';
          echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
          echo '<div class="caption" class="pull-left">';
          echo '<h4>';      
          echo '<a href="#" >'. $Fname . " " . $Mname .". " .$Lname.'</a>';
          echo '</h4>';
          echo '<small><b>ID Number: </b>'. $idNumber .'</small><br/>';
          echo '<small><b>Current Job Position 1: </b>'. $currentPosition .'</small><br/>';

          //for passing the details of resignee
		echo '<form action="" method="post">';  //change my form action!
		echo '<input type="hidden" id="id" name="id" value="'.$idNumber.'">';  
		echo '<input type="hidden" id="currentWorkID" name="currentWorkID" value="'.$currentWork_ID.'">';
		echo '<input type="hidden" id="firstName" name="firstName" value="'.$firstName.'">';
		echo '<input type="hidden" id="middleName" name="middleName" value="'.$middleName.'">';
		echo '<input type="hidden" id="lastName" name="lastName" value="'.$lastName.'">';
		echo '<input type="hidden" id="dept" name="dept" value="'.$dept.'">';
		echo '<input type="submit" class="btn btn-default icon pull-right" value="View Employee">
      </form>';
                    echo'</div>';
                  echo'</div>';
                echo'</li>';
			}
		}
		else{
			echo '<div class="container">
					<div class="well">
						No Recomendations found.
						<button class="btn btn-default" onclick="HR_Resignation.php">Return to Resignation Page</button>
					</div>
				 </div>';
		}
		
		

		
		
		

		?>

        </div>
    </div>
</div>

<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>	