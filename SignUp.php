<!DOCTYPE html>
<html lang="en">
 <head>
    <title>LBASS Human Resource Information System</title>
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
<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
    } 
    else if ($_SESSION['ID_No'] != 'Admin'){
      header('Location:ErrorAuthentication.php');  
    }       

		function getRandomString($length = 10) { //function for Generating Random Username
            $validCharacters = "1234567890";
            $validCharNumber = strlen($validCharacters);
         
            $result = "";
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            } 
            return $result;
        }
        $idNo=getRandomString(); //setting a PHP variable to the ID Number
		
		function getRandomPassword($length = 6) { //function for Generating Random Password
            $validCharacters = "qwertyuiopasdfghjklzxcvbnm1234567890";
            $validCharNumber = strlen($validCharacters);
         
            $result = "";
         
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            }
            return $result;
        }
        $password=getRandomPassword(); //setting a PHP variable to the Password
	?>
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
      <li class="active"><a href="http://localhost/IS-THESIS1/HR_Page.php"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
      <li><a href="http://localhost/IS-THESIS1/EmployeesPage.php"><i class="icon-user"></i><span>Employees</span> </a> </li>
      

      <li><a href="ReportsPage.php"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
      <li><a href="AttendancePage.php"><i class="icon-table"></i><span>Attendance</span> </a></li>
      <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>
        <span>Applicants</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">

          <li><a href="http://localhost/IS-THESIS1/ListOfApplicant.php">View Current Applicants</a></li>
          <li><a href="http://localhost/IS-THESIS1/Signup.php">Add Applicant</a></li>
        </ul>    
      <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
         <ul class="dropdown-menu">
            <li><a href="HR_Resignation.php">Resignations</a></li>
            <li><a href="HR_Transfer.php">Transfers</a></li>
         </ul> 
      </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->


<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="AccountSendEmail.php" method="post">
		
			<h1>Generate an <br>Applicant Account</h1>
			
			<div class="login-fields">
				
				<div class="field">
					<label for="idNo">ID Number:</label>
					ID Number: <input type="text" id="idNo" name="idNo" value="<?php echo "$idNo"; ?>" class="login" readonly/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>	
					Password: <input type="text" id="password" name="password" value="<?php echo "$password" ?>" class="login" readonly/>
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="Email">Email:</label>	
					E-mail Address<input type="text" id="email" name="email" value="" class="login"/>
				</div> <!-- /field -->
				
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				
				<button class="button btn btn-primary btn-large" Align="center" button onclick="myFunction()">Send</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>
