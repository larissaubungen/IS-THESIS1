<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}

$user=$_SESSION['ID_No'];
$dateFiled = $_POST['dateFiled'];
$reason = $_POST['reason'];
$status = 'Pending';


	//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
		
	
	$DateStat = "INSERT INTO resignation(ID_No, D_Filed, reason, R_Status)
			VALUES ('".$user."','".$dateFiled."', '".$reason."','".$status."')";

	$result = mysql_query($DateStat);

	if ($result) {
		header('Location:SubmitResignSuccess.php');
	}
	else{
		header('Location:SubmitResignFailed.php');
	}


	
?>
