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
		SELECT  person.ID_No as 'ID_No', person.P_Word as 'password', E_Status as 'status', Resume
		FROM person 
		WHERE ID_No = '" . $userName . "' 
		AND P_Word = '" . $userPass . "' 	
			");
			
		$check=mysql_fetch_array($result);
		 if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Applicant'  && $check['Resume'] == null || $check['Resume'] == 'no'){
					header('location:ApplicantResume.php');
					//start of sessions
					session_start();
					//iniating a sessions variable and it's value
					$_SESSION['ID_No']=$check['ID_No'];
		//condition for no match found
		}else if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Admin'){
					header('location:HR_Page.php');
					//start of sessions
					session_start();
					//iniating a sessions variable and it's value
					$_SESSION['ID_No']=$check['ID_No'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
		}else if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Employee'){

					header('location:EmployeeResign.php');
					//start of sessions
					session_start();
					//iniating a sessions variable and it's value
					$_SESSION['ID_No']=$check['ID_No'];
>>>>>>> origin/master
					
		}else if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Employee'){
					header('location:EmployeesPage.php');
					//start of sessions
					session_start();
					//iniating a sessions variable and it's value
					$_SESSION['ID_No']=$check['ID_No'];
=======
>>>>>>> parent of 4b13d76... Updated pages
		}else{ header('location:ErrorLogIn.html');

		}
?>
