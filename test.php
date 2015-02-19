<?php
error_reporting(0);
if($_POST['schedule'] == "Submit")
{
?>
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
		
	}else if($testTime >0){
		echo"testAlert();";
		
	}else if($teachingDemo>0){
		echo"teachingAlert();";
		
	}else if($coorTime>0){
		echo"coordinatorAlert();";
		
	}else if($principalTime>0){
		echo"principalAlert();";
		
	}else if(($hrTime>0) && ($testTime>0)){
		echo"hrTestAlert();";
		
	}else if(($hrTime>0) && ($teachingDemo>0)){
		echo"hrTeachingAlert();";
		
	}else if(($hrTime >0) && ($coorTime>0)){
		echo"hrCoorAlert();";
		
	}else if(($hrTime>0) && ($principalTime>0)){
		echo"hrPrincipalAlert();";
		
	}else if(($testTime>0) && ($coorTime>0)){
		echo"testCoordinatorAlert();";
		
	}else if(($testTime>0) && ($teachingDemo>0)){
		echo"testTeachingAlert();";
		
	}else if(($testTime>0) && ($principalTime>0)){
		echo"testPrincipalAlert();";
		
	}else if(($teachingDemo >0) && ($coorTime>0)){
		echo"teachingCoordinatorAler();";
		
	}else if(($teachingDemo>0) && ($principalTime>0)){
		echo"teachngPrincipalAlert();";
		
	}else if(($principalTime>0) && ($coorTime>0)){
		echo"principalCoorInterviewAlert();";
		
	}else if(($hrTime>0) && ($teachingDemo>0) && ( $testTime>0) && ($coorTime>0) && ($principalTime>0)){
		echo"allAlert();";
		
	}else{
		$insert="INSERT INTO applicant_schedule (Schedule_ID, ID_No, HR_Date, HR_Time, HR_Status, Teaching_Date, Teaching_Time, Teaching_Status, Test_Date, Test_Time, Test_Status, Coordinator_Date, Coordinator_Time, Coordinator_Status, Principal_Date, Principal_Time, Principal_Status, HR_Comments)
						VALUES('". $Schedule_ID ."', '". $ID_No ."', '". $hr_Date ."', '". $hr_Time ."', '". $Status ."', '". $teaching_Date ."', '". $teaching_Time ."', '". $Status ."', '". $test_Date ."', '". $test_Time ."', '". $Status ."', '". $coor_Date ."', '". $coor_Time ."', '". $Status ."', '". $principal_Date ."', '". $principal_Time ."', '". $Status ."', '". $hr_Comments ."')";


		$result=mysql_query($insert);

				//condition that check if inserting is successful
		if($result){
			echo"successfulAlert();";
			echo 'window.location.href = "listofapplicant.php";';
		} else {
			echo "&nbsp Error".mysql_error();
		}
	}
	}
?>
</script>
<html>
<head>
<link rel="stylesheet" href="jquery/jquery-ui.css">
  <script src="jquery/jquery-1.9.1.js"></script>
  <script src="jquery/jquery-ui.js"></script>

 	<link href="content/shared/styles/examples-offline.css" rel="stylesheet">
    <link href="styles/kendo.common.min.css" rel="stylesheet">
    <link href="styles/kendo.rtl.min.css" rel="stylesheet">
    <link href="styles/kendo.default.min.css" rel="stylesheet">
    <link href="styles/kendo.dataviz.min.css" rel="stylesheet">
    <link href="styles/kendo.dataviz.default.min.css" rel="stylesheet">
    <script src="js/kendo.all.min.js"></script>
    <script src="content/shared/js/console.js"></script>
 <script>
  $(document).ready(function(){
    $("#hr").datepicker({
        minDate: "+1D",
        maxDate: "+60D",
        numberOfMonths: 1,
        onSelect: function(selected) {
          $("#txtToDate").datepicker("option","minDate", selected)
		  $(".selector").datepicker("option", "dateFormat", "yy-mm-dd")
        }
    });
    $("#test").datepicker({ 
        minDate: "+1D",
        maxDate:"+60D",
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
		   $(".selector").datepicker("option", "dateFormat", "yy-mm-dd")
        }
    });  
	
	$("#coordinator").datepicker({ 
        minDate: "+1D",
        maxDate:"+60D",
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
		   $(".selector").datepicker("option", "dateFormat", "yy-mm-dd")
        }
    });  
	
	$("#principal").datepicker({ 
        minDate: "+1D",
        maxDate:"+60D",
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
		   $(".selector").datepicker("option", "dateFormat", "yy-mm-dd")
        }
    });  
	
	$("#Demo").datepicker({ 
        minDate: "+1D",
        maxDate:"+60D",
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
		   $(".selector").datepicker("option", "dateFormat", "yy-mm-dd")
        }
    });  
});


 </script>

 <script>
         
                $(document).ready(function() {
                    // create TimePicker from input HTML element
                    $("#time1").kendoTimePicker();
                });
				
				$(document).ready(function() {
                    // create TimePicker from input HTML element
                    $("#time2").kendoTimePicker();
                });
				
				$(document).ready(function() {
                    // create TimePicker from input HTML element
                    $("#time3").kendoTimePicker();
                });
				
				$(document).ready(function() {
                    // create TimePicker from input HTML element
                    $("#time4").kendoTimePicker();
                });
				
				$(document).ready(function() {
                    // create TimePicker from input HTML element
                    $("#time5").kendoTimePicker();
                });
</script>
        
 
 
</head>
<body>
<?php
	$idNo = $_POST['id'];
	
	//echo"<input type ='hidden' value='$user' name='id'>";
?>
<form action='Schedule.php' method='post'>
Hr Interview: <input type="text" value="<?php echo $hr_Date ?>" id="hr" placeholder="Start Date" name="hrInterview" class="selector" />
			  <input id="time1" value="<?php echo $hr_Time1?>" name="hrTime" required/></br>
Teaching Demo: <input type="text" value="<?php echo $teaching_Date ?>" id="Demo" placeholder="Start Date" name="teachingDemo" class="selector" />
			  <input id="time5" value="<?php echo $teaching_Time1?>" name="teachingTime" required/></br>
Test Date:    <input type="text" id="test"  value="<?php echo $test_Date?>" placeholder="Start Date" name="test" class="selector"/>
			  <input id="time2" value="<?php echo $test_Time1?>" name="testTime" required/></br>
Coordinator Interview: <input type="text" id="principal" value="<?php echo $coor_Date ?>" placeholder="Start Date" name="coorInterview" class="selector" />
			  <input id="time3" value="<?php echo $coor_Time1?>" name="coorTime" /></br>
Principal Interview: <input type="text" id="coordinator" value="<?php echo $principal_Date?>" placeholder="Start Date" name="principalInterview" class="selector" />
			  <input id="time4" value="<?php echo $principal_Time1?>" name="principalTime" /></br>
<textarea rows="4" cols="50" name="comments" placeholder="Comments"></textarea></br>
<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
<input type='submit' value='Submit' class='Log' name='schedule'>;
</body>
</html>