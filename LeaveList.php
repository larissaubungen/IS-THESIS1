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
			<div class="shortcuts"> 

<?php
	$user=$_SESSION['ID_No'];
	mysql_connect("localhost", "root", "")
        or die(mysql_error());
    mysql_select_db("lbas_hr") 
        or die(mysql_error());
		
		$sickTotal = 0;
		$paternityTotal =0;
		$maternityTotal =0;
		$bereavmentTotal =0;
		
		$sick = mysql_query("
            SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column
			FROM leave_table 
			where ID_No = '$user' and L_Status = 'Approve' and L_Type ='Sick'
		");
		while($row = mysql_fetch_array($sick)){
		
			
			$appSick = $row['summed_column'];
			$sickTotal = 5 - $appSick;
		?>
		<form action="sick.php" method="POST">
		<input type = "hidden" name="sickTotal" value="<?php echo "$sickTotal";?>">
		<input type="Submit" class="shortcut-btn btn-danger" value="File For Sick Leave (Left:<?php echo "$sickTotal"?>)">
		</br>
		</form>
		<?php
		}
		$gender = mysql_query("
			select Gender
			from person
			where ID_No = '$user'
		");
		while($row = mysql_fetch_array($gender)){
		$gender1 = $row['Gender'];
			if($gender1 == 'Male'){
			$paternity = mysql_query("
				SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column 
				FROM leave_table 
				where ID_No = '$user' and L_Status = 'Approve' and L_Type = 'paternity'
			");
			while($row = mysql_fetch_array($paternity)){
				$appPaternity = $row['summed_column'];
				$paternityTotal = 7 - $appPaternity;
				echo "$paternityTotal";
			?>
			<form action="Paternity.php" method="POST">
				<input type = "hidden" name="paternityTotal" value="<?php echo"$paternityTotal" ?>">
				<input type="Submit" class="shortcut-btn btn-danger" value="File For Paternity Leave(Left:<?php echo "$paternityTotal"?>)">
				</br>
			</form>
			<?php
			}
		}else{
			$maternity = mysql_query("
				SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column 
				FROM leave_table 
				where ID_No = '$user' and L_Status = 'Approve' and L_Type = 'maternity'
			");
			while($row = mysql_fetch_array($maternity)){
				$appMaternity = $row['summed_column'];
				$maternityTotal = 60 - $appMaternity;
			?>
			<form action="Maternity.php" method="POST">
				<input type = "hidden" name="maternityTotal" value="<?php echo "$maternityTotal" ?>">
				<input type="Submit" class="shortcut-btn btn-danger" value="File For Maternity Leave(Left:<?php echo "$maternityTotal"?>)">
				</br>
			</form>
			<?php
			}
		}
	}	
		$bereavment = mysql_query("
            SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column 
			FROM leave_table 
			where ID_No = '$user' and L_Status = 'Approve' and L_Type = 'bereavment'
		");
		
		while($row = mysql_fetch_array($bereavment)){
			$appBereavment = $row['summed_column'];
			$bereavmentTotal = 4 - $appBereavment;
			
		?>	
		<form action="Vacation.php">
			<input type = "hidden" name="bereavmentTotal" value="<?php echo"$bereavmentTotal" ?>">
			<input type="Submit" class="shortcut-btn btn-danger" value="file for Bereavment Leave(Left:<?php echo "$bereavmentTotal"?>)">
			</br>
		</form>
		<?php
		}
			?>
			<!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          </div>
</body>
</html>
