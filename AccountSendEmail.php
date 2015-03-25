<!DOCTYPE html>
<html lang="en">
 <head>
    <title>LBASS Add Applicant Account</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
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
			  session_start();
			    if (!isset($_SESSION['ID_No'])) {
			    header('Location:login.php');
			    } 
			    else if ($_SESSION['ID_No'] != 'Admin'){
			      header('Location:ErrorAuthentication.php');  
			    }      
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
              <li><a href="http://localhost/IS-THESIS1/logout.php">Logout</a></li>
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
        <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
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
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<div class="container">

<?php

  $userID=$_POST['idNo'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	
   require_once "Mail.php";

	$from = '<LBASAdmin@noreply.com>';
	$to = $email;
	$subject = 'LBASS Applicant Account';
	$body = "Hi, Sir/Mam \n Thank you for your interest for Applying in Laguna Bel Air School. Here are your account details: \n \n ID Number: $userID \n Password: $password";

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'iamgastonvelarde@gmail.com',
			'password' => 'feb191995'
		));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo('<p>' . $mail->getMessage() . '</p>');

		?>

		<!--Error Message Part-->
	<div class="account-container">	
		<div class="content clearfix">		
			<div class="alert alert-danger" role="alert">

		      <div class=/"alert-link"/> <b><h3> Error!</h3> <br/>  </b>
		       E-mail was not sent. Retry sending e-mail. 
		  	  </div> <br/>

  		<button type="button" class="btn btn-primary" onclick="location='AccountSendEmail.php'">Retry</button>
  		<button type="button" class="btn btn-default" onclick="location='SignUp.php'">Return</button>
		</div>
	</div>

		<?php


	} else {
		
		 function getResumeID($length = 6) { //function for Generating Resume ID 
	            $validCharacters = "1234567890";
	            $validCharNumber = strlen($validCharacters);
	         
	            $result = "Res";
	            for ($i = 0; $i <= $length; $i++) {
	                $index = mt_rand(0, $validCharNumber - 1);
	                $result .= $validCharacters[$index];
	            } 
	            return $result;
	    }
	    $ResID=getResumeID(); //setting a PHP variable to the ID Number
		
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$pass=""; // Mysql password 
		$db_name="lbas_hr"; // Database name 
		$tbl_name="person"; // Table name
		$tbl_name2="resume";
		
		mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
		
		
		$insert="INSERT INTO $tbl_name (ID_No, P_Word, E_Status , Resume_ID)
				VALUES('". $userID ."', '". $password ."', 'Applicant', '".$ResID."')";
		
		
				
		$result=mysql_query($insert);
		//$result2=mysql_query($insert2);

		//condition that check if inserting is successful
				if($result){
					?>

					<div class="account-container">	
					  <div class="content clearfix">		
						<div class="alert alert-success" role="alert">

					      <div class=/"alert-link"/> <b><h3>E-mail Sent!</h3> <br/>  </b>
					        E-mail containing the Applicant Account details was sent sucessfully.
					  	  </div> <br/>
			      	<center><button type="button" class="btn btn-default" onclick="location='SignUp.php'">Return</button></center>
			    		</div>
			    	</div>

					<?php

				} else {
					echo "&nbsp Error".mysql_error();
				}

   }
?>
 </body>
 </html>

</div> <!--container-->

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/signin.js"></script>

</body>
</html>
