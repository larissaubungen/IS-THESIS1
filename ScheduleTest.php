<html>
<?php
error_reporting(0);
if($_POST['schedule'] == "Submit")
{
?>
<script type="text/javascript">
function testAlert (){
	alert("There is someone else scheduled at your HR interview ");
	
}
function successfulAlert (){
	alert("You have successfully  set interview dates for the applicant!");
	self.close();
}

<?php
	
	$test_Date=$_POST['testInterview'];
	$test_Time1=$_POST['testTime'];
	$test_Comments=$_POST['comments'];
	$Status= 'Pending';
	$list = $_POST['list'];


	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	
		
	$test_Date=$_POST['testInterview'];
	$test_Time1=$_POST['testTime'];
	
	
	$test_Time = date('H:i:s', strtotime($test_Time1));
	
		for($i=0; $i < Sizeof($list); $i++){
			$check = $list[$i];
			
			$sql = "UPDATE applicant_schedule 
				   SET Test_Time = '$test_Time',
					   Test_Date = '$test_Date',
					   Test_Comments = '$test_Comments',
					   Test_Status = '$Status'
				   WHERE ID_No='$check'";
		
			$result=mysql_query($sql);
		}
					
				if($result){
				
				} else {
					echo "&nbsp Error";
				}
				
		//echo"successfulAlert();";
		
		
		
}


?>

</script>

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
    $("#test").datepicker({
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
	//$idNo = $_POST['id'];
	$list = $_POST['list'];
	for($i = 0; $i < Sizeof($list); $i++){
		echo "$list[$i]";
	}	
	
?>
<form action='ScheduleTest.php' method='post'>
Hr Interview: <input type="text" value="<?php echo $test_Date ?>" id="test" placeholder="Start Date" name="testInterview" class="selector" />
			  <input id="time1" value="<?php echo $test_Time1?>" name="testTime" required/></br>
			  <textarea rows="4" cols="50" name="comments" placeholder="Comments"></textarea></br>			  
<?php
	for($i = 0; $i < Sizeof($list); $i++){
		echo "$list[$i]";
	echo "<input type='hidden' name='list[]' value='$list[$i]'/>";
	}	
?>

<input type='submit' value='Submit' class='Log' name='schedule'>;
</body>
</html>