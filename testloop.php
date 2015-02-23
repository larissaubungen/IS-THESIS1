<html>
<?php
//error_reporting(0);
if($_POST['schedule'] == "Submit")
{
	
	$test_Date=$_POST['testInterview'];
	$test_Time1=$_POST['testTime'];
	$test_Comments=$_POST['comments'];
	$Status= 'Pending';
	$list = $_POST['list'];

	echo "date: $test_Date </br>";
	echo "Time: $test_Time1 </br>";
	echo "coomments: $test_Comments </br>";
	
	for($i = 0; $i < Sizeof($list); $i++){
		echo "$list[$i]";
	}	

	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	
	$test_Time = date('H:i:s', strtotime($test_Time1));
	
		for($i=0; $i < Sizeof($list); $i++){
			$check = $list[$i];
			
			$sql = "UPDATE applicant_schedule 
				   SET Test_Time = '$test_Time',
					   Test_Date = '$test_Date',
					   Test_Comments = '$test_Comments'
				   WHERE ID_No='$check'";
		
			$result=mysql_query($sql);
		}
					
				if($result){
				
				} else {
					echo "&nbsp Error";
				}
		
		
		
}


?>
