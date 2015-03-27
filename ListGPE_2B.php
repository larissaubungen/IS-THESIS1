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
<H1> 
<?php
		$idNo = $_POST['id'];
		$lastName='';
		$firstName='';
		
		$retrieveName = "SELECT L_Name, F_Name  
                         FROM person
                         WHERE ID_No = '".$idNo."'";
        $check = mysql_query($retrieveName);
             
			 while ($row = mysql_fetch_array($check)) {
                $lastName = $row["L_Name"];
                $firstName = $row["F_Name"];
			}
		echo"<h1> $firstName $lastName's results";

		$result = mysql_query("
            SELECT YEAR(STR_TO_DATE(Date, '%Y-%m-%d')) as year
            FROM eval_gpe_nonteaching_2b
            WHERE ID_No LIKE '".$idNo."'
            "); 
		
		echo '<center>';
		echo '<table id="tfhover" class="tftable" border="1">';
		echo '<tr>';
		echo '<th>Year</th>';
		echo '<th>Go to result</th>';
		echo '</tr>';
		
		while($row = mysql_fetch_array($result)){
        
			$year = $row['year'];
			echo '<td>'.$year.'</td>';
			?>
			<td>
			<form action="ResultGPE_2B.php" method="post">
			<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
			<input type="hidden" name="date" value="<?PHP echo $year ?>"/>
			<input type="submit" value="Select" name="Pass"> 
			</form>
			</td>
			<?php
			echo '</tr>';
        }
		echo '</table>';
	



?>
