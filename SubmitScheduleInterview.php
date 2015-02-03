<script type="text/javascript">
function hrAlert (){
	alert("There is someone else scheduled at your HR interview ");
}

function  testAlert(){
	alert("There is someone else scheduled at that test time");
}

function teachingAlert(){
	alert("There is someone else scheduled for a teaching demo at that time");
}

function coordinatorAlert(){
	alert("There is someone else scheduled at that coordinator interview time");
}

function principalAlert(){
	alert("There is someone else scheduled at that principal interview time");
}

function hrTestAlert(){
	alert("There is someone else scheduled at your HR interview and your Test time");
}

function hrTeachingAlert(){
	alert("There is someone else scheduled at your HR interview and teaching demo time");
}

function hrCoorAlert(){
	alert("There is someone else scheduled at your HR interview and Coordinator interview time");
}

function hrPrincipalAlert(){
	alert("There is someone else scheduled at your HR interview and Principal interview time");
}

function testTeachingAlert(){
	alert("There is someone else scheduled at your test and teaching demo time");
}

function testCoordinatorAlert(){
	alert("There is someone else scheduled at your test and coordinator interview time");
}

function testPrincipalAlert(){
	alert("There is someone else scheduled at your test and principal interview time");
}

function teachingCoordinatorAler(){
	alert("There is someone else scheduled at your teaching demo and coordinator interview time");
}

function teachngPrincipalAlert(){
	alert("There is someone else scheduled at your teaching demo and principal interview time");
}

function principalCoorInterviewAlert (){
	alert("There is someone else scheduled at your principal interview and coordinator interview time");
}

function allAlert (){
	alert("There is someone else scheduled in all the activities you scheduled");
}
function successfulAlert (){
	alert("You have successfully  set interview dates for the applicant!");
}




<?php

	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	$hr_Date=$_POST['hrInterview'];
	$hr_Time1=$_POST['hrTime'];
	$test_Date=$_POST['test'];
	$test_Time1=$_POST['testTime'];
	$coor_Date=$_POST['coorInterview'];
	$coor_Time1=$_POST['coorTime'];
	$principal_Date=$_POST['principalInterview'];
	$principal_Time1=$_POST['principalTime'];
	$teaching_Date=$_POST['teachingDemo'];
	$teaching_Time1=$_POST['teachingDemo'];
	$hr_Comments=$_POST['comments'];
	$ID_No = $_POST['id'];
	$Status= 'Pending';

	
	$hr_Time = date('H:i:s', strtotime($hr_Time1));
	$test_Time = date('H:i:s', strtotime($test_Time1));
	$coor_Time = date('H:i:s', strtotime($coor_Time1));
	$principal_Time = date('H:i:s', strtotime($principal_Time1));
	$teaching_Time = date('H:i:s', strtotime($teaching_Time1));
	
	
	function getRandomString($length = 10) {
		$validCharacters = "1234567890";
		$validCharNumber = strlen($validCharacters);
			 
		$result = "";
			 
		for ($i = 0; $i < $length; $i++) {
		$index = mt_rand(0, $validCharNumber - 1);
		$result .= $validCharacters[$index];
		}
			 
			return $result;
		}
			
	$Schedule_ID=getRandomString();
	
	$sameTime1=mysql_query("
	SELECT Schedule_ID 
	FROM applicant_schedule
	where HR_Time = '$hr_Time' and HR_Date = '$hr_Date'
	");
	
	$sameTime2=mysql_query("
	SELECT Schedule_ID 
	FROM applicant_schedule
	where Test_Time = '$test_Time' and Test_Date = '$test_Date'
	");
	
	$sameTime3=mysql_query("
	SELECT Schedule_ID 
	FROM applicant_schedule
	where Teaching_Time = '$teaching_Time' and Teaching_Date = '$teaching_Date'
	");
	
	$sameTime4=mysql_query("
	SELECT Schedule_ID 
	FROM applicant_schedule
	where Coordinator_Time = '$coor_Time' and Coordinator_Date = '$coor_Date'
	");
	
	$sameTime5=mysql_query("
	SELECT Schedule_ID 
	FROM applicant_schedule
	where Principal_Time = '$principal_Time' and Principal_Date = '$principal_Date'
	");
	
	$hrTime = mysql_num_rows($sameTime1);
	$testTime = mysql_num_rows($sameTime2);
	$teachingDemo = mysql_num_rows($sameTime3);
	$coorTime = mysql_num_rows($sameTime4);
	$principalTime = mysql_num_rows($sameTime5);
	
	if($hrTime > 0){
		echo"hrAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if($testTime >0){
		echo"testAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if($teachingDemo>0){
		echo"teachingAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if($coorTime>0){
		echo"coordinatorAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if($principalTime>0){
		echo"principalAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($hrTime>0) && ($testTime>0)){
		echo"hrTestAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($hrTime>0) && ($teachingDemo>0)){
		echo"hrTeachingAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($hrTime >0) && ($coorTime>0)){
		echo"hrCoorAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($hrTime>0) && ($principalTime>0)){
		echo"hrPrincipalAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($testTime>0) && ($coorTime>0)){
		echo"testCoordinatorAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($testTime>0) && ($teachingDemo>0)){
		echo"testTeachingAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($testTime>0) && ($principalTime>0)){
		echo"testPrincipalAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($teachingDemo >0) && ($coorTime>0)){
		echo"teachingCoordinatorAler();";
		echo 'window.location.href = "schedule.php";';
	}else if(($teachingDemo>0) && ($principalTime>0)){
		echo"teachngPrincipalAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($principalTime>0) && ($coorTime>0)){
		echo"principalCoorInterviewAlert();";
		echo 'window.location.href = "schedule.php";';
	}else if(($hrTime>0) && ($teachingDemo>0) && ( $testTime>0) && ($coorTime>0) && ($principalTime>0)){
		echo"allAlert();";
		echo 'window.location.href = "schedule.php";';
	}else{
		$insert="INSERT INTO applicant_schedule (Schedule_ID, ID_No, HR_Date, HR_Time, HR_Status, Teaching_Date, Teaching_Time, Teaching_Status, Test_Date, Test_Time, Test_Status, Coordinator_Date, Coordinator_Time, Coordinator_Status, Principal_Date, Principal_Time, Principal_Status, HR_Comments)
						VALUES('". $Schedule_ID ."', '". $ID_No ."', '". $hr_Date ."', '". $hr_Time ."', '". $Status ."', '". $teaching_Date ."', '". $teaching_Time ."', '". $Status ."', '". $test_Date ."', '". $test_Time ."', '". $Status ."', '". $coor_Date ."', '". $coor_Time ."', '". $Status ."', '". $principal_Date ."', '". $principal_Time ."', '". $Status ."', '". $hr_Comments ."')";


		$result=mysql_query($insert);

				//condition that check if inserting is successful
		if($result){
			echo"successfulAlert();";
			echo 'window.location.href = "ViewApplicantSchedule.php";';
		} else {
			echo "&nbsp Error".mysql_error();
		}
	}


/*
echo "Hr date: $hr_Date </br>";
echo "HR time: $hr_Time </br>";
echo "Test date: $test_Date </br>";
echo "Test time: $test_Time </br>";
echo "Coordinator date: $coor_Date </br>";
echo "Coordinator time: $coor_Time </br>";
echo "Principal date: $principal_Date </br>";
echo "Principal time: $principal_Time </br>";
*/

?>
</script>