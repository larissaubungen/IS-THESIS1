<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } ?>  



<script type="text/javascript">

		
	function CloseForm() {
		opener.location='HR_Page.php'
		self.close();

	}
		
  </script>
<?php
	 error_reporting(0);
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());

		$user=$_SESSION['ID_No'];

		$tbl_name = 'eval_ecib_primary';
		$idNo = $_POST['idNo'];
		$ques_1=$_POST['1'];
		$ques_2=$_POST['2'];
		$ques_3=$_POST['3'];
		$ques_4=$_POST['4'];
		$ques_5=$_POST['5'];
		$ques_6=$_POST['6'];
		$ques_7=$_POST['7'];
		$ques_8=$_POST['8'];
		$ques_9=$_POST['9'];
		$ques_10=$_POST['10'];
		$ques_11=$_POST['11'];
		$date = date("Y-m-d");
		$Comments=$_POST['comments'];
		
		$sum = ($ques_1 + $ques_2 + $ques_3 + $ques_4 + $ques_5 + $ques_6 + $ques_7 + $ques_8 + $ques_9 + $ques_10+ $ques_11)/11;
		$final = $sum;
		//echo "percentage = $final";
		//echo "percentage = $final";
		
		$insert="INSERT INTO $tbl_name (ID_No,Ques_1, Ques_2, Ques_3, Ques_4, Ques_5, Ques_6, Ques_7, Ques_8, Ques_9, Ques_10, Ques_11, Result, Date, Evaluator_ID, Comment)
				VALUES('". $idNo ."', '". $ques_1 ."', '".$ques_2."', '".$ques_3."', '".$ques_4."', '".$ques_5."', '".$ques_6."', '".$ques_7."', '".$ques_8."', '".$ques_9."', '".$ques_10."', '".$ques_11."', '".$final."', '".$date."', '".$user."', '".$Comments."' )";
		
		
		$result=mysql_query($insert);
		
		if($result){
		echo "Thank you for your time! Click the button below to your home page";
		echo"<input type='button' onClick='CloseForm();' value='Home'>";
			
		}else{
			echo "&nbsp Error".mysql_error();
		}
		
?>
