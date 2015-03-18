
<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } 
  ?>
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
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="index.html"><i class="icon-user"></i><span>Employees</span> </a> </li>
        
        <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-table"></i><span>Attendance</span> </a></li>
        <?php
		$leaves=mysql_query("SELECT * 
							 FROM leave_table 
							 WHERE L_Status ='Pending'");
		
		if(mysql_num_rows($leaves) > 0){
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
			  <li><a href="HR_Transfer.php">Leaves</a></li>
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
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<body>

<?php
	
	$user=$_POST['idNo'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	


   require_once "Mail.php";

	$from = '<LBASAdmin@noreply.com>';
	$to = $email;
	$subject = 'LBAS Account';
	$body = "Hi, Sir/Mam \n Thank you for your interest for Applying in Laguna Bel Air School. Here are your log in details: \n \n ID Number: $user \n Password: $password";

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
	} else {
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$pass=""; // Mysql password 
		$db_name="lbas_hr"; // Database name 
		$tbl_name="person"; // Table name
		$tbl_name2="resume";
		
		mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
		
		
		$insert="INSERT INTO $tbl_name (ID_No, P_Word, E_Status )
				VALUES('". $user ."', '". $password ."', 'Applicant')";
				
				
		$result=mysql_query($insert);
				

		//condition that check if inserting is successful
				if($result){
				echo"<center>";
				echo"Successful! Press the button below to return home";
				?>
					<form action='HR_Page.php' method='post'>
					<input type='submit' value='Home' class='Log' name='schedule'>
				<?php
				echo"</center>";
				} else {
					echo "&nbsp Error".mysql_error();
				}

   }
?>
 </body>
 </html>

