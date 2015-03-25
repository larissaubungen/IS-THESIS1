<html>
<head>
</head>
<body>
<p> Below are the list of applicants that are qualified for testing:
<?php

	mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
				
		$result = mysql_query("
				  SELECT  F_Name, L_Name, applicant_schedule.ID_No, applicant_schedule.Schedule_ID, HR_Status, Teaching_Status, Test_Status
				  FROM person, applicant_schedule
				  WHERE E_Status = 'Applicant' AND HR_Status = 'Done' AND Teaching_Status = 'Done' and Test_Status = 'TBD' AND applicant_schedule.ID_No LIKE person.ID_No
				");
			
			//echo "<h2>PENDING RESERVATIONS</h2>";
			echo "<form action='ScheduleTest.php' method='POST'>";
			echo '<table id="tfhover" class="tftable" border="1">';
			echo        '<tr>';

			echo        '<th>Name</th>';
			echo        '<th>Select</th>';

				
			
			while($row = mysql_fetch_array($result)){
				
				$id = $row["ID_No"];
				$firstName = $row["F_Name"];
				$lastName = $row["L_Name"];
				
				echo '<tr>';
				echo   '<td>'. $firstName . ' ' . $lastName . '</br>' . '</td>'; 
				echo   "<td>" . '<center>' . '<input name="list[]" type="checkbox" value="' . $id . '">'. '</center>' . "</td>";
				
			}
			echo '</tr>';
			echo '</table>';
			echo "<input type='submit' value='Select Applicant'>";
			echo"</form>";


?>


</body>
</html>