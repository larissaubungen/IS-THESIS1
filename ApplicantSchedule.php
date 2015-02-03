<html>
<head>
</head>
<body>
<?php
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
		
		$idNo= $_POST['id'];
		
		//method for finding a match in the database from $userName, $userPass
	$result = mysql_query("
		SELECT  Schedule_ID, HR_Date, HR_Time, HR_Status, Teaching_Date, Teaching_Time, Teaching_Status, Test_Date, Test_Time, Test_Status, Coordinator_Date, Coordinator_Time, Coordinator_Status, Principal_Date, Principal_Time, Principal_Status, Applicant_Comments
		FROM applicant_schedule
		WHERE ID_No = '" . $idNo . "' 
	");
	
	while($row = mysql_fetch_array($result)){
	
	
		$hr_Date=$row["HR_Date"];
		$hr_Time=$row["HR_Time"];
		$hr_Status=$row["HR_Status"];
		$teaching_Date=$row["Teaching_Date"];
		$teaching_Time=$row["Teaching_Time"];
		$teaching_Status=$row["Teaching_Status"];
		$test_Date=$row["Test_Date"];
		$test_Time=$row["Test_Time"];
		$test_Status=$row["Test_Status"];
		$coor_Date=$row["Coordinator_Date"];
		$coor_Time=$row["Coordinator_Time"];
		$coor_Status=$row["Coordinator_Status"];
		$principal_Date=$row["Principal_Date"];
		$principal_Time=$row["Principal_Time"];
		$principal_Status=$row["Principal_Status"];
		$applicant_Comments=$row["Applicant_Comments"];
		
		echo "Applicant ID number: $idNo";
		echo "HR interview date: $hr_Date </br>";
		echo "HR interview time: $hr_Time </br>";
		echo "HR interview Status: $hr_Status </br>";
		echo "Teaching demo date: $teaching_Date </br>";
		echo "Teaching demo time: $teaching_Time </br>";
		echo "Teaching demo Status: $teaching_Status </br>";
		echo "Test date: $test_Date </br>";
		echo "Test time: $test_Time </br>";
		echo "Test Status: $test_Status </br>";
		echo "Coordinator interview date: $coor_Date </br>";
		echo "Coordinator interview time: $coor_Time </br>";
		echo "Coordinator interview Status: $coor_Status </br>";
		echo "Principal interview date: $principal_Date </br>";
		echo "Principal interview time: $principal_Time </br>";
		echo "Principal interview Status: $principal_Status </br>";
		echo "HR comments: $apllicant_Comments </br>";
	
	}
	
	echo"</br>";	
?> 
<form action='SubmitApplicantComment.php' method='post'>;
<textarea rows="4" cols="50" name="comments" placeholder="Comments"></textarea></br>
<?php
echo"<input type ='hidden' value='$idNo' name='id'>";
?>
<input type='submit' value='update' class='Log'>;