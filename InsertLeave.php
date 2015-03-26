<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  }
  ?>      

<!DOCTYPE html>
<html lang="en">
<head>
<script>
function pop_up(){
window.open(localhost/ISTHESIS/,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1076,height=768,directories=no,location=no') 
}
</script>
<meta charset="utf-8">

 <?php
 error_reporting(0);
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


                echo '<title>' . $lastName . "," . " " . $firstName . '</title>';
              }


              ?>

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

        <li class="active"><a href="EmployeeProfileHome.php"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
        <li><a href="EmployeeProfilePage.php"><i class="icon-dashboard"></i><span>Profile</span> </a> </li>
        <li><a href=""><i class="icon-signal"></i><span>Reports and Records</span> </a> </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
         <ul class="dropdown-menu">
            <li><a href="">File for Leave</a></li>
            <li><a href="">File for Transfer</a></li>
            <li><a href="">File for Resignation</a></li>
         </ul> 
      </li>
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
            <!-- /widget-header -->
            <div class="widget-content">
<?php
function getRandomString($length = 5) { //function for Generating Random Username
            $validCharacters = "1234567890";
            $validCharNumber = strlen($validCharacters);
         
            $result = "";
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            } 
            return $result;
        }
        $leaveID=getRandomString();
		
$sickStart = $_POST['sickStart'];
$sickEnd = $_POST['sickEnd'];
$user=$_SESSION['ID_No'];
echo"start $sickStart end: $sickEnd";
$paternityStart = $_POST['paternityStart'];
$paternityEnd = $_POST['paternityEnd'];
$maternityStart = $_POST['maternityStart'];
$maternityEnd = $_POST['maternityEnd'];
$bereavmentStart = $_POST['bereavmentStart'];
$bereavmentEnd = $_POST['bereavmentEnd']; 
$reason = $_POST['reason'];
$date = date('Y-m-d');

    mysql_connect("localhost", "root", "")
        or die(mysql_error());
    mysql_select_db("lbas_hr") 
        or die(mysql_error());
        

if(!empty($sickStart) && empty($paternityStart) && empty($maternityStart) && empty($bereavmentStart)){
	
		$insertLeave = "INSERT INTO leave_table(L_Start, L_End, L_Reason,L_Status, L_Type, ID_No,L_DateFiled, Leave_ID)
						VALUES('".$sickStart."','".$sickEnd."','".$reason."','Pending', 'Sick', '".$user."', '".$date."', '".$leaveID."')";
		
		$updatePerson = "UPDATE person 
						 SET 	Leave_ID = '".$leaveID."', 
				 		 WHERE ID_No ='".$user."'";
		
		$result2=mysql_query($updatePerson);
		$result=mysql_query($insertLeave);	
			if($result){
			echo'<form action="EmployeeProfileHome.php">';
			echo'Success!';
			echo'<input type="submit" value="home">';		
			} else {
				die('Invalid query: ' . mysql_error());
			}

}else if(empty($sickStart) && !empty($paternityStart) && empty($maternityStart) && empty($bereavmentStart)){
	
		$insertLeave = "INSERT INTO leave_table(L_Start, L_End, L_Reason,L_Status, L_type,L_DateFiled, ID_No, Leave_ID)
						VALUES('".$paternityStart."','".$sickEnd."','".$reason."','Pending','Paternity', '".$date."', '".$user."', '".$leaveID."')";
		
		$updatePerson = "UPDATE person 
						 SET 	Leave_ID = '".$leaveID."', 
				 		 WHERE ID_No ='".$user."'";
		$result2=mysql_query($updatePerson);
		$result=mysql_query($insertLeave);	
			if($result){
			echo'<form action="EmployeeProfileHome.php">';
			echo'Success!';
			echo'<input type="submit" value="home">';
			} else {
				die('Invalid query: ' . mysql_error());
			}
}else if(empty($sickStart) && empty($paternityStart) && !empty($maternityStart) && empty($bereavmentStart)){
	
		$insertLeave = "INSERT INTO leave_table(L_Start, L_End, L_Reason,L_Status, L_Type,L_DateFiled, Leave_ID)
						VALUES('".$maternityStart."','".$maternityEnd."','".$reason."','Pending', 'Maternity', '".$user."', '".$leaveID."')";
		
		$updatePerson = "UPDATE person 
						 SET 	Leave_ID = '".$leaveID."', 
				 		 WHERE ID_No ='".$user."'";
		
		$result2=mysql_query($updatePerson);
		$result=mysql_query($insertLeave);	
			if($result){
			echo'<form action="EmployeeProfileHome.php">';
			echo'Success!';
			echo'<input type="submit" value="home">';
			} else {
				die('Invalid query: ' . mysql_error());			
			}

}
?>