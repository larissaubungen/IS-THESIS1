<html>
<head>
</head>
<body>
<h1> Choose leave </h1>

<?php
	
	mysql_connect("localhost", "root", "")
        or die(mysql_error());
    mysql_select_db("lbas_hr") 
        or die(mysql_error());
		
		$sickTotal = 0;
		$paternityTotal =0;
		$maternityTotal =0;
		$bereavmentTotal =0;
		
		$sick = mysql_query("
            SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column
			FROM leave_table 
			where ID_No = '9283158370' and L_Status = 'Approve' and L_Type ='Sick'
		");
		while($row = mysql_fetch_array($sick)){
		
			
			$appSick = $row['summed_column'];
			$sickTotal = 5 - $appSick;
		?>
		<form action="sick.php" method="POST">
		<input type = "hidden" name="sickTotal" value="<?php echo "$sickTotal"?>">
		<input type="Submit" value="File For Sick Leave">
		</br>
		</form>
		<?php
		}
		
		$paternity = mysql_query("
            SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column 
			FROM leave_table 
			where ID_No = '9283158370' and L_Status = 'Approve' and L_Type = 'paternity'
		");
		while($row = mysql_fetch_array($paternity)){
			$appPaternity = $row['summed_column'];
			$paternityTotal = 7 - $appPaternity;
		?>
		<form action="localhost/test/test2/Paternity.php">
			<input type = "hidden" name="paternityTotal" value="<?php$paternityTotal ?>">
			<input type="Submit" value="File For Paternity Leave">
			</br>
		</form>
		<?php
		}
		
		$maternity = mysql_query("
            SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column 
			FROM leave_table 
			where ID_No = '9283158370' and L_Status = 'Approved' and L_Type = 'maternity'
		");
		while($row = mysql_fetch_array($maternity)){
			$appMaternity = $row['summed_column'];
			$maternityTotal = 60 - $appMaternity;
		?>
		<form action="localhost/test/test2/Maternity.php">
			<input type = "hidden" name="maternityTotal" value="<?php$maternityTotal ?>">
			<input type="Submit" value="File For Maternity Leave">
			</br>
		</form>
		<?php
		}
		
		$bereavment = mysql_query("
            SELECT SUM(CASE WHEN DATEDIFF(L_End, L_Start) = '0' THEN 1 ELSE DATEDIFF(L_End, L_Start) END) as summed_column 
			FROM leave_table 
			where ID_No = '9283158370' and L_Status = 'Approve' and L_Type = 'bereavment'
		");
		
		while($row = mysql_fetch_array($bereavment)){
			$appBereavment = $row['summed_column'];
			$bereavmentTotal = 4 - $appBereavment;
			
		?>	
		<form action="localhost/test/test2/Vacation.php">
			<input type = "hidden" name="bereavmentTotal" value="<?php$bereavmentTotal ?>">
			<input type="Submit" value="file for Bereavment Leave">
			</br>
		</form>
		<?php
		}
		
		echo"Sick leave left: $sickTotal </br>";
		echo"Paternity leave left: $paternityTotal</br>";
		echo"Maternity leave left: $maternityTotal</br>";
		echo"Bereavment leave left: $bereavmentTotal";
?>


</body>
</html>