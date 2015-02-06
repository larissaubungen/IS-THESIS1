<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}

$user=$_SESSION['ID_No'];



error_reporting(0);
if($_POST['resume'] == "Submit")
{
	$errorMessage = "";
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$mobNumber = $_POST['mobNumber'];
	$telNumber =$_POST['telNumber'];
	$highSchool = $_POST['highSchool'];
	$college = $_POST['college'];
	$degree = $_POST['degree'];
	$yearGraduated = $_POST ['yearGraduated'];
	$awards = $_POST ['awards'];
	$seminarsAttendded = $_POST['seminarsAttendded'];
	$seminarsFacilitated = $_POST ['seminarsFacilitated'];
	$extraActivities = $_POST ['extraActivities'];
	$skills = $_POST ['skills'];
	$experience = $_POST ['experience'];
	$resume = $_POST["Yes"];
	
	if(empty($_POST['lastName']))
	{
		$errorMessage .= "<li>Please enter your last name</li>";
	}
	if(empty($_POST['firstName']))
	{
		$errorMessage .= "<li>Please enter your first name</li>";
	}
	if(empty($_POST['middleName']))
	{
		$errorMessage .= "<li>Please enter your middle name</li>";
	}
	if(empty($_POST['street']))
	{
		$errorMessage .= "<li>Please enter your street</li>";
	}
	if(empty($_POST['city']))
	{
		$errorMessage .= "<li>Please enter your city</li>";
	}
	if(empty($_POST['zip']))
	{
		$errorMessage .= "<li>Please enter your zip code</li>";
	}
	if(empty($_POST['email']))
	{
		$errorMessage .= "<li>Please enter your email address</li>";
	}
	if(empty($_POST['mobNumber']))
	{
		$errorMessage .= "<li>Please eneter your mobile number, if you non please write not available</li>";
	}
	if(empty($_POST['telNumber']))
	{
		$errorMessage .= "<li>Please enter your telephone number, if you have non please write not available</li>";
	}
	if(empty($_POST['highSchool']))
	{
		$errorMessage .= "<li>Please enter your school in high school</li>";
	}
	if(empty($_POST['college']))
	{
		$errorMessage .= "<li>Please enter your school in college</li>";
		
	}
	if(empty($_POST['degree']))
	{
		$errorMessage .= "<li>Please enter your college degree</li>";
	}
	if(empty($_POST['yearGraduated']))
	{
		$errorMessage .= "<li>Please enter the year you graduated</li>";
	}
	if(empty($_POST['awards']))
	{
		$errorMessage .= "<li>Please enter your awards, if you have non please write not available</li>";
	}
	
	if(empty($_POST['seminarsAttendded']))
	{
		$errorMessage .= "<li>Please enter the seminars you have attended, if you have non please write not available</li>";
	}
	if(empty($_POST['seminarsFacilitated']))
	{
		$errorMessage .= "<li>Please enter the seminars you have facilitated, if you have non please write not available</li>";
	}
	if(empty($_POST['extraActivities']))
	{
		$errorMessage .= "<li>Please enter your extra curicular activities, if you have non please write not available</li>";
	}
	if(empty($_POST['skills']))
	{
		$errorMessage .= "<li>Please write your skills</li>";
	}
	if(empty($_POST['experience']))
	{
		$errorMessage .= "<li>Please enter your experience, if you have non please write not available</li>";
	}
	if(empty($errorMessage))
	{
	echo "$lastName";
	echo "sdad";
	echo "$user";
		mysql_connect('localhost', 'root', '')
        or die(mysql_error());
		
        mysql_select_db('lbas_hr') 
        or die(mysql_error());
		
		$sql = "UPDATE person 
				SET L_Name = '".$lastName."', 
					F_Name = '".$firstName."', 
					M_Name = '".$middleName."'
				WHERE ID_No ='".$user."'";
				
		$sql2 = "UPDATE resume
				 SET Email = '".$email."',
					 M_No = '".$mobNumber."',
					 T_No = '".$telNumber."',
					 City = '".$city."',
					 Street = '".$street."',
					 Z_Code = '".$zip."',
					 H_School = '".$highSchool."',
					 College = '".$college."',
					 Course = '".$degree."',
					 Awards = '".$awards."',
					 S_Attended = '".$seminarsAttendded."',
					 S_Facilitated = '".$seminarsFacilitated."',
					 C_Activities = '".$extraActivities."'
				 WHERE ID_No='".$user."'";
		
				$updatePerson = mysql_query($sql);
				$updateResume = mysql_query($sql2);
	
		if ($updatePerson && $updateResume){
				echo 'Updated';
		}
		else {
				echo 'Not updated';
				
		}
	}
	
	
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
    <link href="dateTimePicker/styles/kendo.common.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.rtl.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.default.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.dataviz.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.dataviz.default.min.css" rel="stylesheet">

    
           <!-- Placed at the end of the document so the pages load faster --> 
	<script src="js/jquery-1.7.2.min.js"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script src="js/excanvas.min.js"></script> 
	<script src="js/chart.min.js" type="text/javascript"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>   

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
  </style>

  <script type="text/javascript">
		  $(document).ready(function() {
            var count = 0;
	        var count1 = 0;
	        var count2= 0;
	        var count3 = 0;
	        // CREATE A "DIV" ELEMENT AND DESIGN IT USING JQUERY ".css()" CLASS.
	        var divAward = $(document.createElement('div')).css({
	            padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
	            borderTopColor: '#999', borderBottomColor: '#999',
	            borderLeftColor: '#999', borderRightColor: '#999'
	        });

	        var divOrg = $(document.createElement('div')).css({
	            padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
	            borderTopColor: '#999', borderBottomColor: '#999',
	            borderLeftColor: '#999', borderRightColor: '#999'
	        });

	         var divExp = $(document.createElement('div')).css({
	            padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
	            borderTopColor: '#999', borderBottomColor: '#999',
	            borderLeftColor: '#999', borderRightColor: '#999'
	        });

 	         var divSkill = $(document.createElement('div')).css({
	            padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
	            borderTopColor: '#999', borderBottomColor: '#999',
	            borderLeftColor: '#999', borderRightColor: '#999'
	        });
	        
	        $('#addAward').click(function() {
	            if (count <= 4) {
	                count = count + 1;
	                // ADD TEXTBOX.
	                $(divAward).append('<input type=text class="input" id=tb' + count + ' ' +
	                            'placeholder="Award ' + count + '" name="Award '+ count +'" />');

	                if (count == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                    var divSubmit = $(document.createElement('div'));
	                }
	                $('#Awards').after(divAward, divSubmit);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divAward).append('<label>-</label>'); 
	                $('#addAward').attr('class', 'bt-disable'); 
	                $('#addAward').attr('disabled', 'disabled');
	            }
	        });

	        $('#addOrg').click(function() {
	            if (count1 <= 4) {
	                count1 = count1 + 1;
	                // ADD TEXTBOX.
	                $(divOrg).append('<input type=text class="input" id=tb1' + count1 + ' ' +
	                            'placeholder="Organization' + count1 + '" name="Org '+ count +'" />');

	                if (count1 == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                     var divSubmit1 = $(document.createElement('div'));
	                }
	                $('#Organizations').after(divOrg, divSubmit1);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divOrg).append('<label>--</label>'); 
	                $('#addOrg').attr('class', 'bt-disable'); 
	                $('#addOrg').attr('disabled', 'disabled');
	            }
	        });

	        $('#addExp').click(function() {
	            if (count2 <= 4) {
	                count2 = count2 + 1;
	                // ADD TEXTBOX.
	                $(divExp).append('<input type=text class="input" id=tb2' + count2 + ' ' +
	                            'placeholder="Former Job Position' + count2 + '" name="Exp '+ count +'" />');

	                if (count2 == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                     var divSubmit2 = $(document.createElement('div'));
	                }
	                $('#Experience').after(divExp, divSubmit2);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divSkill).append('<label>--</label>'); 
	                $('#addSkill').attr('class', 'bt-disable'); 
	                $('#addSkill').attr('disabled', 'disabled');
	            }
	        });

	        $('#addSkill').click(function() {
	            if (count3 <= 4) {
	                count3 = count3 + 1;
	                // ADD TEXTBOX.
	                $(divSkill).append('<input type=text class="input" id=tb3' + count3 + ' ' +
	                            'placeholder="Skill ' + count3 + '" name="Skill '+ count +'" />');

	                if (count3 == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
	                    var divSubmit3 = $(document.createElement('div'));
	                }
	                $('#Skill').after(divSkill, divSubmit3);   // ADD BOTH THE DIV ELEMENTS TO THE "main" divAward.
	            }
	            else{      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
	                $(divSkill).append('<label>-</label>'); 
	                $('#addSkill').attr('class', 'bt-disable'); 
	                $('#addSkill').attr('disabled', 'disabled');
	            }
	        });

	        $('#removeAward').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
	            if (count > 0 && count<=5) { $('#tb' + count).remove(); count = count - 1; }
	            if (count == 0 || count <0) { $(divAward).empty(); 
	                $(divAward).remove(); 
	                $('#addAward').removeAttr('disabled'); 
	                $('#addAward').attr('class', 'bt');
	                count = 0;
	            }
	        });

	        $('#removeOrg').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
	            if (count1 > 0 && count1<=5) { $('#tb1' + count1).remove(); count1 = count1 - 1; }
	            if (count1 == 0 || count1 <0) { $(divOrg).empty(); 
	                $(divOrg).remove(); 
	                $('#addOrg').removeAttr('disabled'); 
	                $('#addOrg').attr('class', 'bt'); 
	                count1 = 0;
	            }
	        });

	        $('#removeExp').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
            if (count2 > 0 && count2<=5) { $('#tb2' + count2).remove(); count2 = count2 - 1; }
            if (count2 == 0 || count2 <0) { $(divExp).empty(); 
                $(divExp).remove(); 
                $('#addExp').removeAttr('disabled'); 
                $('#addExp').attr('class', 'bt'); 
                count2 = 0;
            }
        	});

        	$('#removeSkill').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
            if (count3 > 0 && count3<=5) { $('#tb2' + count3).remove(); count3 = count3 - 1; }
            if (count3 == 0 || count3 <0) { $(divSkill).empty(); 
                $(divSkill).remove(); 
                $('#addSkill').removeAttr('disabled'); 
                $('#addSkill').attr('class', 'bt'); 
                count3 = 0;
            }
        	});
	    });

		 

    // PICK THE VALUES FROM EACH TEXTBOX WHEN "SUBMIT" BUTTON IS CLICKED.
    var divValue, values = '';
    function GetTextValue() {
        $(divValue).empty(); 
        $(divValue).remove(); values = '';
        $('.input').each(function() {
            divValue = $(document.createElement('div')).css({
                padding:'5px', width:'200px'
            });
            values += this.value + '<br />'
        });
        $(divValue).append('<p><b>Your selected values</b></p>' + values);
        $('body').append(divValue);
    }
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
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="ApplicantPage.php">LBASS Human Resource Information System </a>
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
            <li><a href="ApplicantPage.php"><i class="icon-home"></i><span>Home</span> </a> </li>
            <li><a href="ApplicantGuidelines.html"><i class="icon-list-alt"></i><span>Guidelines</span> </a> </li>
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
		<form action="ApplicantSubmitRes.php" method="POST">
		  <div class="table-responsive">	<!--Resume Form into table-->
		 <table class="table"> 
			<thead>
				<tr>
					<th>Personal Information</th>
					<th></th>
					<th>Contact details</th>
				</tr>
			</thead>
				<tbody>

				<tr>
					<td id="resume-label">First Name: </td>
					<td>
						<input type="text" name="firstName" value="<?=$firstName;?>">
					</td>
					<td id="resume-label">E-mail: </td>
					<td>
						<input type="text" name="email" value="<?=$email;?>"><br>
					</td>
				</tr>	
				<tr>
					<td id="resume-label">Last Name:</td>
					<td>						
						<input type="text" name="lastName" value="<?php echo"$lastName";?>">
					</td>
					<td id="resume-label">Mobile Number: </td>
					<td>
						<input type="text" name="mobNumber" value="<?=$mobNumber;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Middle Name:</td>
					<td>
						<input type="text" name="middleName" value="<?=$middleName;?>">
					</td>
					<td id="resume-label">Telephone Number: </td>
					<td>
						<input type="text" name="telNumber" value="<?=$telNumber;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Gender:</td>
					<td>
						<input type="radio" name="sex" value="male" checked>Male
						<input type="radio" name="sex" value="female">Female <br>
					</td>
					
				</tr>
				<tr>
					<td id="resume-label"><br>Civil Status:</td>
					<td>
						<input type="radio" name="sex" value="single" checked>Single 
						<input type="radio" name="sex" value="married">Married <br>
						<input type="radio" name="sex" value="Divorced">Divorced 
						<input type="radio" name="sex" value="Divorced">Widowed 
					</td>
					<td id="resume-label">Degree:</td>
					<td>
						<input type="text" name="degree" value="<?=$degree;?>"><br>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td id="resume-label"><br><b>Address</b></td>
					<td id="resume-label"></td>
					<td id="resume-label"><br><b>Education</b></td>
				</tr>
				<tr>
					<td id="resume-label">Street:</td>
					<td>
						<input type="text" name="street" value="<?=$street;?>"> <br>
					</td>
					<td id="resume-label">High School:</td>
					<td>
						<input type="text" name="highschool" value="<?=$highSchool;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">City:</td>
					<td>	
						<input type="select" name="city" value="<?=$city;?>"> <br>
					</td>
					<td id="resume-label">Year Graduated:</td>
					<td>
						<input type="text" name="HSyearGraduated" value="<?=$HSyearGraduated;?>"> <br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Province:</td>
					<td>	
						<input type="select" name="province" value="<?=$province;?>"> <br>
					</td>
					<td id="resume-label">College/University:</td>
					<td>
						<input type="text" name="ColyearGraduated" value="<?=$ColyearGraduated;?>"> <br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Zip Code:</td>
					<td>
						<input type="text" name="zip" value="<?=$zip;?>"><br>
					</td>
					<td id="resume-label">Year Graduated:</td>
					<td>
						<input type="text" name="yearGraduated" value="<?=$yearGraduated;?>"> <br>
					</td>
				</tr>

				<tr>
					<td id="resume-label"><br><b>Awards</b></td>
					<td></td>
					<td id="resume-label"><br><b>Organization(s) Affiliated</b></td>
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
				<tr><!--
					<td id="resume-label">Seminars Attended(Year, Title):</td>
					<td>
						<input type="text" name="seminarsAttendded" value="<?=$seminarsAttendded;?>"><br>
					</td> 
					<td id="resume-label">Specialties and Technical Skills <br> &nbsp (Year, Title):</td>
					<td>
						<input type="text" name="skills" value="<?=$skills;?>"><br>
					</td>
					
				</tr>
				<tr>
					<td id="resume-label">Seminars Facilitated(Year, Title)</td>
					<td>
						<input type="text" name="seminarsFacilitated" value="<?=$seminarsFacilitated;?>"><br>
					</td>-->
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><input type="submit" name="resume" value="Submit" /></td>
				</tr>	
											
			
			</tbody>
			</table>
		  	</script>
			</form>
	  </div>
	</div>
</div>
</div>
</div>
</body>
</html>