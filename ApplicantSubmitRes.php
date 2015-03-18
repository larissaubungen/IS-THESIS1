	<?php

	session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}
	error_reporting(0);

	$user=$_SESSION['ID_No'];

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
	$birth = array($_POST['date_select2_year'], $_POST['date_select2_month'],$_POST['date_select2_day']);
	$bDay = implode("-", $birth);
	//$bDay = ;
	//echo "Birthday: $bDay";

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
	$dept=$_POST['department'];
	$position=$_POST['position'];
	$level=$_POST['level'];
	$resume = "Yes";

	mysql_connect('localhost', 'root', '')
        or die(mysql_error());
		
        mysql_select_db('lbas_hr') 
        or die(mysql_error());

		
		$updatePerson = "UPDATE person 
						 SET 	L_Name = '".$lastName."', 
						 		F_Name = '".$firstName."', 
						 		M_Name = '".$middleName."',
						 		B_Day = '".$bDay."',
						 		Resume = '".$resume."',
						 		C_Status = '".$civil."'
				 		 		WHERE ID_No ='".$user."'";

		

		$updateResume = "INSERT INTO resume
				 		 (ID_No, Email, M_No, T_No, Street, 
						 City, Province, Z_Code, H_School, HS_Graduated, 
						 College,College_Graduated, Course, Masteral, Course2, 
						 Award1, Award2, Award3, Award4, Award5, 
						 Org_Aff1, Org_Aff2, Org_Aff3, Org_Aff4, Org_Aff5, 
						 T_Skills1, T_Skills2, T_Skills3, T_Skills4, T_Skills5, 
						 Experience1, Experience2, Experience3, Experience4, Experience5, 
						 App_Department, App_Position, App_Level)


		VALUES ('".$user."','".$email."','".$mobNumber."','".$telNumber."','".$street."',
				'".$city."','".$province."','".$zip."','".$highSchool."','".$HS_Grad."',
				'".$college."','".$College_Grad."','".$degree."','".$masteral."','".$degree2."',
				'".$award1."','".$award2."','".$award3."','".$award4."','".$award5."',
				'".$org1."','".$org2."','".$org3."','".$org4."','".$org5."',
				'".$skill1."','".$skill2."','".$skill3."','".$skill4."',
				'".$skill5."','".$exp1."','".$exp2."','".$exp3."','".$exp4."',
				'".$exp5."','".$dept."','".$position."','".$level."')";

		if($Spouse_Lname != '' or $Child1_Fname != ''){
		$updateFamily = "INSERT INTO family
						(ID_No, Spouse_Lname, Spouse_Fname, Spouse_Mname, Child1_Fname,
						Child1_Lname, Child2_Fname, Child2_Lname, Child3_Fname, Child3_Lname, 
						Child4_Fname, Child4_Lname, Child5_Fname, Child5_Lname, Child6_Fname,
						Child6_Lname, Child7_Fname, Child7_Lname, Child8_Fname, Child8_Lname,
						Child9_Fname, Child9_Lname, Child10_Fname, Child10_Lname)

		VALUES ('".$user."','".$Spouse_Lname."','".$Spouse_Fname."','".$Spouse_Mname."',
				'".$Child1_Fname."','".$Child1_Lname."','".$Child2_Fname."','".$Child2_Lname."',
				'".$Child3_Fname."','".$Child3_Lname."','".$Child4_Fname."','".$Child4_Lname."',
				'".$Child5_Fname."','".$Child5_Lname."','".$Child6_Fname."','".$Child6_Lname."',
				'".$Child7_Fname."','".$Child5_Lname."','".$Child8_Fname."','".$Child8_Lname."',
				'".$Child9_Fname."','".$Child9_Lname."','".$Child10_Fname."','".$Child10_Fname."')";	
		
			$checkUpdate3 = msql_query($updateFamily);
		}
		
		$checkUpdate1 = mysql_query($updatePerson);
		$checkUpdate2 = mysql_query($updateResume);
		

		//Redirecting to Applicant Page once Resume is submitted
		if ($checkUpdate1 && $checkUpdate2) { 
			header('Location:ApplicantPage.php');			
		 } 
		else{
			//header('Location:ApplicantSubmitFailed.php');
			die('Invalid query: ' . mysql_error());
		}

	?>
</body>
</html>
