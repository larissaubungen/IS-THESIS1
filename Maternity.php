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
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
  
	
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">LBASS Human Resource Information System </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
      
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
              mysql_connect('localhost', 'root', '')
              or die(mysql_error());  
              mysql_select_db('lbas_hr') 
              or die(mysql_error());

              $user=$_SESSION['ID_No'];

              $retrieveName = "SELECT `L_Name`, `F_Name`  
                               FROM `person` 
                               WHERE `ID_No` = '".$user."'";
              $check = mysql_query($retrieveName);
              while ($row = mysql_fetch_array($check)) {
                $lastName = $row["L_Name"];
                $firstName = $row["F_Name"];
                echo "<i class='icon-user'> $lastName , $firstName </i>";
                echo "<b class='caret'></b></a><ul class='dropdown-menu'/>";
              }?>

              <li><a href="javascript:;">Profile</a></li>
              <li><a href="http://localhost/IS-THESIS1/logout.php">Logout</a></li>

            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">

        <li class="active"><a href="EmployeeProfileHome.php"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
        <li><a href="EmployeeProfilePage.php"><i class="icon-dashboard"></i><span>Profile</span> </a> </li>
        <li><a href=""><i class="icon-signal"></i><span>Reports and Records</span> </a> </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
         <ul class="dropdown-menu">
            <li><a href="">File for Leave</a></li>
            <li><a href="">File for Transfer</a></li>
            <li><a href="">File for Resignation</a></li>
         </ul> 
      </li>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
            <!-- /widget-header -->
            <div class="widget-content">

  <form action='' method='post'>
			Select start day: <input type="text" value="" id="startDate" placeholder="Start Date" name="paternityStart" class="selector" />
			Select end day: <input type="text" value="" id="endDate" placeholder="Start Date" name="paternityStart" class="selector"  />
			Reason: <textarea rows="4" cols="50" value="" name="reason" placeholder ="reason"></textarea>
			<input type="submit" value="Submit">
			</form>
			</form>
<?php
	$maxDate = $_POST['maternityTotal']-1;
	
?>

<script>			
  var gap = <?php echo $maxDate; ?>;
  	$("#startDate").kendoDatePicker({
      	min: new Date(),
        format: "dd/MM/yyyy",
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
        format: "dd/MM/yyyy"
	});
  </script>
		
	
		
</body>
</html>