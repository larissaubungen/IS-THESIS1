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
		mysql_connect('localhost', 'root', '')
			or die(mysql_error());
		
        mysql_select_db('lbas_hr') 
			or die(mysql_error());
			
			$idNo= "6694432324";
			
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
?>