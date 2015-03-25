<?php
error_reporting(0);
if($_POST['Pass'] == "Select")
{
?>
	<script type="text/javascript">
	function successful (){
		alert("The status of the applicant has been changed!");
		
	}

<?php
	$ID_No = $_POST['id'];
	$hr = $_POST['hr'];
	$test = $_POST['test'];
	$teaching = $_POST['teaching'];
	$coor = $_POST['coor'];
	$principal = $_POST['principal'];
	
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	if(!empty($hr) && empty($test) && empty($teaching) && empty($coor) && empty($principal)){
		
		$sql = "UPDATE applicant_schedule 
			   SET HR_Status = '".$hr."'
			   WHERE ID_No='".$ID_No."'";
			   
		$sql2 = "UPDATE applicant_schedule 
			   SET Teaching_Status = 'TBD'
			   WHERE ID_No='".$ID_No."'";
	
		$result=mysql_query($sql);
		$result2=mysql_query($sql2);
			//condition that check if inserting is successful
			if($result && $result2){
				echo"successful();";
			} else {
				echo "&nbsp Error".mysql_error();
			}
				
	}else if(empty($hr) && empty($test) && !empty($teaching) && empty($coor) && empty($principal)){
		
		$sql = "UPDATE applicant_schedule 
			   SET Teaching_Status = '".$teaching."'
			   WHERE ID_No='".$ID_No."'";
			   
		$sql2 = "UPDATE applicant_schedule 
				SET Test_Status = 'TBD'
				WHERE ID_No='".$ID_No."'";
	
		$result=mysql_query($sql);
		$result2=mysql_query($sql2);
			//condition that check if inserting is successful
			if($result && $result2){
				echo"successful();";
			} else {
				echo "&nbsp Error".mysql_error();
			}
		
		
	}else if(empty($hr) && !empty($test) && empty($teaching) && empty($coor) && empty($principal)){
		
		$sql = "UPDATE applicant_schedule 
				SET Test_Status = '".$test."'
				WHERE ID_No='".$ID_No."'";
		
		$sql2 = "UPDATE applicant_schedule 
			   SET Coordinator_Status = 'TBD'
			   WHERE ID_No='".$ID_No."'";
	
		$result=mysql_query($sql);
		$result2=mysql_query($sql2);
			//condition that check if inserting is successful
			if($result && $result2){
				echo"successful();";
			} else {
				echo "&nbsp Error".mysql_error();
			}
		
	}else if(empty($hr) && empty($test) && empty($teaching) && !empty($coor) && empty($principal)){
		
		$sql = "UPDATE applicant_schedule 
			   SET Coordinator_Status = '".$coor."'
			   WHERE ID_No='".$ID_No."'";
		
		$sql2 = "UPDATE applicant_schedule 
			   SET Principal_Status = 'TBD'
			   WHERE ID_No='".$ID_No."'";
		
		$result=mysql_query($sql);
		$result2=mysql_query($sql2);
			//condition that check if inserting is successful
			if($result && $result2){
				echo"successful();";
			} else {
				echo "&nbsp Error".mysql_error();
			}
		
	}else if(empty($hr) && empty($test) && empty($teaching) && empty($coor) && !empty($principal)){
		
		$sql = "UPDATE applicant_schedule 
			   SET Principal_Status = '".$principal."'
			   WHERE ID_No='".$ID_No."'";
	
		$result=mysql_query($sql);
			//condition that check if inserting is successful
			if($result){
				echo"successful();";
			} else {
				echo "&nbsp Error".mysql_error();
			}
		
	}

}


?>
</script>

<html>
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
                echo "<i class='icon-user'> $lastName , $firstName </i>";
                echo "<b class='caret'></b></a><ul class='dropdown-menu'/>";
              }?>
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
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="index.html"><i class="icon-user"></i><span>Employees</span> </a> </li>
        
        <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-table"></i><span>Attendance</span> </a></li>
        <?php
		$leaves=mysql_query("SELECT * 
							 FROM leave_table 
							 WHERE L_Status ='Pending'");
		
		if(mysql_num_rows($leaves) > 0){
		?>
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests*</span></a>
           <ul class="dropdown-menu">
              <li><a href="HR_Resignation.php">Resignations</a></li>
              <li><a href="HR_Transfer.php">Transfers</a></li>
			  <li><a href="LeaveRequest.php">Leaves*</a></li>
           </ul> 
        </li>
		<?php
		}else{
		?>
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
           <ul class="dropdown-menu">
              <li><a href="HR_Resignation.php">Resignations</a></li>
              <li><a href="HR_Transfer.php">Transfers</a></li>
			  <li><a href="HR_Transfer.php">Leaves</a></li>
           </ul> 
        </li>
		<?php
		}
		?>
		
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="Signup.php">Add Applicant</a></li>
          </ul>
        </li>
       </div>
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>

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
						SELECT  HR_Status, Teaching_Status, Test_Status, Coordinator_Status, Principal_Status
						FROM applicant_schedule
						WHERE ID_No = '$applicantID'	
					");	
					if(mysql_num_rows($result2) > 0){
					//$scheduleID= $row["Schedule_ID"];
					$statusPending = 'Pending';
					echo "<center>";
					echo '<table id="tfhover" class="tftable" border="1">';
					echo        '<tr>';
					echo        '<th>Hiring Process</th>';
					echo        '<th>Status</th>';
					echo        '<th>Done</th>';
					
					while($row = mysql_fetch_array($result2)){
					echo '<tr>';
					
					echo   '<td>' . '<b>HR Interview: </b>' .'</td>';
					echo   '<td>' .  $row['HR_Status'] .  '</br>' . '</td>';
					
						if($row['HR_Status'] == $statusPending){
						
						?>
							<td>
							<form action="ApplicantDetails.php" method="post">
							<input type="hidden" name="id" value="<?PHP echo $applicantID ?>"/>
							<input type="hidden" name="hr" value="Done"/>
							<input type="submit" value="Select" name="Pass"> 
							</form>
							</td>
						<?php
						
						}else{
						?>
							<td>
							</td>
						<?php
						}
					echo '</tr>';
						
					echo '<tr>';
					echo   '<td>' . '<b> Teaching demo: </b>' .'</td>';
					echo   '<td>' .  $row['Teaching_Status'] .  '</br>' . '</td>';
					
						if ($row['Teaching_Status'] == $statusPending){ 
				
						?>
							<td>
							<form action="ApplicantDetails.php" method="post">
							<input type="hidden" name="id" value="<?PHP echo $applicantID ?>"/>
							<input type="hidden" name="teaching" value="Done"/>
							<input type="submit" value="Select" name="Pass"> 
							</form>
							</td>
						<?php
						
						}else{
						?>
							<td>
							</td>
						<?php	
						
						}
					echo '</tr>';
						
					echo '<tr>';
					echo   '<td>' . '<b> Test schedule: </b>' .'</td>';
					echo   '<td>' .  $row['Test_Status'] .  '</br>' . '</td>';	
						if($row['Test_Status'] == $statusPending){
						
						?>
							<td>
							<form action="ApplicantDetails.php" method="post">
							<input type="hidden" name="id" value="<?PHP echo $applicantID ?>"/>
							<input type="hidden" name="test" value="Done"/>
							<input type="submit" value="Select" name="Pass"> 
							</form>
							</td>
						<?php
						}else{
						?>
							<td>
							</td>
						<?php
						}				
					echo '</tr>';
					
					echo '<tr>';
					echo   '<td>' . '<b> Coordinator interview schedule: </b>' .'</td>';
					echo   '<td>' .  $row['Coordinator_Status'] .  '</br>' . '</td>';	
						if($row['Coordinator_Status'] == $statusPending){
						
						?>
							<td>
							<form action="ApplicantDetails.php" method="post">
							<input type="hidden" name="id" value="<?PHP echo $applicantID ?>"/>
							<input type="hidden" name="coor" value="Done"/>
							<input type="submit" value="Select" name="Pass"> 
							</form>
							</td>
						<?php
						}else{
						?>
							<td>
							</td>
						<?php
						}				
					echo '</tr>';
					
					echo '<tr>';
					echo   '<td>' . '<b> Principal interview schedule: </b>' .'</td>';
					echo   '<td>' .  $row['Principal_Status'] .  '</br>' . '</td>';
						
						if($row['Principal_Status'] == $statusPending){
						
						?>
							<td>
							<form action="ApplicantDetails.php" method="post">
							<input type="hidden" name="id" value="<?PHP echo $applicantID ?>"/>
							<input type="hidden" name="principal" value="Done"/>
							<input type="submit" value="Select" name="Pass"> 
							</form>
							</td>
						<?php
						}else{
						?>
							<td>
							</td>
						<?php
						}				
					echo '</tr>';
					
					}
				}else{
				}
					
					
					echo '</table>';
					
						$result3 = mysql_query("
						SELECT Principal_Status
						FROM applicant_schedule
						WHERE ID_No = '$applicantID'	
					");
					while($row = mysql_fetch_array($result3)){
						if($row['Principal_Status'] == 'Done'){
					?>
	  	
							<form action="ApplicantAccept.php" method="post">
								<input type="submit" value="Accept">
								<input type="hidden" class="hidden" name="applicantID" value="<?php echo $applicantID ?>">
							</form>
					<?php
						}else{
						
						}
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