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
					$idNo = $_POST['id'];
					//$firstName ='adasdasdasd';
					
					mysql_connect('localhost', 'root', '')
						or die(mysql_error());
		
					mysql_select_db('lbas_hr') 
						or die(mysql_error());
						
						$result = mysql_query("
						SELECT  *
						FROM person, resume
						WHERE person.ID_No = '$idNo'	
						");	
						
					while($row = mysql_fetch_array($result)){
					
					$firstName = $row["F_Name"]; 
					$email = $row["Email"];
					$lastName = $row["L_Name"];
					$mobNumber = $row["M_No"];
					$telNumber  =$row["T_No"];
					$gender = $row["Gender"];
					$highSchool= $row["H_School"];
					$cStatus= $row["C_Status"];
					$degree= $row["Course"];
					$street= $row["Street"];
					$college= $row["College"];
					$city = $row["City"];
					$yearGraduated = $row["Y_Graduated"];
					$zip = $row["Z_Code"];
					$awards = $row["Awards"];
					$previousExperience= $row["P_Position"];
					$seminarsAttended= $row["S_Attended"];
					$skills = $row["Specialty"];
					$seminarsFacilitated = $row["S_Facilitated"];
					
					
					echo'<tr>';
					echo'<td id="resume-label">First Name: </td>';
					echo'<td>' . $firstName . '</td>';
					echo'<td id="resume-label">E-mail: </td>';
					echo'<td>' . $email . '</td>';
					echo'</tr>';	
					echo'<tr>';
						echo'<td id="resume-label">Last Name:</td>';
						echo'<td>' . $lastName . '</td>';
						echo'<td id="resume-label">Mobile Number: </td>:';
						echo'<td>' . $mobNumber . '</td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">Middle Name:</td>';
						echo'<td>';
							echo'';
						echo'</td>';
						echo'<td id="resume-label">Telephone Number: </td>';
						echo'<td>' . $telNumber . '</td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">Gender:</td>';
						echo'<td>' . $gender . '</td>';
						echo'<td id="resume-label">High School:</td>';
						echo'<td>' . $highSchool . '</td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label"><br>Civil Status:</td>';
						echo'<td>' . $cStatus . '</td>';
						echo'<td id="resume-label">Degree:</td>';
						echo'<td>' . $degree . '</td>';
					echo'</tr>';
					echo'<tr></tr>';
					echo'<tr>';
						echo'<td id="resume-label"><br><b>Address</b></td>';
						echo'<td id="resume-label"></td>';
						echo'<td id="resume-label"><br><b>Education</b></td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">Street:</td>';
						echo'<td>' . $street . '</td>';
						echo'<td id="resume-label">College/University:</td>';
						echo'<td>' . $college . '</td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">City/Province:</td>';
						echo'<td>' . $city . '</td>';
						echo'<td id="resume-label">Year Graduated:</td>';
						echo'<td>' . $yearGraduated . '</td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">Zip Code:</td>';
						echo'<td>' . $zip . '</td>';
						echo'<td id="resume-label">Awards:</td>';
						echo'<td>';
							echo'';//awards
						echo'</td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label"><br><b>Experience</b></td>';
						echo'<td></td>';
						echo'<td id="resume-label"><br><b>Skill</b></td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">Previous Experience (Position, Company):</td>';
						echo'<td>' . $previousExperience . '</td>';
						echo'<td id="resume-label">Extra Curricular Actvities</td> <br>';
						echo'<td>';
							echo'';
						echo'</td>';
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">Seminars Attended(Year, Title):</td>';
						echo'<td>' . $seminarsAttended . '</td>';
						echo'<td id="resume-label">Specialties and Technical Skills <br> &nbsp (Year, Title):</td>';
						echo'<td>' . $skills . '</td>';
						
					echo'</tr>';
					echo'<tr>';
						echo'<td id="resume-label">Seminars Facilitated(Year, Title)</td>';
						echo'<td>' . $seminarsFacilitated . '</td>';
					echo'</tr>';
					
			}		
	
			
					$result2 = mysql_query("
						SELECT  Schedule_ID
						FROM applicant_schedule
						WHERE ID_No = '$idNo'	
					");	
					//$scheduleID= $row["Schedule_ID"];
					if(mysql_num_rows($result2) > 0){
					?>
					<form action="ViewApplicantSchedule.php" method="post">
					<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
					<input type="submit" value="View applicant's schedule"> 
					</form>
					<?php
					}else if(mysql_num_rows($result2) == 0){
					?>
					<form action="Schedule.php" method="post">
					<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
					<input type="submit" value="Set schedule"> 
					</form>
					<?php
					}
				
				?>
			</tbody>
			</table>
	  </div>
	</div>
</div>
</div>
</div>
</body>
</html>