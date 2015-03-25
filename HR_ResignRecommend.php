<?php 
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  }
$user=$_SESSION['ID_No'];
?>

<html>
<head>
	<meta charset="utf-8">
	<title>LBASS Resignation Recommendation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/pages/dashboard.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="js/jquery1.11.3/jquery-ui.css">

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/kendo.all.min.js"></script>

   <style = "text/css">

   	#yes{
   		margin-right: 1em;
   		margin-left: -10em;
   	}
   </style>

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
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Let Rivera (Dummy Data)<b class="caret"></b></a>
            <ul class="dropdown-menu">
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
        <li class="active"><a href="http://localhost/IS-THESIS1/HR_Page.php"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="http://localhost/IS-THESIS1/EmployeesPage.php"><i class="icon-user"></i><span>Employees</span> </a> </li>
        
        <li><a href=""><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href=""><i class="icon-table"></i><span>Attendance</span> </a></li>
        <li><a href=""><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href=""><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/IS-THESIS1/Signup.php">Add Applicant</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="container">
    <div class="row">
        <div class="span12">
            <ul class="thumbnails">
		<?php

		//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

		echo "<h3>Recommended Replacement/Substitute for Employee: CHUCHU </h3>"; //notice me senpai
		
		$idNumber = $_POST['idNumber'];
		$firstName = $_POST['firstName'];
		$middleName = $_POST['middleName'];
		$lastName = $_POST['lastName'];


		//for list of resignees
		$resignList = mysql_query("");

		// for replacement/substitute
			$applicantPool = mysql_query("SELECT `person.L_Name`, `person.F_Name`, 
										 `person.M_Name`, `resume.App_Position`
								  FROM `person`, `resume` 
								  WHERE E_Status='Applicant'");
	
		$availEmployee =  mysql_query("SELECT `ID_No`,`L_Name`, `F_Name`, `M_Name`, 
											  `E_Position1` 
									 FROM `person` 
									 WHERE `E_Position2`=' ' 
									 OR `E_Position2` IS NULL"  );
		$FreeEmployee = mysql_query("SELECT `ID_No`,`L_Name`, 
											`F_Name`, `M_Name`, 
											  `E_Position1` 
									 FROM `person` 
									 WHERE `E_Position2`=' ' 
									 OR `E_Position2` IS NULL 
									 OR `E_Position1` IS NULL 
									 OR `E_Position1` IS NULL");

		
		$employeeRecommendation = mysql_query("SELECT DISTINCT 
													person.ID_No, person.F_Name, person.L_Name, person.M_Name,  
    												work.E_Position1, work.E_Position2, work.Department, work.Subject, work.Subject_Type, work.Level, work.Grade, 
													TIMESTAMPDIFF(YEAR,work.Date_Assigned,CURDATE()) AS date_Employed
												FROM person, work
												WHERE 
													person.CurrentWork_ID IS NOT NULL AND 
												    work.ID_No LIKE person.ID_No AND 
												    work.Work_ID IS NOT NULL AND
													work.Date_Assigned IS NOT NULL AND 
												    TIMESTAMPDIFF(YEAR,work.Date_Assigned,CURDATE()) >=3");

		while ($row = mysql_fetch_array($employeeRecommendation)) 
		{
			$idNumber = $row['ID_No'];
			$Fname = $row['F_Name'];
			$Mname = $row['M_Name'];
			$Lname = $row['L_Name'];
			$currentPosition = $row['E_Position1'];			
			$subPosition = $row['E_Position2'];			
			$dept = $row['Department'];
			$subj = $row['Subject'];
			$subj_type = $row['Subject_Type'];
			$level = $row['Level'];
			$grade = $row['Grade'];
			
			
		  echo '<div class="thumbnail clearfix">';
          echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
          echo '<div class="caption" class="pull-left">';
          echo '<h4>';      
          echo '<a href="#" >'. $Fname . " " . $Mname .". " .$Lname.'</a>';
          echo '</h4>';
          echo '<small><b>ID Number: </b>'. $idNumber .'</small><br/>';
          echo '<small><b>Current Job Position 1: </b>'. $currentPosition .'</small><br/>';
                    echo'</div>';
                  echo'</div>';
                echo'</li>';
		}

		/*
		if($availEmployee === FALSE || $FreeEmployee === FALSE) { 
		    die(mysql_error()); // TODO: better error handling
		}

		//displaying prompt for resignation
		echo '<div class="thumbnail clearfix">';
			//echo '<div>';
			//echo "<h4>Are you sure?</h4><br/>";
			//echo '<input type= "submit" class="btn btn-primary icon id="yes"  pull-right" value="No" onClick="self.close();">';
	      	//echo '<input type= "submit" class="btn btn-primary icon  pull-right" value="Yes" onClick="location='HR_ResignRecommend.php'">';
	      	//echo '</div>';
      	echo '</div>';

		while ($row = mysql_fetch_array($availEmployee))
		{
			$idNumber = $row['ID_No'];
			$emp_Fname = $row['F_Name'];
			$emp_Mname = $row['M_Name'];
			$emp_Lname = $row['L_Name'];
			$currentPosition = $row['E_Position1'];

			
				echo $emp_Lname. "," .$emp_Fname. " ".$emp_Mname; //comment
				echo $currentPosition; //comment
			
		} 
		?>
			<hr/>
		<?php

		while ($row = mysql_fetch_array($FreeEmployee)) 
		{
			$idNumber = $row['ID_No'];
			$free_Fname = $row['F_Name'];
			$free_Mname = $row['M_Name'];
			$free_Lname = $row['L_Name'];
			$currentPosition = $row['E_Position1'];			

			
				echo $free_Lname. "," .$free_Fname. " ".$free_Mname;	 //comment
			echo $currentPosition;										//comment
			
			

		  echo '<div class="thumbnail clearfix">';
          echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
          echo '<div class="caption" class="pull-left">';
          echo '<h4>';      
          echo '<a href="#" >'. $free_Fname . " " . $free_Mname .". " .$free_Lname.'</a>';
          echo '</h4>';
          echo '<small><b>ID Number: </b>'. $idNumber .'</small><br/>';
          echo '<small><b>Current Job Position 1: </b>'. $currentPosition .'</small><br/>';
                    echo'</div>';
                  echo'</div>';
                echo'</li>';
		}
		*/

		

		?>

        </div>
    </div>
</div>
</body>
</html>	