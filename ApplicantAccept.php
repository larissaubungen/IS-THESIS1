<?php
error_reporting(0);
if($_POST['Pass'] == "Submit")
{
?>
	<script type="text/javascript">
	function successful (){
		alert("The status of the applicant has been changed!");
		window.location = "HR_Page.php";
	}

<?php
	
	$department = $_POST['department'];
	$position = $_POST['position'];
	$level = $_POST['level'];
	$subject = '';
	
	if($position == 'Reading Teacher'){
		$subject = 'Reading';
	}else if($position == 'Language Teacher'){
		$subject = 'Language';
	}else if($position == 'Filipino Teacher'){
		$subject = 'Filipino';
	}else if($position == 'English Teacher'){
		$subject = 'English';
	}else if($position == 'Araling Panlipunan Teacher'){
		$subject = 'Araling Panlipunan';
	}else if($position == 'MAPEH Teacher'){
		$subject = 'MAPEH';
	}else if($position == 'Mother Tongue Teacher'){
		$subject = 'Mother Tongue';
	}else if($position == 'Edukasyon Sa Pagkatao Teacher'){
		$subject = 'Edukasyon sa Pagkatao';
	}else if($position == 'HELE Teacher'){
		$subject = 'HELE';
	}else if($position == 'Physical Education Teacher'){
		$subject = 'Physical Education';
	}else if($position == 'TLE Teacher'){
		$subject = 'TLE';
	}else if($position == 'Arts Teacher'){
		$subject = 'Arts';
	}else if($position == 'Music Teacher'){
		$subject = 'Music';
	}else if($position == 'Health Teacher'){
		$subject = 'Health';
	}else if($position == 'Mathematics Teacher'){
		$subject = 'Mathematics';
	}else if($position == 'Science Teacher'){
		$subject = 'Science';
	}else if($position == 'Science & Health Teacher'){
		$subject = 'Science & Health';
	}else if($position == 'Computer Teacher'){
		$subject = 'Computer';
	}else if($position == 'Natural Science Teacher'){
		$subject = 'Natural Science';
	}else if($position == 'General Math Teacher'){
		$subject = 'General Math';
	}else if($position == 'Computer Education Teacher'){
		$subject = 'Computer Education';
	}else if($position == 'Practical Math Teacher'){
		$subject = 'Practical Math';
	}else if($position == 'Environmental Science Teacher'){
		$subject = 'Environmental Science';
	}else if($position == 'Statistics Teacher'){
		$subject = 'Statistics';
	}else if($position == 'Biology Teacher'){
		$subject = 'Biology';
	}else if($position == 'Trigonometry Teacher'){
		$subject = 'Trigonometry';
	}else if($position == 'Physics Teacher'){
		$subject = 'Physics';
	}else if($position == 'TLE-Computer Teacher'){
		$subject = 'TLE-Computer';
	}else if($position == 'Chemistry Teacher'){
		$subject = 'Chemistry';
	}else {
		$subject = '';
	}
	
	function getRandomString($length = 10) { //function for Generating Random Username
            $validCharacters = "1234567890";
            $validCharNumber = strlen($validCharacters);
         
            $result = "";
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            } 
            return $result;
        }
        $workID=getRandomString();

	mysql_connect('localhost', 'root', '')
		or die(mysql_error());
	mysql_select_db('lbas_hr') 
		or die(mysql_error());
		
	$applicantID = $_POST['applicantID'];


	$insertStatus = "INSERT INTO work(Work_ID, E_Position1,Department,Level,Subject,ID_No)
					VALUES('".$workID."','".$position."','".$department."','".$level."','".$subject."','".$applicantID."')";					 

	$updateQuery1 = "UPDATE person
				  SET E_Status = 'Employee',
					  CurrentWork_ID = '".$workID."'
				  WHERE ID_No ='".$applicantID."'";
				  
	$insertStatusQuery = mysql_query($insertStatus);
	$updateQuery = mysql_query($updateQuery1);
	if($updateQuery && $insertStatusQuery){
		echo "successful();";
		
	} else{
		echo "failed";
	}





}


?>
</script>
<html>
  <head>
    <meta charset="utf-8">
   <title>LBASS HR Dashboard</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pages/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="jquery/jquery-ui.css">
    <link href="content/shared/styles/examples-offline.css" rel="stylesheet">
    	<!--DatePicker-->
    <link rel='stylesheet' type='text/css' media="screen" href='datePicker/datepicker.css' />
	<script type="text/javascript" src="datePicker/datepicker.js"></script>

    
           <!-- Placed at the end of the document so the pages load faster --> 
	<script src="js/jquery-1.7.2.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/kendo.all.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="js/excanvas.min.js"></script> 
	<script src="js/chart.min.js" type="text/javascript"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script> 

	<!-- include JavaScript file here-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/applicant_resume2.js"></script>
  

  <style type="text/css">
    .panel-heading {
    width: 20em;
    height: 2em;
    text-align: center;	
    background-color: lightgray;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    text-align: center;
    }
    .panel-body{
	border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    }
    #resume-label{
    	text-indent: .5em;
    }
    td {
    padding: 7px;
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
	#prm{
		text-indent: .5em;
		padding-left: 1em;
		font-size: 15px;
	}
	input[type='text']{
		height:2.6em;
	}
	input[type='select']{
		height:2.6em;
	}
	input[type='email']{
		height:2.6em;
	}
	/*td spacing for 3 dropdowns*/
	#space{ 
		margin-top: 1em;
		margin-right: 0em; margin-left: 0em; margin-bottom: 0em;
	}
  </style>
  <script type="text/javascript"> // JavaScript for Awards, Experience, Skills and Organizations
		
   </script>

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
        <li class="active"><a href="index.html"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="index.html"><i class="icon-user"></i><span>Employees</span> </a> </li>
        
        <li><a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-table"></i><span>Attendance</span> </a></li>
        <?php
		$leaves=mysql_query("SELECT * 
							 FROM leave_table 
							 WHERE L_Status ='Pending'");
		
		if(mysql_num_rows($leaves) > 0){
		?>
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests*</span></a>
           <ul class="dropdown-menu">
              <li><a href="HR_Resignation.php">Resignations</a></li>
              <li><a href="HR_Transfer.php">Transfers</a></li>
			  <li><a href="LeaveRequest.php">Leaves*</a></li>
           </ul> 
        </li>
		<?php
		}else{
		?>
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
           <ul class="dropdown-menu">
              <li><a href="HR_Resignation.php">Resignations</a></li>
              <li><a href="HR_Transfer.php">Transfers</a></li>
			  <li><a href="HR_Transfer.php">Leaves</a></li>
           </ul> 
        </li>
		<?php
		}
		?>
		
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="Signup.php">Add Applicant</a></li>
          </ul>
        </li>
       </div>
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>

<?php
/*

*/
	$applicantID = $_POST['applicantID'];
	
	mysql_connect('localhost', 'root', '')
		or die(mysql_error());
	mysql_select_db('lbas_hr') 
		or die(mysql_error());
		
	$result3 = mysql_query(" SELECT App_Department, App_Position, App_Level
							 FROM Resume
							 WHERE ID_No = '$applicantID'	
					");
					
	while($row = mysql_fetch_array($result3)){
		echo"<center>";
		$department = $row['App_Department'];
		$position = $row['App_Position'];
		$level = $row['App_Level'];
		echo"The applicant is applying for: </br>";
		echo"Department: $department </br>";
		echo"Position: $position</br>";
		echo"Level: $level</br>";
		echo"</center>";
	
	
	}
?>
	<form action='ApplicantAccept.php' method='POST'>
	<br>	
		<div id="prm">
		  <div class="table-responsive">	
		    <table class="table" id="spaceTabs"> 
		    	<tr>
		    		<td id="resume-label">Application for</td>
		    		<td id="space">
		    			<label>For Department:</label>
			  			<select id="department" name="department" required>
			  				<option>--Select--</option>
			  				<option>Accounting</option>
			  				<option>Guidance Counselling</option>
			  				<option>HR</option>
			  				<option>IT</option>
			  				<option>Library</option>
			  				<option>Preschool</option>
							<option>Principal & Directors Office</option>
							<option>Registrar </option>
							<option>Humanities</option>
							<option>SMIT</option>
							<option>Others</option>
			  			</select>			
		    		</td>
		    		<td id="space">
		    			<label>For Position:</label> 
	  					<select id="position" name="position" required></select>
		    		</td>
		    		<td id="space">
		    			<label>Level:</label>
				  		<select id="level" name="level"></select>
				  		<a data-toggle="modal" data-target="#modal-1" onclick="modal();" style="padding-left:2em; color:black"> See List of Jobs</a>
		    		</td>
		    	</tr>
	  		</table>
	  	</div>
  		</div>
	<input type ="hidden" name="applicantID" value="<?php echo"$applicantID"; ?>">
	<input type="submit" value="Submit" Name="Pass"> 
	</form>
		
<!--modal part for list-->

	  		<header></header>

	  		<div class="modal" id="modal-1" style="display:none;">
          <div class="modal-dialog">            
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Department and Job List</h3>
            </div> <!--modal header-->

            <div class="modal-body"> 
            	<!--Description List per departments-->
             
             	<dl>
				  <dt>Accounting</dt>
				  	<dd>Accounting Supervisor</dd>
				  	<dd>Accountant</dd>
				  	<dd>Bookkeeper</dd>
				  	<dd>Cashier</dd>
				  	<dd>Accounting Clerk</dd>
				  	<dd>Petty Cash Fund Custodian</dd> <hr>

				  <dt>Guidance Counselling</dt>
				  	<dd>Student Formation Center Head</dd>
				  	<dd>Guidance Counselor(Primary, Elementary, High School)</dd> <hr>

			  	  <dt>Human Resource (HR)</dt>
			  	  	<dd>HR Officer</dd>
			  	  	<dd>Assistant HR Officer</dd>
			  	  	<dd>Office Staff</dd>
			  	  	<dd>HR and Liason Staff</dd>
			  	  	<dd>Purchasing Staff</dd> <hr>

			  	  <dt>Information Technology (IT)</dt>
			  	  	<dd>System Administrator</dd>
			  	  	<dd>Network Administrator</dd>
			  	  	<dd>Computer Technician</dd> <hr>

			  	  <dt>Library</dt>
			  	  	<dd>Head Librarian</dd>
			  	  	<dd>School Librarian</dd>
			  	  	<dd>Assistant Librarian</dd>
			  	  	<dd>Office Staff</dd>
			  	  	<dd>Library Staff</dd> <hr>

			  	  <dt>Preschool</dt>
			  	  	<dd>Academic Coordinator</dd>
			  	  	<dd>Preschool Teacher</dd> <hr>

			  	  <dt>Principal and Director's Office</dt>
			  	  	<dd>Principal</dd>
			  	  	<dd>Executive Secretary</dd>
			  	  	<dd>Office Staff</dd> <hr>

			  	  <dt>Academic Humanities</dt>
			  	  	<dd>Reading Teacher</dd>
			  	  	<dd>Language Teacher</dd>
			  	  	<dd>Filipino Teacher</dd>
			  	  	<dd>English Teacher</dd>
			  	  	<dd>Araling Panlipunan Teacher</dd>
			  	  	<dd>MAPEH Teacher</dd>
			  	  	<dd>Mother Tongue Teacher</dd>
			  	  	<dd>Edukasyon sa Pagpapakatao Teacher</dd>
			  	  	<dd>HELE Teacher</dd>
			  	  	<dd>Physical Education Teacher</dd>
			  	  	<dd>TLE Teacher</dd>
			  	  	<dd>Music Teacher</dd>
			  	  	<dd>Arts Teacher</dd>
			  	  	<dd>Health Teacher</dd>
			  	  	<dd>Academic Coordinator for Component Subjects</dd>
			  	  	<dd>Academic Coordinator for Social Studies</dd>
			  	  	<dd>Academic Coordinator for English</dd>
			  	  	<dd>Academic Coordinator for Filipino</dd> <hr>


			  	  <dt>Academic Science, Math, Information Technology(SMIT)</dt>
			  	  	<dd>Mathematics Teacher</dd>
			  	  	<dd>Science Teacher</dd>
			  	  	<dd>Science & Health Teacher</dd>
			  	  	<dd>Computer Teacher</dd>
			  	  	<dd>Natural Science Teacher</dd>
			  	  	<dd>General Math Teacher</dd>
			  	  	<dd>Computer Education Teacher</dd>
			  	  	<dd>Practical Math Teacher</dd>
			  	  	<dd>Environmental Science Teacher</dd>
			  	  	<dd>Statistics Teacher</dd>
			  	  	<dd>Biology Teacher</dd>
			  	  	<dd>Trigonometry Teacher</dd>
			  	  	<dd>Physics Teacher</dd>
			  	  	<dd>TLE-Computer Teacher</dd>
			  	  	<dd> Chemistry Teacher</dd>
			  	  	<dd>Academic Coordinator for Science</dd>
			  	  	<dd>Academic Coordinator for Math & IT</dd> <hr>

			  	  <dt>Others</dt>
			  	  	<dd>Coordinator for Extension Service and Special Program</dd>
			  	  	<dd>Coordinator for Institutional Values Formation</dd>
			  	  	<dd>Prefect of Discipline</dd>
			  	  	<dd>Science and Laboratory Aide</dd>
			  	  	<dd>School Nurse</dd> </br>
				</dl>

            </div>
            </div> <!--modal body-->

            <div class="modal-footer">
                 <a href="" class="btn btn-default">Close</a>
		            </div> <!--modal footer-->
		          </div> <!--modal content-->
		      </div> <!--modal dialogue-->
		      </div> <!--modal-->
		      </div> <!--Container-->

		<footer></footer>
		
</body>
</html>
