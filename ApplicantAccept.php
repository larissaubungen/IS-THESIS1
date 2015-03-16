<?php

	mysql_connect('localhost', 'root', '')
						or die(mysql_error());
		
					mysql_select_db('lbas_hr') 
						or die(mysql_error());
	$applicantID = $_POST['applicantID'];

	$checkStatus = mysql_query("SELECT E_Status
					FROM person
					WHERE ID_No = '".$applicantID."' ");

	$updateStatus = "UPDATE person
					 SET E_Status = 'Employee'
					 WHERE ID_No = '".$applicantID."' ";
	$updateQuery = mysql_query($updateStatus);

	

	if($updateQuery && $checkStatus){
		echo $applicantID;
		echo "success";
		while ($row= mysql_fetch_array($checkStatus)) {
		echo $row['E_Status'];
	}
	} else{
		echo "failed";
	}
?>