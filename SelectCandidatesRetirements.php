<?php
	$department = $_POST['department'];
	$id = $_POST['id'];

	mysql_connect("localhost", "root", "")
        or die(mysql_error());
    mysql_select_db("lbas_hr") 
		or die(mysql_error());
		
	/*echo"$department";
	echo"$id";*/

	if ($department == 'HR department'){
		echo"lala";
	
		$result = mysql_query("Select person.ID_No as Id, F_Name, L_Name
							   from person, eval_gpe_nonteaching_2a, eval_gpe_nonteaching_2b
							   where eval_gpe_nonteaching_2a.Result >= 82.00 and eval_gpe_nonteaching_2b.Result >= 82.00 and person.Department = 'HR department' and person.ID_No LIKE eval_gpe_nonteaching_2a.ID_No
						    ");
		
		echo"Possible replacements are: </br>";
		while($row = mysql_fetch_array($result)){
			$IdNo=$row['Id'];
			$Fname=$row['F_Name'];
			$Lname=$row['L_Name'];
			
			echo"IDNumber: $IdNo</br>";
			echo"First name: $Fname</br>";
			echo"Last name: $Lname</br>";
			echo"</br>";
			
		}
	}else{
	echo"No one is available for that position";
	
	}

	
?>