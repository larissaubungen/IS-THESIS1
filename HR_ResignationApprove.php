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
	<title>LBASS Resignation Approval</title>
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

   	}
   </style>

</head>
<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html"><h3>LBASS Human Resource Information System </h3> </a>
          </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
	<div class="container">
		<?php

		//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	$resignee_FName = $_POST['firstName'];
	$resignee_LName = $_POST['lastName'];
	$resignee_ID = $_POST['idNumber'];



		//displaying prompt for resignation
		echo "<br/><h4>Resignation Request</h4><hr>";
		echo '<div class="thumbnail clearfix">';
			echo '<div>';
			echo "<h4>You are to approve the resignation of ".$resignee_LName. ", ". $resignee_FName.
				 "<br/> Are you sure?</h4><br/><br/>";
			?>
			<input type=submit class="btn btn-primary " value="Yes" onClick="location='HR_ResignRecommend.php'">
			<?php
			echo "&nbsp &nbsp &nbsp";
			echo '<input type= "submit" class="btn btn-danger" id="yes"  pull-right" value="No" onClick="self.close();">';
	      	echo '</div>';
      	echo '</div>';
		?>

	</div>
</body>
</html>	