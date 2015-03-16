<?php
	    mysql_connect("localhost", "root", "")
			or die(mysql_error());
        mysql_select_db("lbas_hr") 
			or die(mysql_error());
			
		
        $department ='';
		
		  $result = mysql_query("
            SELECT ID_No, F_Name, L_Name, M_Name, E_Position1, Award1, Award2, 
				   Award3, Award4, Award5, Org_Aff1, Org_Aff2, Org_Aff3, Org_Aff4,
				   Org_Aff5, Experience1, Experience2, Experience3, Experience4, 
				   Experience5, Principal_Status
            FROM   person,resume, applicant_schedule
            WHERE  person.ID_No like resume.ID_No AND E_Status = Applicant and Department = '$Department' AND (Award1 IS NOT NULL OR Org_Aff1 IS NOT NULL OR Experience1 IS NOT NULL) 
        "); 
		
		while($row = mysql_fetch_array($result)){
			$fName= $row["F_Name"];
			$lName= $row["L_Name"];
			$mName= $row["M_Name"];
			$position = $row["E_Position1"];
			$award1 = $row["Award1"];
			$award2 = $row["Award2"];
			$award3 = $row["Award3"];
			$award4 = $row["Award4"];
			$award5 = $row["Award5"];
			$org1 = $row["Org_Aff1"];
			$org2 = $row["Org_Aff2"];
			$org3 = $row["Org_Aff3"];
			$org4 = $row["Org_Aff4"];
			$org5 = $row["Org_Aff5"];
			$exp1 = $row["Experience1"];
			$exp2 = $row["Experience2"];
			$exp3 = $row["Experience3"];
			$exp4 = $row["Experience4"];
			$exp5 = $row["Experience5"];
			$principal = $row["Principal_Status"];
			
			
			echo"Name: $fName $mName $lName</br>";
			if($award1 != null){
				echo"Award/s: </br>";
				echo"&nbsp &nbsp $award1</br>";
				if($award2 != null){
					echo"&nbsp &nbsp $award2</br>";
				}if($award3 != null){
					echo"&nbsp &nbsp $award3</br>";
				}if($award4 != null){	
					echo"&nbsp &nbsp $award4</br>";
				}if($award5 != null){
					echo"&nbsp &nbsp $award5</br>";
			}
			
		
		
		}


?>