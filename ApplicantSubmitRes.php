	
	<?php

	session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
	}

$user=$_SESSION['ID_No'];

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
					 C_Activities = '".$extraActivities."'
				 	WHERE ID_No='".$user."'";

				 	mysql_query($sql);
				 	mysql_query($sql2);



        echo ("Your first name is ".$firstName."<br/>");
        echo ("Your last name is".$lastName."<br/>");
        echo ("Your mid name is ".$middleName."<br/>");
       	echo ("Street:".$street ."<br/>");
       	echo ("City: ".$city."<br/>");
       	echo ("Zip Codesss:".$zip."<br/>");
       	echo ("Email:".$email."<br/>");
       	echo ("Numbehh:".$mobNumber."<br/>");
       	echo ("telnumbeehh:".$telNumber."<br/>");
       	echo ("HS:".$highSchool."<br/>");
       	echo ("College yow: ".$college."<br/>");
       	echo ("Degree mo bruh:".$degree."<br/>");
       	echo ("Yead Grad:".$yearGraduated."<br/>");
       	echo ("Awards isa:".$awards."<br/>");
       	echo ("Ang skill mo puta:".$skills."<br/>");
       	echo ("Ang exp mo dung:".$experience."<br/>");

	?>