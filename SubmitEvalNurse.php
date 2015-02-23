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
		
			$tbl_name = 'eval_nurse';
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
		$ques_12=$_POST['12'];
		$date =  date("Y-m-d");
		
		$sum = ($ques_1 + $ques_2 + $ques_3 + $ques_4 + $ques_5 + $ques_6 + $ques_7 + $ques_8 + $ques_9 + $ques_10 + $ques_11 + $ques_12)/12;
		$final = ($sum/5) * 100;
		echo "percentage = $final";
		
		$result=mysql_query($insert);
		
		if($result){
		echo "Thank you for your time! Click the button below to your home page";
		echo"<input type='button' onClick='CloseForm();' value='Home'>";
			
		}else{
			echo "&nbsp Error".mysql_error();
		}
		
?>
