<?php
        mysql_connect("localhost", "root", "")
        or die(mysql_error());
        mysql_select_db("lbas_hr") 
        or die(mysql_error());
        
            $result = mysql_query("
            SELECT  F_Name, L_Name, ID_No, Department, TIMESTAMPDIFF(YEAR,B_Day,CURDATE()) AS age
            FROM person
			where B_Day IS NOT NULL AND TIMESTAMPDIFF(YEAR,B_Day,CURDATE()) > 1
              
            "); 

        
        while($row = mysql_fetch_array($result)){
		  $id = $row['ID_No'];
		  $fName = $row['F_Name'];
		  $lName = $row['L_Name'];
		  $department = $row['Department'];

		  echo "$fName $lName $department";
		  echo "<form action='SelectCandidatesRetirements.php' method='POST'>";	  
		  echo "<input type ='hidden' value='".$row['ID_No']."' name='id'>";
		  echo "<input type ='hidden' value='$department' name='department'>";
		  echo "<input type='submit' value='See candidates for replacement'>";
		  echo "</form>";
		  
            
				
        }
?>