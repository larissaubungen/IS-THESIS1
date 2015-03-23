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
	<div class="container">
		<?php

		//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());


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

			/*
				echo $emp_Lname. "," .$emp_Fname. " ".$emp_Mname;
				echo $currentPosition;
			*/
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

			/*
				echo $free_Lname. "," .$free_Fname. " ".$free_Mname;	
			echo $currentPosition;
			*/
			

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

		?>

	</div>
</body>
</html>	