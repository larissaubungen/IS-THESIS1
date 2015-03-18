<?php

$sickStart = $_POST['sickStart'];
$sickEnd = $_POST['sickEnd'];

echo"start $sickStart end: $sickEnd";
$paternityStart = $_POST['paternityStart'];
$paternityEnd = $_POST['paternityEnd'];
$maternityStart = $_POST['maternityStart'];
$maternityEnd = $_POST['maternityEnd'];
$bereavmentStart = $_POST['bereavmentStart'];
$bereavmentEnd = $_POST['bereavmentEnd']; 

    mysql_connect("localhost", "root", "")
        or die(mysql_error());
    mysql_select_db("lbas_hr") 
        or die(mysql_error());
        

if(!empty($sickStart) && empty($paternityStart) && empty($maternityStart) && empty($bereavmentStart)){
	
		$insertLeave = "INSERT INTO leave_table(L_Start, L_End, Reason,L_Status, L_Type)
						VALUES('".$sickStart."','".$sickEnd."','Sick','Pending', 'Sick')";
		$result=mysql_query($insertLeave);	
			if($result){
			echo"Success!";
			} else {
				echo "&nbsp Error";
			}

}else if(empty($sickStart) && !empty($paternityStart) && empty($maternityStart) && empty($bereavmentStart)){
	
		$insertLeave = "INSERT INTO leave_table(L_Start, L_End, Reason,L_Status, L_type)
						VALUES('".$paternityStart."','".$sickEnd."','Sick','Pending','Paternity' )";
		$result=mysql_query($insertLeave);	
			if($result){
			echo"Success!";
			} else {
				echo "&nbsp Error";
			}
}else if(empty($sickStart) && empty($paternityStart) && !empty($maternityStart) && empty($bereavmentStart)){
	
		$insertLeave = "INSERT INTO leave_table(L_Start, L_End, Reason,L_Status, L_Type)
						VALUES('".$maternityStart."','".$maternityEnd."','Sick','Pending', 'ereavment')";
		$result=mysql_query($insertLeave);	
			if($result){
			echo"Success!";
			} else {
				echo "&nbsp Error";
			}

}
?>