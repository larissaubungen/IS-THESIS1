<html>
<head>
<head>
 <link rel="stylesheet" href="http://cdn.kendostatic.com/2014.3.1411/styles/kendo.common.min.css">
  <link rel="stylesheet" href="http://cdn.kendostatic.com/2014.3.1411/styles/kendo.rtl.min.css">
  <link rel="stylesheet" href="http://cdn.kendostatic.com/2014.3.1411/styles/kendo.default.min.css">
  <link rel="stylesheet" href="http://cdn.kendostatic.com/2014.3.1411/styles/kendo.dataviz.min.css">
  <link rel="stylesheet" href="http://cdn.kendostatic.com/2014.3.1411/styles/kendo.dataviz.default.min.css">
  <link rel="stylesheet" href="http://cdn.kendostatic.com/2014.3.1411/styles/kendo.mobile.all.min.css">

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://cdn.kendostatic.com/2014.3.1411/js/angular.min.js"></script>
  <script src="http://cdn.kendostatic.com/2014.3.1411/js/jszip.min.js"></script>
  <script src="http://cdn.kendostatic.com/2014.3.1411/js/kendo.all.min.js"></script>
  
  
	
</head>
<body>
  <form action="InsertLeave.php" method="post">
			Select start day: <input type="text" value="" id="startDate" placeholder="Start Date" name="sickStart" class="selector"/>
			Select end day:   <input type="text" value="" id="endDate" placeholder="Start Date" name="sickEnd" class="selector" />
  <input type="submit" value="Submit">
  </form>
<?php
	$maxDate = $_POST['sickTotal'];
	
?>

<script>			
  var gap = <?php echo $maxDate; ?>;
  	$("#startDate").kendoDatePicker({
      	min: new Date(),
        format: "yyyy-MM-dd",
      	change:function(e){
			var start_date = new Date(this.value());
			var max_date = new Date(start_date.getTime() + gap*86400000);
			$('#endDate').data('kendoDatePicker').min(start_date);
			$('#endDate').data('kendoDatePicker').max(max_date);
			$('#endDate').data('kendoDatePicker').enable();
			$('#endDate').val('');
		}
    });
    $("#endDate").kendoDatePicker({
        format: "yyyy-MM-dd"
	});
  </script>
		
	
		
</body>
</html>