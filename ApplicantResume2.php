<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}
	
	$user=$_SESSION['ID_No'];

	mysql_connect('localhost', 'root', '')
        or die(mysql_error());	
    mysql_select_db('lbas_hr') 
        or die(mysql_error());

 $checkResume = "SELECT `ID_No`, `Resume` FROM `person` WHERE `ID_No` = '".$user."' AND `Resume` = 'YES'";

 $check = mysql_query($checkResume);

error_reporting(0);
if($_POST['resume'] == "Submit")
{
	$errorMessage = "";
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$gender = $_POST['sex'];
	$civil = $_POST['status'];

	$spouseFName = $_POST['spouseFName'];
	$spouseMName = $_POST['spouseMName'];
	$spouseLName = $_POST['spouseLName'];
	$FNChild1 = $_POST['FNChild1'];
	$FNChild2 = $_POST['FNChild2'];
	$FNChild3 = $_POST['FNChild3']; 
	$FNChild4 = $_POST['FNChild4'];
	$FNChild5 = $_POST['FNChild5'];
	$FNChild6 = $_POST['FNChild6'];
	$FNChild7 = $_POST['FNChild7'];
	$FNChild8 = $_POST['FNChild8'];
	$FNChild9 = $_POST['FNChild9'];
	$FNChild10 = $_POST['FNChild10'];
	$LNChild1 = $_POST['LNChild1'];
	$LNChild2 = $_POST['LNChild2'];
	$LNChild3 = $_POST['LNChild3'];
	$LNChild4 = $_POST['LNChild4'];
	$LNChild5 = $_POST['LNChild5'];
	$LNChild6 = $_POST['LNChild6'];
	$LNChild7 = $_POST['LNChild7'];
	$LNChild8 = $_POST['LNChild8'];
	$LNChild9 = $_POST['LNChild9'];
	$LNChild10 = $_POST['LNChild10'];

	//getting value from the Calendar
	$birth = array($_POST['date_select2_month'],$_POST['date_select2_day'], $_POST['date_select2_year']);
	$bDay = implode("$birth");
	//	$bDay = $_POST['date_select2'];

	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$province = $_POST['province'];
	$mobNumber = $_POST['mobNumber'];
	$telNumber =$_POST['telNumber'];
	$highSchool = $_POST['highSchool'];
	$HS_Grad = $_POST ['HSyearGraduated'];	
	$college = $_POST['college'];
	$College_Grad = $_POST['College_Grad'];
	$degree = $_POST['degree'];	
	$masteral = $_POST['masteral'];
	$degree2 = $_POST['degree2'];
	$award1=$_POST['Award1'];
	$award2=$_POST['Award2'];
	$award3=$_POST['Award3'];
	$award4=$_POST['Award4'];
	$award5=$_POST['Award5'];
	$skill1=$_POST['Skill1'];
	$skill2=$_POST['Skill2'];
	$skill3=$_POST['Skill3'];
	$skill4=$_POST['Skill4'];
	$skill5=$_POST['Skill5'];
	$org1=$_POST['Org1'];
	$org2=$_POST['Org2'];
	$org3=$_POST['Org3'];
	$org4=$_POST['Org4'];
	$org5=$_POST['Org5'];
	$exp1=$_POST['Exp1'];
	$exp2=$_POST['Exp2'];
	$exp3=$_POST['Exp3'];
	$exp4=$_POST['Exp4'];
	$exp5=$_POST['Exp5'];
	$resume = "Yes";
	
	if(empty($_POST['lastName'])){ $errorMessage .= "<li>Please enter your last name</li>"; }
	if(empty($_POST['firstName'])){ $errorMessage .= "<li>Please enter your first name</li>";	}
	if(empty($_POST['middleName'])){ $errorMessage .= "<li>Please enter your middle name</li>"; }
	if (empty($_POST['sex'])) { $errorMessage .= "<li>Please select your gender</li>"; }
	if (empty($_POST['status'])) {$errorMessage .= "<li>Please select your civil status</li>"; }
	if(empty($_POST['street']))	{ $errorMessage .= "<li>Please enter your street</li>";	}
	if(empty($_POST['city'])){ 	$errorMessage .= "<li>Please enter your city</li>";	}
	if (empty($_POST['province'])) 	{ $errorMessage .= "<li>Please enter your province</li>"; }
	if(empty($_POST['zip'])) { 	$errorMessage .= "<li>Please enter your zip code</li>"; }
	if(empty($_POST['email'])) { 	$errorMessage .= "<li>Please enter your email address</li>"; }
	if(empty($_POST['mobNumber']))	{ $errorMessage .= "<li>Please eneter your mobile number, if you non please write not available</li>";	}
	if(empty($_POST['telNumber'])) 	{ 	$errorMessage .= "<li>Please enter your telephone number, if you have non please write not available</li>";	}
	if(empty($_POST['highSchool']))	{ 	$errorMessage .= "<li>Please enter your school in high school</li>";	}
	if(empty($_POST['college']))	{	$errorMessage .= "<li>Please enter your school in college</li>";	}
	if(empty($_POST['degree'])) { 	$errorMessage .= "<li>Please enter your college degree</li>";	}
	if(empty($_POST['HSyearGraduated'])) {	$errorMessage .= "<li>Please enter the year you graduated</li>";	}
	if(empty($errorMessage)) 	{ 	header('Location:ApplicantSubmitRes.php');	}	
}		
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>LBASS Applicant Resume</title>
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
	<?php
		error_reporting(0);
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<!--main navbar-->
 <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
    	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    		<span class="icon-bar"></span>
    		<span class="icon-bar">
    		</span><span class="icon-bar"></span> </a>
		<a class="brand" href="ApplicantPage.php">LBASS Human Resource Information System </a>
		<div class="nav-collapse">
        <ul class="nav pull-right">      
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
        </div>  
        <!-- /container --> 
      </div>      <!-- /navbar-inner --> 
    </div>   <!-- /navbar -->
</div> <!--Main Navbar-->

    <div class="subnavbar">
      <div class="subnavbar-inner">
        <div class="container">
          <ul class="mainnav">          
            <li class="active"><a href="#"><i class="icon-file"></i><span>Resume</span> </a> </li>
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->

<div class="container">	 <!--Panel Heading only-->
 	  <div class="row">
 	  	<div class="col-lg-6">
 	  		<div class="panel-heading"><h4 class="panel-title">Applicant Resume</h4></div>
	  <div class="panel-body">	   <!--/Panel Heading only-->


	  	<form action="ApplicantSubmitRes.php" method="post" id="SubmitRes">
	  	
	  	<br>	
		<div id="prm">
		  <div class="table-responsive">	
		    <table class="table" id="spaceTabs"> 
		    	<tr>
		    		<td id="resume-label">Application for</td>
		    		<td id="space">
		    			<label>For Department:</label>
			  			<select id="department" name="department" form="SubmitRes" required>
			  				<option>--Select--</option>
			  				<option>Accounting</option>
			  				<option>Guidance Counselling</option>
			  				<option>HR</option>
			  				<option>IT</option>
			  				<option>Library</option>
			  				<option>Preschool</option>
							<option>Principal & Director's Office</option>
							<option> Registrar </option>
							<option>Humanities</option>
							<option>SMIT</option>
							<option>Others</option>
			  			</select>			
		    		</td>
		    		<td id="space">
		    			<label>For Position:</label> 
	  					<select id="position" name="position" form="SubmitRes" required></select>
		    		</td>
		    		<td id="space">
		    			<label>Level:</label>
				  		<select id="level" name="level" form="SubmitRes"></select>
				  		<a data-toggle="modal" data-target="#modal-1" onclick="modal();" style="padding-left:2em; color:black"> See List of Jobs</a>
		    		</td>
		    	</tr>
	  		</table>
	  	</div>
  		</div>

		 <div class="table-responsive">	<!--Resume Form into table-->
		 <table class="table"> 
			<thead>
				<tr>
					<th>Personal Information</th>
					<th></th>				
				</tr>
			</thead>
				<tbody>

				<tr><!--1st row-->
					<td id="resume-label"> Complete Name: </td>
					<td>
						<input type="text" name="firstName" placeholder="First Name" value="<?=$firstName;?>">
					</td>
					<!--<td id="resume-label"> Middle Name:</td> -->
					<td>
						<input type="text" name="middleName" placeholder="Middle Name" value="<?=$middleName;?>">
					</td>
					 <!--<td id="resume-label"> Last Name:</td> -->
					<td>						
						<input type="text" name="lastName" placeholder="Last Name" value="<?=$lastName;?>">
					</td>
				</tr>	

				<tr>
					<td id="resume-label">Home Address:</td>
				 <!--<td id="resume-label"> Street:</td>-->
					<td>
						<input type="text" name="street" placeholder="Street" value="<?=$street;?>"> <br>
					</td>
				<!--<td id="resume-label"> City:</td> -->
					<td>	
						<input type="select" name="city" placeholder="City" value="<?=$city;?>"> <br>
					</td>
				<!--<td id="resume-label"> Province:</td> -->
					<td>	
						<input type="text" name="province" placeholder="Province" value="<?=$province;?>"> <br>
					</td>			
				</tr>
				<tr>
					<td id="resume-label">Birth Date:</td>
					<td>
						<div>
				    		<label for="date_select2_day"> </label>
							<select name="date_select2_day" id="date_select2_day" size="1" class="text day" onblur="DP.update('date_select2')" form="SubmitRes">
								<option value="">Day</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>

							<select name="date_select2_month" id="date_select2_month" size="1" class="text month" onblur="DP.update('date_select2')" form="SubmitRes">
								<option value="">Month</option>
								<option value="01">01 - january</option>
								<option value="02">02 - february</option>
								<option value="03">03 - march</option>
								<option value="04">04 - april</option>
								<option value="05">05 - may</option>
								<option value="06">06 - june</option>
								<option value="07">07 - july</option>
								<option value="08">08 - august</option>
								<option value="09">09 - september</option>
								<option value="10">10 - october</option>
								<option value="11">11 - november</option>
								<option value="12">12 - december</option>
							</select>

							<select name="date_select2_year" id="date_select2_year" size="1" class="text year" onblur="DP.update('date_select2')" form="SubmitRes">
								<option value="">Year</option>
								<option value="2021">2021</option> 	<option value="2020">2020</option>
								<option value="2019">2019</option>	<option value="2018">2018</option>
								<option value="2017">2017</option>	<option value="2016">2016</option>
								<option value="2015">2015</option>	<option value="2014">2014</option>
								<option value="2013">2013</option>	<option value="2012">2012</option>
								<option value="2011">2011</option>	<option value="2010">2010</option>
								<option value="2009">2009</option>	<option value="2008">2008</option>
								<option value="2007">2007</option>	<option value="2006">2006</option>
								<option value="2005">2005</option>	<option value="2004">2004</option>
								<option value="2003">2003</option>	<option value="2002">2002</option>
								<option value="2001">2001</option>	<option value="2000">2000</option>
								<option value="1999">1999</option>	<option value="1998">1998</option>
								<option value="1997">1997</option>	<option value="1996">1996</option>
								<option value="1995">1995</option>	<option value="1994">1994</option>
								<option value="1993">1993</option>	<option value="1992">1992</option>
								<option value="1991">1991</option>	<option value="1990">1990</option>
								<option value="1989">1989</option>	<option value="1988">1988</option>
								<option value="1987">1987</option>	<option value="1986">1986</option>
								<option value="1985">1985</option>	<option value="1984">1984</option>
								<option value="1983">1983</option>	<option value="1982">1982</option>
								<option value="1981">1981</option>	<option value="1980">1980</option>
								<option value="1979">1979</option>	<option value="1978">1978</option>
								<option value="1977">1977</option>	<option value="1976">1976</option>	
								<option value="1975">1975</option>  <option value="1974">1974</option>
								<option value="1973">1973</option> 	<option value="1972">1972</option>
								<option value="1971">1971</option>	<option value="1970">1970</option>
								<option value="1970">1969</option>	<option value="1970">1968</option>
								<option value="1970">1967</option>	<option value="1970">1968</option>
								<option value="1970">1967</option>	<option value="1970">1966</option>
								<option value="1970">1965</option>	<option value="1970">1964</option>
								<option value="1970">1963</option>	<option value="1970">1962</option>
								<option value="1970">1961</option>	<option value="1970">1960</option>
								<option value="1970">1959</option>	<option value="1970">1958</option>
								<option value="1970">1957</option>	<option value="1970">1956</option>
								<option value="1970">1955</option>	<option value="1970">1954</option>
								<option value="1970">1953</option>	<option value="1970">1952</option>
								<option value="1970">1951</option>	<option value="1970">1950</option>
							</select>
							<input type="date" class="hidden" name="date_select2" id="date_select2">
							<a href="javascript:DP.open('date_select2', document.getElementById('date_select2_day'))"><img src="datePicker/datepicker_cal.gif" /></a>
						</div>
						<table id="datepicker" class="dp_calendar" style="display:none;font-size:14px;" cellpadding="0" cellspacing="0"></table>
					</td>

					<td id="resume-label"> Gender:</td>
					<td>
						<input type="radio" name="sex" value="female" checked> Female &nbsp
						<input type="radio" name="sex" value="male" > Male
					</td>
				</tr>

				<tr>
					<td id="resume-label">Civil Status: <br>
					</td> 
					<td>

						<input type="radio" name="status" value="Single" checked> Single  &nbsp
						&nbsp<input type="radio" name="status" value="Married"> Married &nbsp
						&nbsp<input type="radio" name="status" value="Divorced"> Divorced &nbsp
						&nbsp<input type="radio" name="status" value="Widowed"> Widowed 	
					</td>
					<td></td>
					<td></td>
				</tr>
					
				<tr style="text-indent:2em;" id="td_spouse">
					<td>
						<label id="lbl_spouse" style="display:none;"> Spouse:</label>
					</td>
					<td>
						<input type="text" name="LNspouseName" id="LNspouseName" value="<?=$LNspouseName;?>" placeholder="Last Name" style="display:none; margin-left:2.5em;">	
					</td>
					<td>
						<input type="text" name="FNspouseName" id="FNspouseName" value="<?=$FNspouseName;?>" placeholder="First Name" style="display:none;"> <br/>
					</td>
					<td>
						<input type="text" name="MNspouseName" id="MNspouseName" value="<?=$MNspouseName;?>" placeholder="Middle Name" style="display:none; margin-left:2.5em;"> <br/>
					</td>

				</tr>
				<tr style="text-indent:2em;">
					<td>
						<label id="lbl_children"> Children: </label>
							<div style="padding-left:1em;">
							  <input class="bt" type='button' value='+' id="addChild">
							  <input class="bt" type='button' value='-' id="removeChild">
						    </div>
					</td>
					<td>
						<div id="Children"></div>
					</td>
					<td>
						<div id="Children2"></div>
					</td>	
					<td></td>			
				</tr>
					
				</tr>
				
				<tr>
					<td id="resume-label"> Contact Number/s: </td>
					<td>
						<input type="text" name="telNumber" placeholder="Telephone Number" value="<?=$telNumber;?>"><br>
					</td>
					<td>
						<input type="text" name="mobNumber" placeholder="Mobile Number" value="<?=$mobNumber;?>"><br>
					</td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td id="resume-label"> E-mail:</td>	
					<td>
						<input type="email" name="email" Placeholder="Email" value="<?=$email;?>"><br>
					</td>
					<!--<td id="resume-label"> Zip Code:</td> -->
					<td>
						<input type="text" name="zip" placeholder="Zipcode" value="<?=$zip;?>">
					</td>								
					<td></td>
					<td></td>
				</tr>

				<tr></tr>
				<tr>
					<td id="resume-label"><br><b>Education</b></td>
					<td id="resume-label"></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td id="resume-label"> High School:</td>
					<td>
						<input type="text" name="highSchool" placeholder="School Name" value="<?=$highSchool;?>"><br>
					</td>
					<!--<td id="resume-label"> Year Graduated:</td> -->
					<td>
						<!--
						<input type="hidden" class="hidden" name="HSyearGraduated" id="date_select2">

						<input type="text" name="HSyearGraduated" placeholder="Year Graduated" value="<?=$HS_Grad;?>"> <br> -->

						<select name="HSyearGraduated" form="SubmitRes" value="<?=$HS_Grad;?>">
								<option value="">Year Graduated</option>
								<option value="2014">2014</option>	<option value="2013">2013</option>
								<option value="2012">2012</option>	<option value="2011">2011</option>
								<option value="2010">2010</option>	<option value="2009">2009</option>
								<option value="2008">2008</option>	<option value="2007">2007</option>
								<option value="2006">2006</option>	<option value="2005">2005</option>
								<option value="2004">2004</option>	<option value="2003">2003</option>
								<option value="2002">2002</option>	<option value="2001">2001</option>
								<option value="2000">2000</option>	<option value="1999">1999</option>
								<option value="1998">1998</option>	<option value="1997">1997</option>
								<option value="1996">1996</option>	<option value="1995">1995</option>
								<option value="1994">1994</option>	<option value="1993">1993</option>
								<option value="1992">1992</option>	<option value="1991">1991</option>
								<option value="1990">1990</option>	<option value="1989">1989</option>
								<option value="1988">1988</option>	<option value="1987">1987</option>
								<option value="1986">1986</option>	<option value="1985">1985</option>
								<option value="1984">1984</option>	<option value="1983">1983</option>
								<option value="1982">1982</option>	<option value="1981">1981</option>
								<option value="1980">1980</option>	<option value="1979">1979</option>
								<option value="1978">1978</option>	<option value="1977">1977</option>
								<option value="1976">1976</option>	<option value="1975">1975</option>
								<option value="1974">1974</option>	<option value="1973">1973</option>
								<option value="1972">1972</option>	<option value="1971">1971</option>
								<option value="1970">1970</option>	<option value="1970">1969</option>
								<option value="1970">1968</option>  <option value="1970">1967</option>
								<option value="1970">1968</option>	<option value="1970">1967</option>
								<option value="1970">1966</option>	<option value="1970">1965</option>
								<option value="1970">1964</option>	<option value="1970">1963</option>
								<option value="1970">1962</option>	<option value="1970">1961</option>
								<option value="1970">1960</option>	<option value="1970">1959</option>
								<option value="1970">1958</option>	<option value="1970">1957</option>
								<option value="1970">1956</option>	<option value="1970">1955</option>
								<option value="1970">1954</option>	<option value="1970">1953</option>
								<option value="1970">1952</option>	<option value="1970">1951</option>
								<option value="1970">1950</option>
						</select>
					</td>
					<td></td>
				</tr>

				<tr>
					<td id="resume-label"> College/University:</td>
					<td>
						<input type="text" name="college" placeholder="School Name" value="<?=$college;?>"> <br>
					</td>
					<td>

						<!--<input type="text" name="College_Grad" placeholder="Year Graduated" value="<?=$College_Grad;?>"> -->

						<select name="College_Grad" form="SubmitRes" value="<?=$College_Grad;?>">
								<option value="">Year Graduated</option>
								<option value="2014">2015</option>
								<option value="2014">2014</option>	<option value="2013">2013</option>
								<option value="2012">2012</option>	<option value="2011">2011</option>
								<option value="2010">2010</option>	<option value="2009">2009</option>
								<option value="2008">2008</option>	<option value="2007">2007</option>
								<option value="2006">2006</option>	<option value="2005">2005</option>
								<option value="2004">2004</option>	<option value="2003">2003</option>
								<option value="2002">2002</option>	<option value="2001">2001</option>
								<option value="2000">2000</option>	<option value="1999">1999</option>
								<option value="1998">1998</option>	<option value="1997">1997</option>
								<option value="1996">1996</option>	<option value="1995">1995</option>
								<option value="1994">1994</option>	<option value="1993">1993</option>
								<option value="1992">1992</option>	<option value="1991">1991</option>
								<option value="1990">1990</option>	<option value="1989">1989</option>
								<option value="1988">1988</option>	<option value="1987">1987</option>
								<option value="1986">1986</option>	<option value="1985">1985</option>
								<option value="1984">1984</option>	<option value="1983">1983</option>
								<option value="1982">1982</option>	<option value="1981">1981</option>
								<option value="1980">1980</option>	<option value="1979">1979</option>
								<option value="1978">1978</option>	<option value="1977">1977</option>
								<option value="1976">1976</option>	<option value="1975">1975</option>
								<option value="1974">1974</option>	<option value="1973">1973</option>
								<option value="1972">1972</option>	<option value="1971">1971</option>
								<option value="1970">1970</option>	<option value="1970">1969</option>
								<option value="1970">1968</option>  <option value="1970">1967</option>
								<option value="1970">1968</option>	<option value="1970">1967</option>
								<option value="1970">1966</option>	<option value="1970">1965</option>
								<option value="1970">1964</option>	<option value="1970">1963</option>
								<option value="1970">1962</option>	<option value="1970">1961</option>
								<option value="1970">1960</option>	<option value="1970">1959</option>
								<option value="1970">1958</option>	<option value="1970">1957</option>
								<option value="1970">1956</option>	<option value="1970">1955</option>
								<option value="1970">1954</option>	<option value="1970">1953</option>
								<option value="1970">1952</option>	<option value="1970">1951</option>
								<option value="1970">1950</option>
						</select>

					</td>
					
				</tr>
				<tr>
					<td id="resume-label"> College Degree:</td>
					<td>
						<input type="text" name="degree" placeholder=" College Degree Program" value="<?=$degree;?>"><br>
					</td>
					<td></td>				
				</tr>
		
				<tr>
					<td id="resume-label"> College/University for Masteral:</td>
					<td>
						<input type="text" name="masteral" placeholder="School Name" value="<?=$masteral;?>">	
					</td>
					<td><input type="text" name="degree2" placeholder="Masteral Degree Program" value="<?=$degree2;?>"></td>
					<td></td>
				</tr>			
				

				<tr>
					<td id="resume-label"><br><b>Awards</b></td>
					<td></td>
					<td id="resume-label"><br><b>Professional Organization(s) Affiliated</b></td>
				</tr>

				<tr>
					
					<td>
						<div id='Awards'>
								<input class="bt" type='button' value='+' id='addAward'>
								<input class="bt" type='button' value='-' id='removeAward'>
						</div>
					</td>
					<td></td>
					<td>
						<div id='Organizations'>
								<input class="bt" type='button' value='+' id='addOrg'>
								<input class="bt" type='button' value='-' id='removeOrg'>
						</div>
					</td>
					
					<!--<td id="resume-label">Awards:</td>
					<td>
						<input type="text" name="awards" value="<?=$awards;?>"><br>
					</td>-->
					
				</tr>

				<tr>
					<td id="resume-label"><br><b>Experience</b></td>
					<td></td>
					<td id="resume-label"><br><b>Specialties and Technical Skills</b></td>
				</tr>
				<tr>
					<!--
					<td id="resume-label">Former Employer (Position, Company):</td>
					<td>						
						<input type="text" name="experience" value="<?=$experience;?>"><br>						
					</td> -->
					<td>
						<div id='Experience'>
								<input class="bt" type='button' value='+' id='addExp'>
								<input class="bt" type='button' value='-' id='removeExp'>
						</div>	
					</td>
					<td></td>

					<td>
						<div id='Skill'>
								<input class="bt" type='button' value='+' id='addSkill'>
								<input class="bt" type='button' value='-' id='removeSkill'>
						</div>	
					</td>
					 <!--
					<td id="resume-label">Extra Curricular Actvities</td> <br>
					<td>
						<input type="text" name="extraActivities" value="<?=$extraActivities;?>"><br>
					</td> -->
				</tr>
				<tr>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>

					<td><input type='submit' name='resume' value='Submit' /></td>
					</form>
					
				</tr>
			</tbody>
			</table>
		  	</script>
			
	  </div>
	</div>
</div>
</div>
</div>

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

