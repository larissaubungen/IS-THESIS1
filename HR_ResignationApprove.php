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

</head>
<body>
	<div class="container">
		<?php

		$Applicant = mysql_query("SELECT * FROM `person` WHERE E_Status='Applicant'");
		$SubEmployee =  mysql_query("SELECT * FROM `person` WHERE E_Position2=' ' OR E_Position2 IS NULL");
		$FreeEmployee = mysql_query("SELECT * FROM `person` WHERE E_Position2=' ' OR E_Position2 IS NULL OR E_Position1 IS NULL OR E_Position1 IS NULL");
		?>
	</div>
</body>
</html>	