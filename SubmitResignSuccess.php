<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}

$user=$_SESSION['ID_No'];

$status = mysql_query("
    SELECT  resignation.R_Status
    FROM resignation 
    WHERE ID_No = '" . $user . "' 
      ");
$date = mysql_query("
    SELECT  resignation.D_Approved
    FROM resignation 
    WHERE ID_No = '" . $user . "' 
      ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LBASS Employee Resignation Request Submitted</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pages/dashboard.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="js/jquery1.11.3/jquery-ui.css">

    <script src="js/jquery1.11.3/jquery-ui.min.js"></script>
    <script src="js/jquery1.11.3/jquery.min.js"></script>

    <!--Boostrap
      <script src="js/jquery.min.js"></script>
    <script src="js/jquery-1.7.2.min.js"></script>
  -->
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
    	function reminder(){
    		confirm("Reminder: \n Please ensure your submission with letter of resignation. \n Your request will be subject for HR's approval.");
    	}
	
 		 });

	    	
    </script>

    <style = "text/css">
    	textarea{
    		margin-left: 3em;
    	}
    	#date_select2_day{
    		width: 5em;
    	}
    	#date_select2_month{
    		width: 7em;
    	}
    	#date_select2_year{
    		width: 5em;
    	}
    </style>
</head>
<body>
			<!--Main Navbar-->
	<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">LBASS Human Resource Information System </a>
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
              <li><a href="javascript:;">Logout</a></li>
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
            <li class="active"><a href="#"><i class="icon-home"></i><span>Resign</span> </a> </li>  
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->


    <div class="container">
    <h3>Filing of Resignation</h3>
    <hr/>

    <div class="container">
        <div class="alert alert-success">
          <b>Request Submitted.</b> Wait for further approval.
        </div>
        Status:
        <input type="text" value="<?=$status;?>" readonly><br/>
        Date Approved:
        <input type="text" value="<?=$date;?>" readonly>

    </div>
  

    </div>

</body>

</html>
