<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } 
  ?>      

<!DOCTYPE html>
<?php
	mysql_connect("localhost", "root", "")
				or die(mysql_error());
	mysql_select_db("lbas_hr") 
				or die(mysql_error());
?>
<html lang="en">
<head>
<script>
function pop_up(){
window.open(localhost/ISTHESIS/,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1076,height=768,directories=no,location=no') 
}
</script>
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
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
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
<!-- /subnavbar -->
<?php

	mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
				
				
	$sick=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Sick'
				");
				
				if(mysql_num_rows($sick)>0){
					
					echo '<center>';
					echo "Sick leave Request";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>L_Reason</th>';
					echo '<th>Approve</th>';
					echo '<th>Disapprove</th>';
					echo '<th>Comment for the employee</th>';
					echo '</tr>';
					
					echo "<form action='SickLeaveApproval.php' method='POST'>";
					while($row = mysql_fetch_array($sick)){ 				
						$F_Name = $row['F_Name'];
						$L_Name = $row['L_Name'];
						$L_Start = $row['L_Start'];
						$L_End = $row['L_End'];
						$L_Reason = $row['L_Reason'];
						
						echo '<td>'.$L_Name.'</td>';
						echo '<td>'.$F_Name.'</td>';
						echo '<td>'.$L_Start.'</td>';
						echo '<td>'.$L_End.'</td>';
						echo '<td>'.$L_Reason.'</td>';
						echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["Leave_ID"] . '">'. "</td>";
						echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["Leave_ID"] . '">'."</td>";
						echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
					

				}else{
					echo"You have no sick leaves pending";
				}
				
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";

			$paternity=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Paternity'
				");
				
				if(mysql_num_rows($paternity)>0){
					echo '<center>';
					echo "Paternity leave Request";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>L_Reason</th>';
					echo '<th>Approve</th>';
					echo '<th>Disapprove</th>';
					echo '<th>Comment for the employee</th>';
					echo '</tr>';
					
					echo "<form action='PaternityLeaveApproval.php' method='POST'>";
					while($row = mysql_fetch_array($paternity)){ 				
						$F_Name = $row['F_Name'];
						$L_Name = $row['L_Name'];
						$L_Start = $row['L_Start'];
						$L_End = $row['L_End'];
						$L_Reason = $row['L_Reason'];
						
						echo '<td>'.$L_Name.'</td>';
						echo '<td>'.$F_Name.'</td>';
						echo '<td>'.$L_Start.'</td>';
						echo '<td>'.$L_End.'</td>';
						echo '<td>'.$L_Reason.'</td>';
						echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["Leave_ID"] . '">'. "</td>";
						echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["Leave_ID"] . '">'."</td>";
						echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
				}else{
					echo "You have no pending paternity leaves";
				}
				
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";
				
			
			$maternity=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Maternity'
				");
			if(mysql_num_rows($maternity)>0){
			
				echo '<center>';
				echo "Maternity leave Request";

				echo '<table id="tfhover" class="tftable" border="1">';
				echo '<tr>';
				echo '<th>Last Name</th>';
				echo '<th>First Name</th>';
				echo '<th>Start Of Leave</th>';
				echo '<th>End Of Leave</th>';
				echo '<th>L_Reason</th>';
				echo '<th>Approve</th>';
				echo '<th>Disapprove</th>';
				echo '<th>Comment for employee</th>';
				echo '</tr>';
				
				echo "<form action='MaternityLeaveApproval.php' method='POST'>";
				while($row = mysql_fetch_array($maternity)){ 
					$F_Name = $row['F_Name'];
					$L_Name = $row['L_Name'];
					$L_Start = $row['L_Start'];
					$L_End = $row['L_End'];
					$L_Reason = $row['L_Reason'];
					
					echo '<td>'.$L_Name.'</td>';
					echo '<td>'.$F_Name.'</td>';
					echo '<td>'.$L_Start.'</td>';
					echo '<td>'.$L_End.'</td>';
					echo '<td>'.$L_Reason.'</td>';
					echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["Leave_ID"] . '">'. "</td>";
					echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["Leave_ID"] . '">'."</td>";
					echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
					echo '</tr>';
				}
				
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
			}else{
				echo"You have no pending maternity leaves";
			}
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";
			
			$bereavment=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Bereavment'
				");
				if(mysql_num_rows($bereavment)){
					echo '<center>';
					echo "Bereavment leave Request";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>L_Reason</th>';
					echo '<th>Approve</th>';
					echo '<th>Disapprove</th>';
					echo '<th>Comment for the employee</th>';
					echo '</tr>';
					
					echo "<form action='BereavmentLeaveApproval.php' method='POST'>";
					while($row = mysql_fetch_array($bereavment)){ 				
						$F_Name = $row['F_Name'];
						$L_Name = $row['L_Name'];
						$L_Start = $row['L_Start'];
						$L_End = $row['L_End'];
						$L_Reason = $row['L_Reason'];
						
						echo '<td>'.$L_Name.'</td>';
						echo '<td>'.$F_Name.'</td>';
						echo '<td>'.$L_Start.'</td>';
						echo '<td>'.$L_End.'</td>';
						echo '<td>'.$L_Reason.'</td>';
						echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["Leave_ID"] . '">'. "</td>";
						echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["Leave_ID"] . '">'."</td>";
						echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
				}else{
					echo"You have no pending bereavment leaves";
				}
				
				
				
				
				
				
				
				
				
				
				
?>