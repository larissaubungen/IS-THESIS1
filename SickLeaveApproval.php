<?php
		

		mysql_connect("localhost", "root", "")
		or die(mysql_error());
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

		 	
			$approve=$_POST['approve'];
			$decline=$_POST['decline'];
			$status="Approve";
			$status2="Decline";
			$comments=$_POST['comments'];
			echo "$comments </br>";
			
			//echo "$reservation";

			for($i = 0; $i < Sizeof($decline); $i++){
			echo "$decline[$i]";
			}	
			
			$merge = array_merge((array)$approve, (array)$decline);
			
			for($i=0; $i < Sizeof($merge); $i++){
				
				$change=$comments[$i];
				$check=$merge[$i];
				$sql = "UPDATE leave_table
						SET HR_Comments='$change' 
						WHERE L_Code = '$check'" ;
				$result=mysql_query($sql);
			}
			
		 if( empty( $approve ) )
		{
		    
		}else{
			for($i=0; $i < sizeof($approve); $i++){
				
				$change=$approve[$i];
				
				$sql = "UPDATE leave_table
						SET L_Status = '$status'
						WHERE L_Code = '$change'" ;
				$result=mysql_query($sql);
			}
		//condition that check if inserting is successful
				if($result){
				
				
				} else {
					echo "&nbsp Error in approve";
				}
			}
				
		if( empty( $decline ) )
		{
		    
		}else{
			for($i=0; $i < sizeof($decline); $i++){
				$change=$decline[$i];
				
				$sql = "UPDATE leave_table
						SET L_Status = '$status2' 
						WHERE L_Code = '$change'" ;
				$result=mysql_query($sql);
			}
		//condition that check if inserting is successful
				if($result){
				
				  } else {
					echo "&nbsp Error in decline";
				}
		}
?>