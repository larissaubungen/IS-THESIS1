<?php

	mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
				
				
	$sick=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, Reason, L_Code
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Sick'
				");
				
				if(mysql_num_rows($sick)>0){
					
					echo '<center>';
					echo "Sick leave Request";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>Reason</th>';
					echo '<th>Approve</th>';
					echo '<th>Disapprove</th>';
					echo '<th>Comment for the employee</th>';
					echo '</tr>';
					
					echo "<form action='SickLeaveApproval.php' method='POST'>";
					while($row = mysql_fetch_array($sick)){ 				
						$F_Name = $row['F_Name'];
						$L_Name = $row['L_Name'];
						$L_Start = $row['L_Start'];
						$L_End = $row['L_End'];
						$Reason = $row['Reason'];
						
						echo '<td>'.$L_Name.'</td>';
						echo '<td>'.$F_Name.'</td>';
						echo '<td>'.$L_Start.'</td>';
						echo '<td>'.$L_End.'</td>';
						echo '<td>'.$Reason.'</td>';
						echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["L_Code"] . '">'. "</td>";
						echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["L_Code"] . '">'."</td>";
						echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
					

				}else{
					echo"You have no sick leaves pending";
				}
				
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";

			$paternity=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, Reason, L_Code
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Paternity'
				");
				
				if(mysql_num_rows($paternity)>0){
					echo '<center>';
					echo "Paternity leave Request";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>Reason</th>';
					echo '<th>Approve</th>';
					echo '<th>Disapprove</th>';
					echo '<th>Comment for the employee</th>';
					echo '</tr>';
					
					echo "<form action='PaternityLeaveApproval.php' method='POST'>";
					while($row = mysql_fetch_array($paternity)){ 				
						$F_Name = $row['F_Name'];
						$L_Name = $row['L_Name'];
						$L_Start = $row['L_Start'];
						$L_End = $row['L_End'];
						$Reason = $row['Reason'];
						
						echo '<td>'.$L_Name.'</td>';
						echo '<td>'.$F_Name.'</td>';
						echo '<td>'.$L_Start.'</td>';
						echo '<td>'.$L_End.'</td>';
						echo '<td>'.$Reason.'</td>';
						echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["L_Code"] . '">'. "</td>";
						echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["L_Code"] . '">'."</td>";
						echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
				}else{
					echo "You have no pending paternity leaves";
				}
				
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";
				
			
			$maternity=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, Reason, L_Code
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Maternity'
				");
			if(mysql_num_rows($maternity)>0){
			
				echo '<center>';
				echo "Maternity leave Request";

				echo '<table id="tfhover" class="tftable" border="1">';
				echo '<tr>';
				echo '<th>Last Name</th>';
				echo '<th>First Name</th>';
				echo '<th>Start Of Leave</th>';
				echo '<th>End Of Leave</th>';
				echo '<th>Reason</th>';
				echo '<th>Approve</th>';
				echo '<th>Disapprove</th>';
				echo '<th>Comment for employee</th>';
				echo '</tr>';
				
				echo "<form action='MaternityLeaveApproval.php' method='POST'>";
				while($row = mysql_fetch_array($maternity)){ 
					$F_Name = $row['F_Name'];
					$L_Name = $row['L_Name'];
					$L_Start = $row['L_Start'];
					$L_End = $row['L_End'];
					$Reason = $row['Reason'];
					
					echo '<td>'.$L_Name.'</td>';
					echo '<td>'.$F_Name.'</td>';
					echo '<td>'.$L_Start.'</td>';
					echo '<td>'.$L_End.'</td>';
					echo '<td>'.$Reason.'</td>';
					echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["L_Code"] . '">'. "</td>";
					echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["L_Code"] . '">'."</td>";
					echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
					echo '</tr>';
				}
				
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
			}else{
				echo"You have no pending maternity leaves";
			}
				echo"</br>";
				echo"</br>";
				echo"</br>";
				echo"</br>";
			
			$bereavment=mysql_query("
					SELECT person.ID_No, F_Name, L_Name, L_Start, L_End, Reason, L_Code
					FROM leave_table, person
					WHERE person.ID_No like leave_table.ID_No and L_Status = 'Pending' and L_Type ='Bereavment'
				");
				if(mysql_num_rows($bereavment)){
					echo '<center>';
					echo "Bereavment leave Request";

					echo '<table id="tfhover" class="tftable" border="1">';
					echo '<tr>';
					echo '<th>Last Name</th>';
					echo '<th>First Name</th>';
					echo '<th>Start Of Leave</th>';
					echo '<th>End Of Leave</th>';
					echo '<th>Reason</th>';
					echo '<th>Approve</th>';
					echo '<th>Disapprove</th>';
					echo '<th>Comment for the employee</th>';
					echo '</tr>';
					
					echo "<form action='BereavmentLeaveApproval.php' method='POST'>";
					while($row = mysql_fetch_array($bereavment)){ 				
						$F_Name = $row['F_Name'];
						$L_Name = $row['L_Name'];
						$L_Start = $row['L_Start'];
						$L_End = $row['L_End'];
						$Reason = $row['Reason'];
						
						echo '<td>'.$L_Name.'</td>';
						echo '<td>'.$F_Name.'</td>';
						echo '<td>'.$L_Start.'</td>';
						echo '<td>'.$L_End.'</td>';
						echo '<td>'.$Reason.'</td>';
						echo "<td>".'<input name="approve[]" type="checkbox" value="' . $row["L_Code"] . '">'. "</td>";
						echo "<td>".'<input name="decline[]" type="checkbox" value="' . $row["L_Code"] . '">'."</td>";
						echo '<td>'.'<input type ="textarea" name = "comments">'.'</td>'; 
						echo '</tr>';
					}
					
					echo '</table>';
					echo '<center>';
					echo"<input type='submit' value='Submit' class='Log' style=float:right;>";
					echo'</form>';
				}else{
					echo"You have no pending bereavment leaves";
				}
				
				
				
				
				
				
				
				
				
				
				
?>