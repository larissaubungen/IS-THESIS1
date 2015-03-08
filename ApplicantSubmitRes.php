	<?php

	session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}
	error_reporting(0);

	$user=$_SESSION['ID_No'];

	$errorMessage = "";
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$gender = $_POST['sex'];
	$civil = $_POST['status'];
	$spouseFName = $_POST['spouseFName'];
	$spouseLName = $_POST['spouseLName'];

	//getting value from the Calendar
	$birth = array($_POST['date_select2_month'],$_POST['date_select2_day'], $_POST['date_select2_year']);
	$bDay = implode(" ", $birth);
	//	$bDay = $_POST['date_select2'];

	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$province = $_POST['province'];
	$mobNumber = $_POST['mobNumber'];
	$telNumber =$_POST['telNumber'];
	$highSchool = $_POST['highSchool'];
	$HS_Grad = $_POST ['HSyearGraduated'];	
	$college = $_POST['college'];
	$College_Grad = $_POST['College_Grad'];
	$degree = $_POST['degree'];	
	$masteral = $_POST['masteral'];
	$degree2 = $_POST['degree2'];
	$award1=$_POST['Award1'];
	$award2=$_POST['Award2'];
	$award3=$_POST['Award3'];
	$award4=$_POST['Award4'];	
	$award5=$_POST['Award5'];
	$skill1=$_POST['Skill1'];
	$skill2=$_POST['Skill2'];
	$skill3=$_POST['Skill3'];
	$skill4=$_POST['Skill4'];
	$skill5=$_POST['Skill5'];
	$org1=$_POST['Org1'];
	$org2=$_POST['Org2'];
	$org3=$_POST['Org3'];
	$org4=$_POST['Org4'];
	$org5=$_POST['Org5'];
	$exp1=$_POST['Exp1'];
	$exp2=$_POST['Exp2'];
	$exp3=$_POST['Exp3'];
	$exp4=$_POST['Exp4'];
	$exp5=$_POST['Exp5'];
	$dept=$_POST['department'];
	$position=$_POST['position'];
	$level=$_POST['level'];
	$resume = "Yes";

	?>

	<html>
  	<head>
    <meta charset="utf-8">
    <title>LBASS Applicant Resume</title>
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
    <!--DatePicker-->
    <link rel='stylesheet' type='text/css' media="screen" href='datePicker/datepicker.css' />
	<script type="text/javascript" src="datePicker/datepicker.js"></script>

    
           <!-- Placed at the end of the document so the pages load faster --> 
	<script src="js/jquery-1.7.2.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/excanvas.min.js"></script> 
	<script src="js/chart.min.js" type="text/javascript"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>   

  <style type="text/css">
    .panel-heading {
    width: 20em;
    height: 2em;
    text-align: center;	
    background-color: lightgray;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    text-align: center;
    }
    .panel-body{
	border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    }
    #resume-label{
    	text-indent: .5em;
    }
    td {
    padding: 7px;
	}
	input{
		background-color: rgba(0,0,0,0.1);
	}

  </style>
  <body>
    <!--main navbar-->
 <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="ApplicantPage.php">LBASS Human Resource Information System </a>
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
            <li><a href="ApplicantPage.php"><i class="icon-home"></i><span>Home</span> </a> </li>
            <li><a href="ApplicantGuidelines.html"><i class="icon-list-alt"></i><span>Guidelines</span> </a> </li>
            <li class="active"><a href="#"><i class="icon-file"></i><span>Resume</span> </a> </li>
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->

    <div class="container">	 <!--Panel Heading only-->
 	  <div class="row">
 	  	<div class="col-lg-6">
	  <div class="panel-body">	
	  </div>
	  </div>
	  </div>
    </div>

	<?php
	error_reporting(0);
	mysql_connect('localhost', 'root', '')
        or die(mysql_error());
		
        mysql_select_db('lbas_hr') 
        or die(mysql_error());

		$updatePerson = "UPDATE person 
						 SET 	`L_Name` = '".$lastName."', 
						 		`F_Name` = '".$firstName."', 
						 		`M_Name` = '".$middleName."',
						 		`B_Day` = '".$bDay."',
						 		`Resume` = '".$resume."'
				 		 WHERE `ID_No` ='".$user."'";

		$updateResume = "INSERT INTO `resume`
				 		 (`ID_No`, `Email`, `M_No`, `T_No`, `Street`, `City`, `Province`, 
				 		 	`Z_Code`, `C_Status`, `H_School`, `HS_Graduated`, `College`, 
				 		 	`College_Graduated`, `Course`, `Masteral`, `Course2`, `Award1`, 
				 		 	`Award2`, `Award3`, `Award4`, `Award5`, `Org_Aff1`, `Org_Aff2`, 
				 		 	`Org_Aff3`, `Org_Aff4`, `Org_Aff5`, `T_Skills1`, `T_Skills2`, 
				 		 	`T_Skills3`, `T_Skills4`, `T_Skills5`, `Experience1`, `Experience2`, 
				 		 	`Experience3`, `Experience4`, `Experience5`, `App_Department`, `App_Position`, 
				 		 	`App_Level`) 

		 VALUES ('".$user."','".$email."','".$mobNumber."','".$telNumber."','".$street."','".$city."',
				 		 	'".$province."','".$zip."','".$civil."','".$highSchool."','".$HS_Grad."',
				 		 	'".$college."','".$College_Grad."','".$degree."','".$masteral."','".$degree2."',
				 		 	'".$award1."','".$award2."','".$award3."','".$award4."','".$award5."',
				 		 	'".$org1."','".$org2."','".$org3."','".$org4."','".$org5."',
				 		 	'".$skill1."','".$skill2."','".$skill3."','".$skill4."',
				 		 	'".$skill5."','".$exp1."','".$exp2."','".$exp3."','".$exp4."',
				 		 	'".$exp5."','".$dept."','".$position."', '".$level."')";

		$checkUpdate1 = mysql_query($updatePerson);
		$checkUpdate2 = mysql_query($updateResume);

		//Redirecting to Applicant Page once Resume is submitted
		if ($checkUpdate1 || $checkUpdate2) { 
			header('Location:ApplicantPage.php');			
		 } 

		//Redirecting to SubmitFailed
		else{
			header('Location:ApplicantSubmitFailed.php');
		}


	?>
</body>
</html>
