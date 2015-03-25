<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } 
  ?>      

<!DOCTYPE html>
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
        <li class="active"><a href="#"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
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
<<<<<<< HEAD
		
		if(mysql_num_rows($leaves) > 0){
		?>
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests*</span></a>
           <ul class="dropdown-menu">
              <li><a href="HR_Resignation.php">Resignations</a></li>
              <li><a href="HR_Transfer.php">Transfers</a></li>
			  <li><a href="LeaveRequest.php">Leaves*</a></li>
			  <li><a href="RetirementList.php">Retirement</a></li>
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
			  <li><a href="RetirementList.php">Retirement</a></li>
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
=======

        if ($leaves){ //if and else statement for handling the query

          if(mysql_num_rows($leaves) > 0)
          {
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
        			  <li><a href="LeaveRequest.php">Leaves</a></li>
                   </ul> 
                </li>
        		<?php
		      }
        }else{
            ?>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
                   <ul class="dropdown-menu">
                      <li><a href="HR_Resignation.php">Resignations</a></li>
                      <li><a href="HR_Transfer.php">Transfers</a></li>
                <li><a href="LeaveRequest.php">Leaves</a></li>
                   </ul> 
                </li>
            <?php
        }   ?>

    </div>

>>>>>>> origin/master
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          
          <!-- /widget -->
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Calendar</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div id='calendar'>
			  
			  <input type=button onClick="openwindow();" value='Create event'>
              </div>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-table"></i><span
                                        class="shortcut-label">Attendance</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Summary of Reports</span> </a>
                                        <a href="EmployeesPage.php" class="shortcut"><i class="shortcut-icon icon-group"></i><span class="shortcut-label">Employees</span></a>
                                        </a>
                                        <a href="http://localhost/IS-THESIS1/ListOfApplicant.php" class="shortcut"><i class="shortcut-icon icon-user"></i><span class="shortcut-label">Applicants</span></a>


                                         </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          <div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3> Leaves </h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
			<?php

	mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
				
				
	$sick=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Approve' and L_Type ='Sick' and (L_Start like CURDATE() or CURDATE() Between L_Start AND L_End or L_End like CURDATE() or CURDATE() < L_Start )
				");
				
				if(mysql_num_rows($sick)>0){
					
					echo '<center>';
					echo "Sick leaves Ongoing";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>L_Reason</th>';
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
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo'</form>';
					

				}else{
					
				}
				
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";

			$paternity=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Approve' and L_Type ='Paternity' and (L_Start like CURDATE() or CURDATE() Between L_Start AND L_End or L_End like CURDATE() or CURDATE() < L_Start )
				");
				
				if(mysql_num_rows($paternity)>0){
					echo '<center>';
					echo "Paternity leaves Ongoing";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>L_Reason</th>';
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
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo'</form>';
				}else{
					
				}
				
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";
				
			
			$maternity=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Approve' and L_Type ='Maternity' and (L_Start like CURDATE() or CURDATE() Between L_Start AND L_End or L_End like CURDATE() or CURDATE() < L_Start )
				");
			if(mysql_num_rows($maternity)>0){
			
				echo '<center>';
				echo "Maternity leaves Ongoing";

				echo '<table id="tfhover" class="tftable" border="1">';
				echo '<tr>';
				echo '<th>Last Name</th>';
				echo '<th>First Name</th>';
				echo '<th>Start Of Leave</th>';
				echo '<th>End Of Leave</th>';
				echo '<th>L_Reason</th>';
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
					echo '</tr>';
				}
				
					echo '</table>';
					echo '<center>';
					echo'</form>';
			}else{
			}
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";
			
			$bereavment=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, L_Reason, leave_table.Leave_ID
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Approve' and L_Type ='Bereavment' and (L_Start like CURDATE() or CURDATE() Between L_Start AND L_End or L_End like CURDATE() or CURDATE() < L_Start )
				");
				if(mysql_num_rows($bereavment)){
					echo '<center>';
					echo "Bereavment leaves ongoing";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>L_Reason</th>';
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
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo'</form>';
				}else{
					
				}			
?>
              <canvas id="area-chart"> 
			  
			  
			  </canvas>
              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>

   <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3> Message for Announcements</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                

                    <iframe src="https://im.chikka.com/#" height="600" width="1130" scrolling="auto">Message</iframe>

            </div>
            <!-- /widget-content --> 
          </div>



        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->

<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<script>     
		function openwindow()
		{
			window.open("ScheduleEvent.php","mywindow","menubar=1,resizable=1,width=500,height=250");
		}

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
		  /*
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          */
		  },
          editable: true,
          events: [
		  <?php
		  error_reporting(0);
				
				$events=mysql_query("
				SELECT HR_Date, HR_Time, HR_Status, F_Name, L_Name
				FROM applicant_schedule, person
				where person.ID_No like applicant_schedule.ID_No
				");
				
			while($row = mysql_fetch_array($events)) {
			$fName= $row['F_Name'];
			$lName = $row['L_Name'];
			//$hr_Date = $row['HR_Date'];
			list($year,$month,$day)=explode("-", $row['HR_Date']);
			list($hour,$minute,$seconds)=explode(":", $row['HR_Time']);
			?>
			{
<<<<<<< HEAD
			  title: 'Applicant human resource interview (<?php echo"$fName "?> <?php echo"$lName"?>) ',
              start: new Date(<?php echo $year; ?>,<?php echo $month; ?>-1, <?php echo $day; ?>, <?php echo $hour; ?>, <?php echo $minute; ?>),
			  allDay: false
			
			},
			<?php
			}
		  ?>
		  <?php
				
				$events1=mysql_query("
				SELECT Teaching_Date, Teaching_Time, Teaching_Status, F_Name, L_Name
				FROM applicant_schedule, person
				where person.ID_No like applicant_schedule.ID_No
				");
				
			while($row = mysql_fetch_array($events1)) {
			$fName= $row['F_Name'];
			$lName = $row['L_Name'];
			//$hr_Date = $row['HR_Date'];
			list($year,$month,$day)=explode("-", $row['Teaching_Date']);
			list($hour,$minute,$seconds)=explode(":", $row['Teaching_Time']);
			?>
			{
			  title: 'Teaching Demo (<?php echo"$fName "?> <?php echo"$lName"?>) ',
              start: new Date(<?php echo $year; ?>,<?php echo $month; ?>-1, <?php echo $day; ?>, <?php echo $hour; ?>, <?php echo $minute; ?>),
			  allDay: false 
			
			},
			<?php
			}
		  ?>
			<?php
				
				$events2=mysql_query("
				SELECT Test_Date, Test_Time, Test_Status
				FROM applicant_schedule, person
				where person.ID_No like applicant_schedule.ID_No
				");
				
			while($row = mysql_fetch_array($events2)) {
			$fName= $row['F_Name'];
			$lName = $row['L_Name'];
			//$hr_Date = $row['HR_Date'];
			list($year,$month,$day)=explode("-", $row['Test_Date']);
			list($hour,$minute,$seconds)=explode(":", $row['Test_Time']);
			?>
			{
			  title: 'Testing for applicants',
              start: new Date(<?php echo $year; ?>,<?php echo $month; ?>-1, <?php echo $day; ?>, <?php echo $hour; ?>, <?php echo $minute; ?>),
			  allDay: false
			
			},
			<?php
			}
		  ?>		 
		  <?php
				
				$events4=mysql_query("
				SELECT Coordinator_Date, Coordinator_Time, Coordinator_Status, F_Name, L_Name
				FROM applicant_schedule, person
				where person.ID_No like applicant_schedule.ID_No
				");
				
			while($row = mysql_fetch_array($events4)) {
			$fName= $row['F_Name'];
			$lName = $row['L_Name'];
			//$hr_Date = $row['HR_Date'];
			list($year,$month,$day)=explode("-", $row['Coordinator_Date']);
			list($hour,$minute,$seconds)=explode(":", $row['Coordinator_Time']);
			?>
			{
			  title: 'Coordinator Interview (<?php echo"$fName "?> <?php echo"$lName"?>) ',
              start: new Date(<?php echo $year; ?>,<?php echo $month; ?>-1, <?php echo $day; ?>, <?php echo $hour; ?>, <?php echo $minute; ?>),
			  allDay: false
			
			},
			<?php
			}
		  ?>
		  <?php
				
				$events5=mysql_query("
				SELECT Principal_Date, Principal_Time, Principal_Status, F_Name, L_Name
				FROM applicant_schedule, person
				where person.ID_No like applicant_schedule.ID_No
				");
				
			while($row = mysql_fetch_array($events5)) {
			$fName= $row['F_Name'];
			$lName = $row['L_Name'];
			//$hr_Date = $row['HR_Date'];
			list($year,$month,$day)=explode("-", $row['Principal_Date']);
			list($hour,$minute,$seconds)=explode(":", $row['Principal_Time']);
			?>
			{
			  title: 'Principal Interview (<?php echo"$fName "?> <?php echo"$lName"?>) ',
=======
			  title: 'Applicant human resource interview',
>>>>>>> origin/master
              start: new Date(<?php echo $year; ?>,<?php echo $month; ?>-1, <?php echo $day; ?>, <?php echo $hour; ?>, <?php echo $minute; ?>),
			  allDay: false
			
			},
			<?php
			}
<<<<<<< HEAD
		  ?>
=======
		  ?>  
>>>>>>> origin/master
          ]
        });
      });
    </script><!-- /Calendar -->
</body>
</html>
