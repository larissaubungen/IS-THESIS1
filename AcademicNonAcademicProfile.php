<html>
  <head>
    <meta charset="utf-8">
   <title>LBASS HR Applicant Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/bootstrap-modal.css" rel="stylesheet" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
        <li><a href="HR_Page.php"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
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
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="container">	 <!--Panel Heading only-->
 	  <div class="row">
 	  	<div class="col-lg-6">
 	  <div class="panel-heading"><h4 class="panel-title">Employee Profile</h4></div>
	  <div class="panel-body">	   <!--/Panel Heading only-->
		  <div class="table-responsive">	<!--Resume Form into table-->
		  <table class="table"> 
			<thead>
				
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
                                E_Position1, E_Position2,Department, Subject, Level, 
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
					  FROM person, resume, work
					  WHERE person.ID_No = '".$applicantID."' AND person.ID_No LIKE resume.ID_No  " ;
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
			
			$position = $row["E_Position1"];
			$department = $row ["Department"];
			$subject = $row ["Subject"];
			$level = $row ["Level"];


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
					<td id="resume-label"><br><b>Job Description</b></td>					
				</tr>
				<tr>
					<td id="resume-label">Position:</td>
					<td>'.$position.'</td>
				</tr>
				<tr>
					<td id="resume-label">Department:</td>
					<td>'.$department.'</td>
				</tr>
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
	$result = mysql_query("
				SELECT  Department, Level
				FROM work
				WHERE ID_No = '".$idNo."'

            ");
			
			while($row = mysql_fetch_array($result)){
			$department = $row['Department'];
			$level = $row['Level'];
			
			if($department == 'Humanities' || $department == 'SMIT' && $level == 'Primary'){	
				echo '<center>';
				echo '<table>';
				echo '<table style="width:50%">';
				echo '<tr>';
                echo '<td><strong>General Performance Evaluation for Teachers</td>';            
                echo'<form action="ListGPETeachers.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
					echo '<td><input type="submit" value="Go to results"></td>'; 
                echo'</form>';
                echo '</tr>';

                echo '<tr>';
                echo '<td><strong>Evaluation Of Classroom Instruction(ECI-A)</td>';
                echo'<form action="ListECIA.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
                echo'</form>';
                echo '</tr>';

				echo '<tr>';
                echo '<td><strong>Evaluation Of Classroom Instruction(ECI-B)</td>';
                echo'<form action="ListECIBPrimary.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
                echo'</form>';
                echo '</tr>';
                echo '</table>';
                echo '</center>';
				
			}else if($department == 'Humanities' || $department == 'SMIT' && $level == 'Intermediate' || $level =='Highschool'){	
				echo '<center>';
				echo '<table>';
				echo '<table style="width:50%">';
				echo '<tr>';
                echo '<td><strong>General Performance Evaluation for Teachers</td>';            
                echo'<form action="ListGPETeachers.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
					echo '<td><input type="submit" value="Go to results"></td>'; 
                echo'</form>';
                echo '</tr>';

                echo '<tr>';
                echo '<td><strong>Evaluation Of Classroom Instruction(ECI-A)</td>';
                echo'<form action="ListECIA.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
                echo'</form>';
                echo '</tr>';

				echo '<tr>';
                echo '<td><strong>Evaluation Of Classroom Instruction(ECI-B)</td>';
                echo'<form action="ListECIBHS_Inter.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
                echo'</form>';
                echo '</tr>';
                echo '</table>';
                echo '</center>';                          				
			}else if($department == 'Human Resource Department' || $department == 'Accounting Department' ||$department == 'Registrar' || $department == 'IT Department' || $department == 'Director/Principal' || $department == 'Student Formation Center'){
					 
				echo '<center>';
				echo '<table>';
				echo '<table style="width:50%">';
                    echo '<tr>';
					echo '<td><strong>General Performance Evaluation (2-A)</td>';                  
					echo'<form action="ListGPE_2A.php" method= "POST">';
                    echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>';
					echo'</form>';  
                    echo '</tr>';
                echo '</table>';
				echo '</center>';

				echo '<tr>';
                echo '<td><strong>General Performance Evaluation (2-B)</td>';
                echo'<form action="ListGPE_2B.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
                echo'</form>';
                echo '</tr>';
                echo '</table>';
                echo '</center>';
					
			}else if ($department == 'Library'){
				
				echo '<center>';
				echo '<table>';
				echo '<table style="width:50%">';
                    echo '<tr>';
					echo '<td><strong>General Performance Evaluation (2-A)</td>';                  
					echo'<form action="ListGPE_2AForm.php" method= "POST">';
                    echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>';
					echo'</form>';  
                    echo '</tr>';
               
					echo '<tr>';
					echo '<td><strong>General Performance Evaluation (2-B)</td>';
					echo'<form action="ListGPE_2B.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
					echo'</form>';
					echo '</tr>';
                
					echo '<tr>';
					echo '<td><strong>Evalution For Librian (Form-C) </td>';
					echo'<form action="ListLibrianFormC.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
					echo'</form>';
					echo '</tr>';
					
				echo '</table>';
                echo '</center>';
			} else if ($department == 'Guidance Counselling'){
				
				echo '<center>';
				echo '<table>';
				echo '<table style="width:50%">';
                    echo '<tr>';
					echo '<td><strong>General Performance Evaluation (2-A)</td>';                  
					echo'<form action="ListGPE_2AForm.php" method= "POST">';
                    echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>';
					echo'</form>';  
                    echo '</tr>';
               
					echo '<tr>';
					echo '<td><strong>General Performance Evaluation (2-B)</td>';
					echo'<form action="ListGPE_2B.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
					echo'</form>';
					echo '</tr>';
					
					echo '<tr>';
					echo '<td><strong>Evaluation for Guidance Counsellor (Form c)</td>';
					echo'<form action="ListGuidanceFormC.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
					echo'</form>';
					echo '</tr>';
			
				echo '</table>';
                echo '</center>';
			
			}else if($department == 'Clinic'){
				
				echo '<center>';
				echo '<table>';
				echo '<table style="width:50%">';
                    echo '<tr>';
					echo '<td><strong>General Performance Evaluation (2-A)</td>';                  
					echo'<form action="ListGPE_2AForm.php" method= "POST">';
                    echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>';
					echo'</form>';  
                    echo '</tr>';
               
					echo '<tr>';
					echo '<td><strong>General Performance Evaluation (2-B)</td>';
					echo'<form action="ListGPE_2B.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
					echo'</form>';
					echo '</tr>';
					
					echo '<tr>';
					echo '<td><strong>Evaluation for School Nurse(Form c)</td>';
					echo'<form action="ListNurseFormC.php" method= "POST">';
					echo "<input type='hidden' name='id' value='$idNo'/>";
                    echo '<td><input type="submit" value="Go to results"></td>'; 
					echo'</form>';
					echo '</tr>';
			
				echo '</table>';
                echo '</center>';
			}
			}