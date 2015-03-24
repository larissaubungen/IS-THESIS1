<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}

$user=$_SESSION['ID_No'];

  function getResignCode($length = 7) {
            $validCode = "1234567890qwerty";
            $validCharNumber = strlen($validCode);
         
            $result = "";
         
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCode[$index];
            }
            return $result;
        }
        $ResignID=getResignCode();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LBASS Employee Resignation Request Page</title>
	<meta  charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pages/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="styles/kendo.common.min.css">
    <link rel="stylesheet" href="styles/kendo.rtl.min.css">
    <link rel="stylesheet" href="styles/kendo.default.min.css">
    <link rel="stylesheet" href="styles/kendo.dataviz.min.css">
    <link rel="stylesheet" href="kendo.dataviz.default.min.css">
    <link rel="stylesheet" href="styles/kendo.mobile.all.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="js/jquery1.11.3/jquery-ui.css">

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/kendo.all.min.js"></script>

    <!--Boostrap
      <script src="js/jquery.min.js"></script>
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
  -->
    
    <script type="text/javascript">
       
    
      function reminder()
      {
        confirm("Reminder: \n Please ensure your submission with letter of resignation. \n Your request will be subject for HR's approval.");
      } 
      function setDate(){
        document.getElementById("Date_Approved").value="0000-00-00";
    }
    	
    </script>
    <style = "text/css">
    	textarea{
    		margin-left: 3em;
    	}
    	#date_select2_day{
    		width: 5em;
    	}
    	#date_select2_month{
    		width: 7em;
    	}
    	#date_select2_year{
    		width: 5em;
    	}
    </style>
</head>
<body>
			<!--Main Navbar-->
	<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">LBASS Human Resource Information System </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
      
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Let Rivera (Dummy Data)<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Logout</a></li>
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
            <li class="active"><a href="#"><i class="icon-home"></i><span>Resign</span> </a> </li>  
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->


    <div class="container">
    <h3>Filing of Resignation</h3>
    <hr/>

    <form action="SubmitResignation.php" method="post" id="resignation">
        <!--
			<label for="date_button">Date for Filing:</label><br>
			<input type="date" name="date_button" id="date_button" onclick="DP.open('date_button','date_button')" required>
		</div> 

		<table id="datepicker" class="dp_calendar" style="display:none;font-size:14px;" cellpadding="0" cellspacing="0"></table>   

      -->

      <div class="container">
        <div class="form-group">
              <!--For Resignation Code-->
          <input type="hidden" id="ResignID" name="ResignID" value="<?php echo "$ResignID";?>">
          <input type="hidden" id="D_Approve" name="D_Approve" value="0000-00-00">         

           <label for="datepicker"></label>   
              Date for filing:
              <input type ="text"id="datepicker" name="dateFiled" required/>
                  <script>
                    $(document).ready(function(){
                     var restrictedDate = new Date().setDate(+44);
                     var currentDate = new Date();


                     $("#datepicker").kendoDatePicker({
                       value: new Date(restrictedDate),
                       min: new Date(restrictedDate),
                       max: new Date(2049, 11, 31),
                       format: 'yyyy-MM-dd' 
                     })
                    });   
                  </script>
                </form>  
              <label>Reason:</label> <textarea form="resignation" name="Reason" rows="3" col="3" required></textarea><br/>
              <br/>
              <input type="submit" value="submit" form="resignation" onclick="return reminder();">
        </div>
      </div>
    
    </div>
</body>
</html>
