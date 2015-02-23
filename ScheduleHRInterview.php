	<?php
error_reporting(0);
if($_POST['schedule'] == "Submit")
{
?>
<script type="text/javascript">
function hrAlert (){
	alert("There is someone else scheduled at your HR interview ");
	
}
function successfulAlert (){
	alert("You have successfully  set interview dates for the applicant!");
	self.close();
}

<?php
	
	$hr_Date=$_POST['hrInterview'];
	$hr_Time1=$_POST['hrTime'];
	$hr_Comments=$_POST['comments'];
	$ID_No = $_POST['id'];
	$Status= 'Pending';


	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	
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
		
	$hr_Date=$_POST['hrInterview'];
	$hr_Time1=$_POST['hrTime'];
	
	
	$hr_Time = date('H:i:s', strtotime($hr_Time1));

			
	$Schedule_ID=getRandomString();
	
	$sameTime1=mysql_query("
	SELECT Schedule_ID 
	FROM applicant_schedule
	where HR_Time = '$hr_Time' and HR_Date = '$hr_Date'
	");
	
	if($hrTime > 0){
		echo"hrAlert();";
	}else{
	
	$insert="INSERT INTO applicant_schedule (Schedule_ID, ID_No, HR_Date, HR_Time, HR_Status, HR_Comments)
			 VALUES('". $Schedule_ID ."', '". $ID_No ."', '". $hr_Date ."', '". $hr_Time ."', '". $Status ."', '". $hr_Comments ."' )";
	
	$update = "UPDATE person 
			   SET Schedule_ID = '".$Schedule_ID."'
			   WHERE ID_No='".$ID_No."'";
	
	$result=mysql_query($insert);
	$result2=mysql_query($update);
	
			//condition that check if inserting is successful
			if($result && $result2){
				echo"successfulAlert();";
				//echo 'window.location.href = "listofapplicant.php";';
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
});
	</script>
        
  <script>
         
                $(document).ready(function() {
                    // create TimePicker from input HTML element
                    $("#time1").kendoTimePicker();
                });
</script>
 
</head>
<body>
<?php
	$idNo = $_POST['id'];
	
	//echo"<input type ='hidden' value='$user' name='id'>";
?>
<form action='ScheduleHRInterview.php' method='post'>
Hr Interview: <input type="text" value="<?php echo $hr_Date ?>" id="hr" placeholder="Start Date" name="hrInterview" class="selector" />
			  <input id="time1" value="<?php echo $hr_Time1?>" name="hrTime" required/></br>
			  <textarea rows="4" cols="50" name="comments" placeholder="Comments"></textarea></br>
<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
<input type='submit' value='Submit' class='Log' name='schedule'>;
</body>
</html>