<?php
/*
this page checks the userName and password of the user and directs it to their
proper page
*/
?> 	
<?php
	$userName=$_POST['userName'];
	$userPass=$_POST['password'];
	//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
		
		//method for finding a match in the database from $userName, $userPass
		$result = mysql_query("
		SELECT  person.ID_No as 'ID_No', person.P_Word as 'password', person.E_Status as 'status', person.Resume_Status
		FROM person 
		WHERE ID_No = '" . $userName . "' 
		AND P_Word = '" . $userPass . "' 	
			");

	 	 $check=mysql_fetch_array($result);

	 	 	 //condition for New Applicant without Accomplished Resume
			 if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Applicant' &&  IS_NULL($check['Resume_Status'])){					
						header('location:ApplicantResume2.php');						
						session_start(); 					//start of sessions						
						$_SESSION['ID_No']=$check['ID_No']; //iniating a sessions variable and it's value

			//condition for Admin / HR Officer User
			}else if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Admin'){
					header('location:HR_Page.php'); 		//start of sessions
					session_start();						//iniating a sessions variable and it's value
					$_SESSION['ID_No']=$check['ID_No'];

			//condition for applicant with resume
			}else if ($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Applicant' && $check['Resume_Status'] != null) 
			{
				header('location:ApplicantPage.php');		//start of sessions
				session_start();							//iniating a sessions variable and it's value
				$_SESSION['ID_No']=$check['ID_No'];
			}
			//condition for employees
			else if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Employee')
			{
						header('location:EmployeeProfileHome.php');
						session_start();					//start of sessions						
						$_SESSION['ID_No']=$check['ID_No']; //iniating a sessions variable and it's value
						
			//error message
			}else if($check['ID_No'] != $userName && $check['password'] != $userPass ){					
						header('location:ErrorLogIn.html');

			//error message
			}else { 
				header('location:ErrorLogIn.html');
			}
?>
