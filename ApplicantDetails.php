<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } 
    else if ($_SESSION['ID_No'] != 'Admin'){
      header('Location:ErrorAuthentication.php');  
    }     

	$user=$_SESSION['ID_No'];
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
  </style>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
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
            <li><a href="ApplicantPage.php"><i class="icon-home"></i><span>Home</span> </a> </li>
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
 	  <div class="panel-heading"><h4 class="panel-title">Applicant Resume</h4></div>
	  <div class="panel-body">	   <!--/Panel Heading only-->
		  <div class="table-responsive">	<!--Resume Form into table-->
		  <table class="table"> 
			<thead>
				<tr>
					<th>Personal Information</th>
					<th></th>
					<th>Contact details</th>
				</tr>
			</thead>
				<tbody>
				<?php
					$applicantID = $_POST['id'];
					//$firstName ='adasdasdasd';
					
					mysql_connect('localhost', 'root', '')
						or die(mysql_error());
		
					mysql_select_db('lbas_hr') 
						or die(mysql_error());
						
						 //retrieving details from the person table
    $applicantDetails = "SELECT DISTINCT person.L_Name, person.F_Name, person.M_Name,
    						 	person.B_Day, person.Gender, person.C_Status,
    						 	resume.Email, resume.M_No, resume.T_No, 
    						 	resume.Street, resume.City, resume.Province, 
		  						resume.Z_Code, resume.H_School, 
							 resume.HS_Graduated, resume.College, resume.College_Graduated, 
							 resume.Course, resume.Masteral, resume.Course2, resume.Award1, 
							 resume.Award2, resume.Award3, resume.Award4, resume.Award5, 
							 resume.Org_Aff1, resume.Org_Aff2, resume.Org_Aff3, resume.Org_Aff4, 
							 resume.Org_Aff5, resume.T_Skills1, resume.T_Skills2, resume.T_Skills3, 
							 resume.T_Skills4, resume.T_Skills5, resume.Experience1, resume.Experience2, 
							 resume.Experience3, resume.Experience4, resume.Experience5, resume.ID_No
					  FROM person, resume
					  WHERE person.ID_No = '".$applicantID."'";
		$query = mysql_query($applicantDetails);

	  while($row = mysql_fetch_array($query))
	  {
	  		$appIDNum = $row["ID_No"];
	  		$lastName = $row["L_Name"];
	  		$firstName = $row["F_Name"];
	  		$middleName = $row["M_Name"];
	  		$bDay = $row["B_Day"];
	  		$gender = $row["Gender"];
	  		$civil = $row["C_Status"];

	  		$email = $row["Email"];
	  		$mobNumber = $row["M_No"];
	  		$telNumber = $row["T_No"];
	  		$street = $row["Street"];
	  		$city = $row["City"];
	  		$province = $row["Province"];
	  		$zip = $row["Z_Code"];
	  		$highSchool = $row["H_School"];
	  		$HS_Grad = $row["HS_Graduated"];
	  		$college = $row["College"];
	  		$College_Grad = $row["College_Graduated"];
	  		$degree = $row["Course"];
	  		$masteral = $row["Masteral"];
	  		$degree2 = $row["Course2"];
	  		$skill1 = $row["T_Skills1"];
	  		$skill2 = $row["T_Skills2"];
	  		$skill3 = $row["T_Skills3"];
	  		$skill4 = $row["T_Skills4"];
	  		$skill5 = $row["T_Skills5"];

	  		$award1 = $row["Award1"];
	  		$award2 = $row["Award2"];
	  		$award3 = $row["Award3"];
	  		$award4 = $row["Award4"];
	  		$award5 = $row["Award5"];
	  		$org1 = $row["Org_Aff1"];
	  		$org2 = $row["Org_Aff2"];
	  		$org3 = $row["Org_Aff3"];
	  		$org4 = $row["Org_Aff4"];
	  		$org5 = $row["Org_Aff5"];
	  		$exp1 = $row["Experience1"];
	  		$exp2 = $row["Experience2"];
	  		$exp3 = $row["Experience3"];
	  		$exp4 = $row["Experience4"];
	  		$exp5 = $row["Experience5"];

	  		echo $firstName;
	  		echo $lastName;

		echo '<div class="container"><!--Panel Heading only-->
				<div class="row">
					<div class="col-lg-6">
				
				<div class="panel-body">	   
				<!--/Panel Heading only-->';
		echo ' <div class="table-responsive">	<!--Resume Form into table-->';
		echo ' <table class="table">
					<thead>
				<tr>
					<th>Personal Information</th>
					<th></th>
					<th>Contact details</th>
				</tr>
				</thead>
				<tbody>	
				<tr>
					<td id="resume-label">First Name: </td>
					<td>'.$firstName.'</td>
					<td id="resume-label">E-mail: </td>
					<td>'.$email.'</td>
				</tr>	
				<tr>
					<td id="resume-label">Last Name:</td>
					<td>'.$lastName.'</td>
					<td id="resume-label">Mobile Number: </td>
					<td>'.$mobNumber.'
					</td>
				</tr>
				<tr>
					<td id="resume-label">Middle Name:</td>
					<td>'.$middleName.'</td>
					<td id="resume-label">Telephone Number: </td>
					<td>'.$telNumber.'</td>
				</tr>
				<tr></tr>
				<tr>
					<td id="resume-label">Gender:</td>
					<td>'.$gender.'<br>
					</td>				
				</tr>
				<tr>
					<td id="resume-label"><br>Civil Status: <br>
						<label id="lbl_spouse" style="display:none;">Spouse:</label>
					</td> 
					<td>'.$civil.'</td>
				</tr>
				<tr>
				<tr>
					<td id="resume-label"><br>Birthdate:</td>
					<td>'.$bDay.'</td>
				</tr>
				<tr></tr>
				<tr>
					<td id="resume-label"><br><b>Education</b></td>
					<td id="resume-label"></td>
					<td id="resume-label"><br><b>Address</b></td>					
				</tr>
				<tr>
					<td id="resume-label">High School:</td>
					<td>'.$highSchool.'</td>
					<td id="resume-label">Street:</td>
					<td>'.$street.'</td>
				</tr>
				<tr>
					<td id="resume-label">Year Graduated:</td>
					<td>'.$HS_Grad.'</td>
					<td id="resume-label">City:</td>
					<td>'.$city.'</td>
				</tr>
				<tr>
					<td id="resume-label">College/University:</td>
					<td>'.$college.'</td>
					<td id="resume-label">Province:</td>
					<td>'.$province.'</td>
				</tr>
				<tr>
					<td id="resume-label">College Degree:</td>
					<td>'.$degree.'</td>
					<td id="resume-label">Zip Code:</td>
					<td>'.$zip.'</td>					
				</tr>
				<tr>
					<td id="resume-label">Year Graduated:</td>
					<td>'.$College_Grad.'</td>
				</tr>	
				<tr>
					<td id="resume-label">Masteral Degree:</td>
					<td>'.$degree2.'</td>
				</tr>
				<tr>
					<td id="resume-label">College/University:</td>
					<td>'.$masteral.'</td>
				</tr>
				<tr>
					<td id="resume-label"><br><b>Awards</b></td>
					<td></td>
					<td id="resume-label"><br><b>Organization(s) Affiliated</b></td>
				</tr>
				<tr>
					<td><textarea readonly>'.$award1.',  '.$award2.'
								,  '.$award3.',  '.$award4.'
								,  '.$award5.'
								 </textarea></td>

					<td></td>

					<td><textarea readonly>'.$org1.', '.$org2.'
								,'.$org3.', '.$org4.'
								,'.$org5.'</textarea></td>
				</tr>	
				</tr>
				<tr>
					<td id="resume-label"><br><b>Experience</b></td>
					<td></td>
					<td id="resume-label"><br><b>Specialties and Technical Skills</b></td>
				</tr>
				<tr>
					<td><textarea readonly>'.$exp1.', '.$exp2.'
								,'.$exp3.', '.$exp4.'
								,'.$exp5.'</textarea></td>
					<td></td>
					<td><textarea readonly>'.$skill1.', '.$skill2.'
								,'.$skill3.', '.$skill4.'
								,'.$skill5.'</textarea></td>
				</tr>
				</tbody>
					</table>
				  	</script>
					
			  </div>
			</div>
		</div>
		</div>
		</div>';

	  }
	  		$result2 = mysql_query("
						SELECT  Schedule_ID
						FROM applicant_schedule
						WHERE ID_No = '$applicantID'");

	  		if(mysql_num_rows($result2) > 0)
	  		{					
		?>
			<form action="ViewApplicantSchedule.php" method="post">
			<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
			<input type="submit" value="View applicant's schedule"> 
			</form>
		<?php
			}elseif (mysql_num_rows($result2) == 0) 
			{
		?>
			<form action="Schedule.php" method="post">
			<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
			<input type="submit" value="Set schedule">	
			</form>
		<?php
			}
		?>
			<form action="ApplicantAccept.php" method="post">
				<input type="submit" value="Accept">
				<input type="hidden" class="hidden" name="applicantID" value="<?php echo $applicantID ?>">
			</form>
			</tbody>
			</table>
	  </div>
	</div>
</div>
</div>
</div>
</body>
</html>