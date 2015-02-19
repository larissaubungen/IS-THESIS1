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
				  SELECT  F_Name, L_Name, ID_No, Schedule_ID
				  FROM person
				  WHERE E_Status = 'Applicant' AND Schedule_ID IS NULL
				");
				
			echo "<form action='ScheduleHRInterview.php' method='POST'>";
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