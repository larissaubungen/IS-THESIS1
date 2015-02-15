<?php
if($_POST['eval'] == "Submit"){ 
?>
<script type="text/javascript">
				function successful(){
					alert("Thank you for answering the survey!");
				}

				function fail(){
					alert("Fail");
				}
<?php
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
		
		$tbl_name = 'eval_eahw_a';
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
		$date =  date("Y-m-d");
		
		$sum = ($ques_1 + $ques_2 + $ques_3 + $ques_4 + $ques_5 + $ques_6 + $ques_7 + $ques_8 + $ques_9 + $ques_10 + $ques_11 + $ques_12 + $ques_13 + $ques_14 + $ques_15 + $ques_16 + $ques_17 + $ques_18 + $ques_19 + $ques_20 + $ques_21 + $ques_22 + $ques_23 + $ques_24)/24;
		$final = ($sum/5) * 100;
		echo "percentage = $final";
		
		$insert="INSERT INTO $tbl_name (ID_No,Ques_1, Ques_2, Ques_3, Ques_4, Ques_5, Ques_6, Ques_7, Ques_8, Ques_9, Ques_10, Ques_11, Ques_12, Ques_13, Ques_14, Ques_15, Ques_16, Ques_17, Ques_18, Ques_19, Ques_20, Ques_21, Ques_22, Ques_23,Ques_24, Result, Date)
				VALUES('". $idNo ."', '". $ques_1 ."', '".$ques_2."', '".$ques_3."', '".$ques_4."', '".$ques_5."', '".$ques_6."', '".$ques_7."', '".$ques_8."', '".$ques_9."', '".$ques_10."', '".$ques_11."', '".$ques_12."', '".$ques_13."', '".$ques_14."', '".$ques_15."', '".$ques_16."', '".$ques_17."', '".$ques_18."', '".$ques_19."', '".$ques_20."', '".$ques_21."', '".$ques_22."', '".$ques_23."', '".$ques_24."', '".$final."', '".$date."' )";
		
		
		$result=mysql_query($insert);
		
		if($result){
			echo"successful();";
		}else{
			echo "&nbsp Error".mysql_error();
		}
		}
?>
</script>
<html>
    <head>
		<meta charset="utf-8">
        <title>LBASS Supervisor Evaluation</title>
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
    </head>
<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">LBASS Human Resource Information System </a>
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
            <li class="active"><a href="#"><i class="icon-home"></i><span>Evaluation Form</span> </a> </li>
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->
    <div class="well" align="center">
    <h4>Evaluation of Advisory Work and Homeroom Work(EAHW-A)</h4>
	
        <form action='EvaluationOfAdvisoryandHomeroomWork(EAHW-A).php' method='POST'>
		<h5>Name of Teacher:</h5>
        <input type="text" placeholder="Name of Teacher" name="idNo">
        <h5>Level/Section:</h5>
        <input type="text" placeholder="(Grade,Section)"> <br>
        <div class="well" align="center">
        <table border="1">
            <thead>
                <tr>
                    <th>Rating Scale</th>
                    <th>Legend</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Outstanding(4.85-5.00)</td>
                    <td>exceptional/excellent</td>
                </tr>
                <tr>
                    <td>Very Satisfactory(4.21-4.84)</td>
                    <td>way beyond what is expected</td>
                </tr>
                <tr>
                    <td>Satisfactory(3.50-4.20)</td>
                    <td>of the quality required by the job</td>
                </tr>
                <tr>
                    <td>Fair(2.50-3.49)</td>
                    <td>"just to get by"</td>
                </tr>
                 <tr>
                    <td>Unsatisfactory(1.00-2.49)</td>
                    <td>unacceptable/poor</td>
                </tr>
            </tbody>
        </table>
        <div class="well" align="center">
        <table>
            <thead>
                <tr>
                    <th>Criteria</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                  <tr>
					
                        <td> 1. Developing a "homeroom" relationship in the advisory class  </td>
                        <td><input type="radio" name="1" value="1"> 1<br></td>
                        <td><input type="radio" name="1" value="2"> 2<br></td>
                        <td><input type="radio" name="1" value="3"> 3<br></td>
                        <td><input type="radio" name="1" value="4"> 4<br></td>    
                        <td><input type="radio" name="1" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 2. Creating a physical classroom setting conducive to a homeroom atmosphere </td>
                        <td><input type="radio" name="2" value="1"> 1<br></td>
                        <td><input type="radio" name="2" value="2"> 2<br></td>
                        <td><input type="radio" name="2" value="3"> 3<br></td>
                        <td><input type="radio" name="2" value="4"> 4<br></td>    
                        <td><input type="radio" name="2" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 3. Developing team spirit and camaraderie in the advisory class </td>
                        <td><input type="radio" name="3" value="1"> 1<br></td>
                        <td><input type="radio" name="3" value="2"> 2<br></td>
                        <td><input type="radio" name="3" value="3"> 3<br></td>
                        <td><input type="radio" name="3" value="4"> 4<br></td>    
                        <td><input type="radio" name="3" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 4. Holding regular homeroom meetings </td>
                        <td><input type="radio" name="4" value="1"> 1<br></td>
                        <td><input type="radio" name="4" value="2"> 2<br></td>
                        <td><input type="radio" name="4" value="3"> 3<br></td>
                        <td><input type="radio" name="4" value="4"> 4<br></td>    
                        <td><input type="radio" name="4" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 5. Sensing/Detecting academic and other problems in students/class </td>
                        <td><input type="radio" name="5" value="1"> 1<br></td>
                        <td><input type="radio" name="5" value="2"> 2<br></td>
                        <td><input type="radio" name="5" value="3"> 3<br></td>
                        <td><input type="radio" name="5" value="4"> 4<br></td>    
                        <td><input type="radio" name="5" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 6. Holding friendly individual/group consultations/counselling with advisory students </td>
                        <td><input type="radio" name="6" value="1"> 1<br></td>
                        <td><input type="radio" name="6" value="2"> 2<br></td>
                        <td><input type="radio" name="6" value="3"> 3<br></td>
                        <td><input type="radio" name="6" value="4"> 4<br></td>    
                        <td><input type="radio" name="6" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 7. Maintaining good contact with parents; doing home visits when needed </td>
                        <td><input type="radio" name="7" value="1"> 1<br></td>
                        <td><input type="radio" name="7" value="2"> 2<br></td>
                        <td><input type="radio" name="7" value="3"> 3<br></td>
                        <td><input type="radio" name="7" value="4"> 4<br></td>    
                        <td><input type="radio" name="7" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 8. Exhibiting discretion, tact, and confidentiality in dealing with students/ parents/guardians </td>
                        <td><input type="radio" name="8" value="1"> 1<br></td>
                        <td><input type="radio" name="8" value="2"> 2<br></td>
                        <td><input type="radio" name="8" value="3"> 3<br></td>
                        <td><input type="radio" name="8" value="4"> 4<br></td>    
                        <td><input type="radio" name="8" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 9. Enforcing Student Handbook provisions in general </td>
                        <td><input type="radio" name="9" value="1"> 1<br></td>
                        <td><input type="radio" name="9" value="2"> 2<br></td>
                        <td><input type="radio" name="9" value="3"> 3<br></td>
                        <td><input type="radio" name="9" value="4"> 4<br></td>    
                        <td><input type="radio" name="9" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 10. Checking students' names in advisory class relatve to Forms 1, 137, and 138 </td>
                        <td><input type="radio" name="10" value="1"> 1<br></td>
                        <td><input type="radio" name="10" value="2"> 2<br></td>
                        <td><input type="radio" name="10" value="3"> 3<br></td>
                        <td><input type="radio" name="10" value="4"> 4<br></td>    
                        <td><input type="radio" name="10" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 11. Submitting promotion report (Form 18-E) at the end of the year </td>
                        <td><input type="radio" name="11" value="1"> 1<br></td>
                        <td><input type="radio" name="11" value="2"> 2<br></td>
                        <td><input type="radio" name="11" value="3"> 3<br></td>
                        <td><input type="radio" name="11" value="4"> 4<br></td>    
                        <td><input type="radio" name="11" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 12. Showing quality participation in the deliberation meetings every grading period(3) </td>
                        <td><input type="radio" name="12" value="1"> 1<br></td>
                        <td><input type="radio" name="12" value="2"> 2<br></td>
                        <td><input type="radio" name="12" value="3"> 3<br></td>
                        <td><input type="radio" name="12" value="4"> 4<br></td>    
                        <td><input type="radio" name="12" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td>  13. Performing well during Parent-Teacher Conferences (3) </td>
                        <td><input type="radio" name="13" value="1"> 1<br></td>
                        <td><input type="radio" name="13" value="2"> 2<br></td>
                        <td><input type="radio" name="13" value="3"> 3<br></td>
                        <td><input type="radio" name="13" value="4"> 4<br></td>    
                        <td><input type="radio" name="13" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 14. Supervising the students during flag ceremonies, programs, field trips, and other similar activities </td>
                        <td><input type="radio" name="14" value="1"> 1<br></td>
                        <td><input type="radio" name="14" value="2"> 2<br></td>
                        <td><input type="radio" name="14" value="3"> 3<br></td>
                        <td><input type="radio" name="14" value="4"> 4<br></td>    
                        <td><input type="radio" name="14" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 15. Monitoring and following up the release/retrieval of communications to parents </td>
                        <td><input type="radio" name="15" value="1"> 1<br></td>
                        <td><input type="radio" name="15" value="2"> 2<br></td>
                        <td><input type="radio" name="15" value="3"> 3<br></td>
                        <td><input type="radio" name="15" value="4"> 4<br></td>    
                        <td><input type="radio" name="15" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 16. Monitoring/Recording habitual minor offenses and reporting the same to the POD </td>
                        <td><input type="radio" name="16" value="1"> 1<br></td>
                        <td><input type="radio" name="16" value="2"> 2<br></td>
                        <td><input type="radio" name="16" value="3"> 3<br></td>
                        <td><input type="radio" name="16" value="4"> 4<br></td>    
                        <td><input type="radio" name="16" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>17. Making referrals to the Guidance Conselors/Prefect of Discipline </td>
                        <td><input type="radio" name="17" value="1"> 1<br></td>
                        <td><input type="radio" name="17" value="2"> 2<br></td>
                        <td><input type="radio" name="17" value="3"> 3<br></td>
                        <td><input type="radio" name="17" value="4"> 4<br></td>    
                        <td><input type="radio" name="17" value="5"> 5<br></td>
                  </tr> 
                  <tr>
                        <td>18. Reporting damages and repair needs in the classroom </td>
                        <td><input type="radio" name="18" value="1"> 1<br></td>
                        <td><input type="radio" name="18" value="2"> 2<br></td>
                        <td><input type="radio" name="18" value="3"> 3<br></td>
                        <td><input type="radio" name="18" value="4"> 4<br></td>    
                        <td><input type="radio" name="18" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>19. Creating and implementing a system of maintaining order/cleanliness in the room (5) </td>
                        <td><input type="radio" name="19" value="1"> 1<br></td>
                        <td><input type="radio" name="19" value="2"> 2<br></td>
                        <td><input type="radio" name="19" value="3"> 3<br></td>
                        <td><input type="radio" name="19" value="4"> 4<br></td>    
                        <td><input type="radio" name="19" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>20. Coordinating with subject teachres on the schedules of long tests, projects, etc. (5) </td>
                        <td><input type="radio" name="20" value="1"> 1<br></td>
                        <td><input type="radio" name="20" value="2"> 2<br></td>
                        <td><input type="radio" name="20" value="3"> 3<br></td>
                        <td><input type="radio" name="20" value="4"> 4<br></td>    
                        <td><input type="radio" name="20" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>21. Conducting daily routine checks on haircut, uniform, and ID (5) </td>
                        <td><input type="radio" name="21" value="1"> 1<br></td>
                        <td><input type="radio" name="21" value="2"> 2<br></td>
                        <td><input type="radio" name="21" value="3"> 3<br></td>
                        <td><input type="radio" name="21" value="4"> 4<br></td>    
                        <td><input type="radio" name="21" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>22. Conducting daily routine checks on attendance/submission of reports related thereto(3) </td>
                        <td><input type="radio" name="22" value="1"> 1<br></td>
                        <td><input type="radio" name="22" value="2"> 2<br></td>
                        <td><input type="radio" name="22" value="3"> 3<br></td>
                        <td><input type="radio" name="22" value="4"> 4<br></td>    
                        <td><input type="radio" name="22" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>23. Guiding/Inspiring the advisory class in relation to environmental thrust </td>
                        <td><input type="radio" name="23" value="1"> 1<br></td>
                        <td><input type="radio" name="23" value="2"> 2<br></td>
                        <td><input type="radio" name="23" value="3"> 3<br></td>
                        <td><input type="radio" name="23" value="4"> 4<br></td>    
                        <td><input type="radio" name="23" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>24. Encouraging by word and example the living out of the LBAS core values.</td>
                        <td><input type="radio" name="24" value="1"> 1<br></td>
                        <td><input type="radio" name="24" value="2"> 2<br></td>
                        <td><input type="radio" name="24" value="3"> 3<br></td>
                        <td><input type="radio" name="24" value="4"> 4<br></td>    
                        <td><input type="radio" name="24" value="5"> 5<br></td><br>
                  </tr>
            </tbody>
        </table>
            <input type='submit' value='Submit' class='Log' name='eval'>;
	</form>
</body>
</html>
