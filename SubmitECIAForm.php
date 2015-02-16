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
		
		$tbl_name = 'eval_ecia_alllevels';
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
		$ques_13=$_POST['13'];
		$ques_14=$_POST['14'];
		$ques_15=$_POST['15'];
		$ques_16=$_POST['16'];
		$ques_17=$_POST['17'];
		$ques_18=$_POST['18'];
		$ques_19=$_POST['19'];
		$ques_20=$_POST['20'];
		$ques_21=$_POST['21'];
		$ques_22=$_POST['22'];
		$ques_23=$_POST['23'];
		$ques_24=$_POST['24'];
		$ques_25=$_POST['25'];
		$ques_26=$_POST['26'];
		$ques_27=$_POST['27'];
		$ques_28=$_POST['28'];
		$ques_29=$_POST['29'];
		$ques_30=$_POST['30'];
		$ques_31=$_POST['31'];
		$ques_32=$_POST['32'];
		$ques_33=$_POST['33'];
		$ques_34=$_POST['34'];
		$ques_35=$_POST['35'];
		$ques_36=$_POST['36'];
		$ques_37=$_POST['37'];
		$ques_38=$_POST['38'];
		$ques_39=$_POST['39'];
		$ques_40=$_POST['40'];
		$ques_41=$_POST['41'];
		$ques_42=$_POST['42'];
		$date =  date("Y-m-d");
		
		$sum = ($ques_1 + $ques_2 + $ques_3 + $ques_4 + $ques_5 + $ques_6 + $ques_7 + $ques_8 + $ques_9 + $ques_10 + $ques_11 + $ques_12 + $ques_13 + $ques_14 + $ques_15 + $ques_16 + $ques_17 + $ques_18 + $ques_19 + $ques_20 + $ques_21 + $ques_22 + $ques_23 + $ques_24 
				+ $ques_25 + $ques_26 + $ques_27 + $ques_28 + $ques_29 + $ques_31 + $ques_30 + $ques_32 + $ques_33 + $ques_34 
				+ $ques_35 + $ques_36 + $ques_37 + $ques_38 + $ques_39 + $ques_40 + $ques_41 + $ques_42)/42;
		$final = ($sum/5) * 100;
		echo "percentage = $final";
		
		$insert="INSERT INTO $tbl_name (ID_No,Ques_1, Ques_2, Ques_3, Ques_4, Ques_5, Ques_6, Ques_7, Ques_8, Ques_9, Ques_10, Ques_11, Ques_12, Ques_13, Ques_14, Ques_15, Ques_16, Ques_17, Ques_18, Ques_19, Ques_20, Ques_21, Ques_22, Ques_23, Ques_24
										,Ques_25 ,Ques_26 ,Ques_27 ,Ques_28 ,Ques_29 ,Ques_30 ,Ques_31 ,Ques_32 ,Ques_33 ,Ques_34 ,Ques_35 ,Ques_36 ,Ques_37 ,Ques_38 ,Ques_39 ,Ques_40 ,Ques_41 ,Ques_42 , Result, Date)
				VALUES('". $idNo ."', '". $ques_1 ."', '".$ques_2."', '".$ques_3."', '".$ques_4."', '".$ques_5."', '".$ques_6."', '".$ques_7."', '".$ques_8."', '".$ques_9."', '".$ques_10."', '".$ques_11."', '".$ques_12."', '".$ques_13."', '".$ques_14."', '".$ques_15."', '".$ques_16."', '".$ques_17."', '".$ques_18."',
					   '".$ques_19."', '".$ques_20."', '".$ques_21."', '".$ques_22."', '".$ques_23."', '".$ques_24."', '".$ques_25."', '".$ques_26."', '".$ques_27."', '".$ques_28."', '".$ques_29."', '".$ques_30."', '".$ques_31."', '".$ques_32."', '".$ques_33."', '".$ques_34."', '".$ques_35."', '".$ques_36."', '".$ques_37."', '".$ques_38."', '".$ques_39."'
					   , '".$ques_40."', '".$ques_41."', '".$ques_42."', '".$final."', '".$date."' )";
		
		
		$result=mysql_query($insert);
		
		if($result){
		echo "Thank you for your time! Click the button below to your home page";
		echo"<input type='button' onClick='CloseForm();' value='Home'>";
			
		}else{
			echo "&nbsp Error".mysql_error();
		}
		
?>
