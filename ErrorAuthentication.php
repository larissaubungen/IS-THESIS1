<?php
	session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } 
?>

<html lang="en">
<HEAD>
	<meta charset="utf-8">
    <title>LBASS HRIS</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="css/font-awesome.css" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

	<style type="text/css">
	.btn-link{
		margin-left: 6em;
	}
	</style>

</HEAD>
<BODY>
	<!--Navigation bar-->
	<div class="navbar navbar-fixed-top">	
	<div class="navbar-inner">		
		<div class="container">			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>			
			<a class="brand"	>
				LBASS Human Resource Information System			
			</a>					
			<div class="nav-collapse">
				<ul class="nav pull-right">
					</ul>					
				</div><!--/.nav-collapse -->			
			</div> <!-- /container -->			
		</div> <!-- /navbar-inner -->		
	</div> <!-- /navbar -->

	<!--Error Message Part-->
	<div class="account-container">	
		<div class="content clearfix">		
			<div class="alert alert-danger" role="alert">

		      <div class=/"alert-link"/> <b><h3> Authorization Error!</h3> <br/>  </b>
		       You are not authorized to view this Page.<br/>
		  	  </div> <br/>

		<?php
		$user = $_SESSION['ID_No'];

		mysql_connect("localhost", "root", "")
				or die(mysql_error());
				mysql_select_db("lbas_hr") 
				or die(mysql_error());
				

		$checkStatus = mysql_query
					   ("
					   	SELECT E_Status
					   	FROM person 
					   	WHERE ID_No = '".$user."'
							");
		while ($row = mysql_fetch_array($checkStatus)) {
			$E_Stat = $row["E_Status"];

			if ($E_Stat == 'Employee'){
		?>
      		<input type="submit" class="btn btn-link" onClick="location='EmployeesPage.php'" value="Return to Home Page">
      	<?php		
    		}
    		else if ($E_Stat == 'Admin') {
    	?>
    		<input type="submit" class="btn btn-link" onClick="location='HR_Page.php'" value="Return to Home Page">
    	<?php	
    		}
    		else if ($E_Stat == 'Applicant'){
    	?>
    		<input type="submit" class="btn btn-link" onClick="location='ApplicantPage.php'" value="Return to Home Page">
    	<?php
    		}
    		else{ //has no account in the system or E_Status
		?>
    			<input type="submit" class="btn btn-link" onClick="location='login.php'" value="Return to Login Page">
		<?php
    		}
    		}
		?>
    		</div>
    	</div>
</BODY>
</HTML>