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
	$resume = $_POST["Yes"];

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
    </style>

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

		$sql = "UPDATE person 
			SET L_Name = '".$lastName."', 
				F_Name = '".$firstName."', 
				M_Name = '".$middleName."',
				B_Day = '".$bDay."',
				Resume = '".$resume."',
				WHERE ID_No ='".$user."'";

		$sql2 = "INSERT INTO resume(ID_No, Email, M_No, T_No, City, Street, Z_Code, 
			C_Status, H_School,  HS_Graduated ,  College ,  College_Graduated , 
			 Course ,  Award1 ,  Award2 ,  Award3 ,  Award4 ,  Award5 , 
			 Org_Aff1 ,  Org_Aff2 ,  Org_Aff3 ,  Org_Aff4 ,  Org_Aff5 ,  T_Skills1 , 
			 T_Skills2 ,  T_Skills3 ,  T_Skills4 ,  T_Skills5 ,  Experience1 ,  Experience2 , 
			 Experience3 ,  Experience4 ,  Experience5 ) 
				VALUES ('".$user."','".$email."','".$mobNumber."','".$telNumber."',
					'".$city."','".$street."','".$zip."','".$civil."','".$highSchool."','".$HS_Grad."',
					'".$college."','".$College_Grad."','".$degree."','".$award1."','".$award2."','".$award3."',
					'".$award4."','".$award5."','".$org1."','".$org2."','".$org3."','".$org4."',
					'".$org5."','".$skill1."','".$skill2."','".$skill3."','".$skill4."','".$skill5."',
					'".$exp1."','".$exp2."','".$exp3."','".$exp4."','".$exp5."')";

/*
		$sql2 = "INSERT INTO resume
					 ID_No='".$user."',
					 Email = '".$email."',
					 M_No = '".$mobNumber."',
					 T_No = '".$telNumber."',
					 City = '".$city."',
					 Street = '".$street."',
					 Z_Code = '".$zip."',
					 C_Status = '".$civil."',
					 H_School = '".$highSchool."',
					 College = '".$college."',
					 Course = '".$degree."',
					 HS_Graduated = '".$HS_Grad."',
					 College_Graduated = '".$College_Grad."',
					 Award1 = '".$award1."',
					 Award2 = '".$award2."',
					 Award3 = '".$award3."',
					 Award4 = '".$award4."',
					 Award5 = '".$award5."',
					 Org_Aff1 = '".$org1."',
					 Org_Aff2 = '".$org2."',
					 Org_Aff3 = '".$org3."',
					 Org_Aff4 = '".$org4."',
					 Org_Aff5 = '".$org5."',
					 T_Skills1 = '".$skill1."'
					 T_Skills2 = '".$skill2."'
					 T_Skills3 = '".$skill3."'
					 T_Skills4 = '".$skill4."'
					 T_Skills5 = '".$skill5."'
					 Experience1 = '".$exp1."',
					 Experience2 = '".$exp2."',
					 Experience3 = '".$exp3."',
					 Experience4 = '".$exp4."',
					 Experience5 = '".$exp5."'"; */

				 	mysql_query($sql);
				 	mysql_query($sql2);


        echo ("Your first name is ".$firstName."<br/>");
        echo ("Your mid name is ".$middleName."<br/>");
        echo ("Your last name is".$lastName."<br/>");
        echo ("Your birthdate is".$bDay."<br/>");
        echo ("Your Spouse's Name is".$spouseLName.", ".$spouseFName."<br/>");

        echo "Resume";
        echo ("Your email is".$email."<br/>");   
        echo ("Your mobile number is".$mobNumber."<br/>");    
        echo ("Your mobile number is".$telNumber."<br/>"); 
       	echo ("Street:".$street ."<br/>");
       	echo ("City: ".$city."<br/>");
       	echo ("Zip Codesss:".$zip."<br/>");
       	echo ("HS:".$highSchool."<br/>");
       	echo ("You graduated in highschool by".$HS_Grad."<br/>");
       	echo ("College yow: ".$college."<br/>");
       	echo ("Degree mo bruh:".$degree."<br/>");
       	echo ("Yead Grad:".$College_Grad."<br/>");
       	echo ("Awards isa:".$award1."<br/>");
       	echo ("Awards dalawa:".$award2."<br/>");
       	echo ("Awards tatlo:".$award3."<br/>");
       	echo ("Awards apat:".$award4."<br/>");
       	echo ("Awards lima:".$award5."<br/>");
       	echo ("Ang skill mo puta:".$skill1."<br/>");
       	echo ("Ang skill mo puta:".$skill2."<br/>");
       	echo ("Ang skill mo puta:".$skill3."<br/>");
       	echo ("Ang skill mo puta:".$skill4."<br/>");
       	echo ("Ang skill mo puta:".$skill5."<br/>");
       	echo ("Ang exp mo dung:".$exp1."<br/>");
       	echo ("Ang exp mo dung:".$exp2."<br/>");
       	echo ("Ang exp mo dung:".$exp3."<br/>");
       	echo ("Ang exp mo dung:".$exp4."<br/>");
       	echo ("Ang exp mo dung:".$exp5."<br/>");


	?>