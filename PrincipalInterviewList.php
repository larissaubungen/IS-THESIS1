<html>
<head>
</head>
<body>
<p> Below are the list of applicants that needs to be interviewed:
<?php

	mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
				
		$result = mysql_query("
				  SELECT  F_Name, L_Name, applicant_schedule.ID_No, applicant_schedule.Schedule_ID, HR_Status, Teaching_Status, Test_Status
				  FROM person, applicant_schedule
				  WHERE E_Status = 'Applicant' AND HR_Status = 'Done' AND Teaching_Status = 'Done' and Test_Status = 'Done' AND applicant_schedule.ID_No LIKE person.ID_No AND Coordinator_Status = 'Done'
				");
				
			echo "<form action='SchedulePrincipalInterview.php' method='POST'>";
			echo "<select class='items' name='id'>";
			while($row = mysql_fetch_array($result)){
				
				$id = $row["ID_No"];
				echo "<option name='item' value='$id'>". $row["F_Name"] . $row["L_Name"] . "</option>"; 
			}
			echo "<input type='submit' value='Select Applicant'>";
			echo"</form>";
			


?>


</body>
</html>