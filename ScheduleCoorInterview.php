<?php
error_reporting(0);
if($_POST['schedule'] == "Submit")
{
?>
<script type="text/javascript">
function coorAlert (){
	alert("There is someone else scheduled at your HR interview ");
	
}
function successfulAlert (){
	alert("You have successfully  set interview dates for the applicant!");
	self.close();
}

<?php
	
	$coor_Date=$_POST['coorInterview'];
	$coor_Time1=$_POST['coorTime'];
	$coor_Comments=$_POST['comments'];
	$ID_No = $_POST['id'];
	$Status= 'Pending';


	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

	
		
	$coor_Date=$_POST['coorInterview'];
	$coor_Time1=$_POST['coorTime'];
	
	
	$coor_Time = date('H:i:s', strtotime($coor_Time1));

			
	
	$sameTime1=mysql_query("
	SELECT Schedule_ID 
	FROM applicant_schedule
	where Coordinator_Time = '$coor_Time' and Coordinator_Date = '$coor_Date'
	");
	
	if($coorTime > 0){
		echo"coorAlert();";
	}else{
	
	
	$sql = "UPDATE applicant_schedule 
			   SET Coordinator_Time = '".$coor_Time."',
				   Coordinator_Date = '".$coor_Date."',
				   Coordinator_Comments = '".$coor_Comments."'
			   WHERE ID_No='".$ID_No."'";
	
	$result=mysql_query($sql);
			//condition that check if inserting is successful
			if($result){
				echo"successfulAlert();";
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
    $("#coor").datepicker({
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
	echo "$idNo";
	
?>
<form action='' method='post'>
Hr Interview: <input type="text" value="<?php echo $coor_Date ?>" id="coor" placeholder="Start Date" name="coorInterview" class="selector" />
			  <input id="time1" value="<?php echo $coor_Time1?>" name="coorTime" required/></br>
			  <textarea rows="4" cols="50" name="comments" placeholder="Comments"></textarea></br>
<input type="hidden" name="id" value="<?PHP echo $idNo ?>"/>
<input type='submit' value='Submit' class='Log' name='schedule'>;
</body>
</html>