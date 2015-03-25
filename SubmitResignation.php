<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}

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
	    <style = "text/css">
	    	.mainnav{
	    		padding-top: 3em;
	    	}
	    </style>
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
              <li><a href="logout.php">Logout</a></li>
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

<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">

        <li><a href="EmployeeProfileHome.php"><i class="icon-home"></i><span>Home</span> </a> </li>
        <li><a href="EmployeeProfilePage.php"><i class="icon-user"></i><span>Profile</span> </a> </li>
        <li><a href="#"><i class="icon-file-text"></i><span>Reports and Records</span> </a> </li>

        <li id="Requests" class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
         <ul class="dropdown-menu">
            <li><a href="LeaveList.php">File for Leave</a></li>
            <li><a href="#">File for Transfer</a></li>
            <li class="active"><a href="#">File for Resignation</a></li>
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
				

	<?php
	//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	$user=$_SESSION['ID_No'];
	$ResignID=$_POST['ResignID'];
	$dateFiled = $_POST['dateFiled'];
	$dateApprove = $_POST['D_Approve'];
	$reason = $_POST['Reason'];
	$status = 'Pending';
           
    
		
	$DateStat = "INSERT INTO resignation(Resign_ID, ID_No,Reason, Res_Status, Res_Date, Res_DateFiled)
			VALUES ('".$ResignID."','".$user."','".$reason."','".$status."', '".$dateApprove."','".$dateFiled."')";

	$updatePerson = "UPDATE `person` 
					 SET `Resign_ID`= '".$ResignID."' 
					 WHERE ID_No LIKE '".$user."' ";

	$result = mysql_query($DateStat);
	$result2 = mysql_query($updatePerson);


	if ($result && $result2) {
		//header('Location:SubmitResignSuccess.php');
		?>

	    <div class="container">	
	    <h3>Filing of Resignation</h3>
	    <hr/>

	    <div class="container">
	        <div class="alert alert-success">
	          <b>Request Submitted.</b> Wait for further approval.
	        </div>
	        <table>
	          <tr>
	            <td><p>Status:</p></td>
	            <td><input type="text" value="<?=$status;?>" readonly><br/></td>
	          </tr>
	          <tr>
	          	<?php
	          		if($status=='Pending'){
	          			echo "<td><p>Date Approved:</p></td>";
	          			echo "<td><input type='text' value='' readonly></td>";
	          		}
	          		else{
	          			echo "<td><p>Date Approved:</p></td>";
	          			echo "<td><input type='text' value='".$dateApprove."'> readonly></td>";
	          		}
	          	?>
	          </tr>
	        </table>
	    </div>
				  

	    </div>

	</body>

	</html>

		<?php
	}
	
	//else statement and page for failed resignation submit
	else{					
			 
			?>
					
			    <div class="container">
			    <h3>Filing of Resignation</h3>
			    <hr/>

			    <div class="container">
			        <div class="alert alert-error">
			          <b>Request Submission Failed.</b> <br/>
			           Duplication of request or submission error. <br/><br/>
			        </div>
			        <button type="button" class="btn btn-default"><a href="EmployeeResign.php">Retry</a></button>
			    </div>
			    </form>
			    </div>



 <script src="js/jquery.min.js"></script>
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
			</body>
			</html>
   <?php
	}
?>