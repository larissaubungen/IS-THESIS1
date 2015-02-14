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
<<<<<<< HEAD
        <meta charset="utf-8">
        <title>Evaluation of Advisory Work and Homeroom Work(EAHW-A)</title>
=======
		<meta charset="utf-8">
        <title>LBASS Supervisor Evaluation</title>
>>>>>>> 6af12ab4f041f2ffb31b07eb44da23a13a3edd9b
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
<<<<<<< HEAD

        <link rel="stylesheet" href="jquery/jquery-ui.css">
        <link href="content/shared/styles/examples-offline.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.common.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.rtl.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.default.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.dataviz.min.css" rel="stylesheet">
        <link href="dateTimePicker/styles/kendo.dataviz.default.min.css" rel="stylesheet">

        
               <!-- Placed at the end of the document so the pages load faster --> 
        <script src="js/jquery-1.7.2.min.js"></script> 
        <script src="js/excanvas.min.js"></script> 
        <script src="js/chart.min.js" type="text/javascript"></script> 
        <script src="js/bootstrap.js"></script>
        <script src="js/base.js"></script>


                <!--Javascript code to calculate result of radio buttons for evaluation form result-->
    <script type="text/javascript">
        function DisplayPrice(price){
            var val1 = 0;
            for( i = 0; i < document.form1.price.length; i++ ){
                if( document.form1.price[i].checked == true ){
                    val1 = document.form1.price[i].value;
                }
            }

            var val2 = 0;
            for( i = 0; i < document.form2.price2.length; i++ ){
                if( document.form2.price2[i].checked == true ){
                    val2 = document.form2.price2[i].value;
                }
            }

            var val3 = 0;
            for( i = 0; i < document.form3.price3.length; i++ ){
                if( document.form3.price3[i].checked == true ){
                    val3 = document.form3.price3[i].value;
                }
            }


            var val4 = 0;
            for( i = 0; i < document.form4.price4.length; i++ ){
                if( document.form4.price4[i].checked == true ){
                    val4 = document.form4.price4[i].value;
                }
            }


            var val5 = 0;
            for( i = 0; i < document.form5.price5.length; i++ ){
                if( document.form5.price5[i].checked == true ){
                    val5 = document.form5.price5[i].value;
                }
            }


            var val6 = 0;
            for( i = 0; i < document.form6.price6.length; i++ ){
                if( document.form6.price6[i].checked == true ){
                    val6 = document.form6.price6[i].value;
                }
            }

            var val7 = 0;
            for( i = 0; i < document.form7.price7.length; i++ ){
                if( document.form7.price7[i].checked == true ){
                    val7 = document.form7.price7[i].value;
                }
            }

            var val8 = 0;
            for( i = 0; i < document.form8.price8.length; i++ ){
                if( document.form8.price8[i].checked == true ){
                    val8 = document.form8.price8[i].value;
                }
            }

            var val9 = 0;
            for( i = 0; i < document.form9.price9.length; i++ ){
                if( document.form9.price9[i].checked == true ){
                    val9 = document.form9.price9[i].value;
                }
            }

            var val10 = 0;
            for( i = 0; i < document.form10.price10.length; i++ ){
                if( document.form10.price10[i].checked == true ){
                    val10 = document.form10.price10[i].value;
                }
            }

            var val11 = 0;
            for( i = 0; i < document.form11.price11.length; i++ ){
                if( document.form11.price11[i].checked == true ){
                    val11 = document.form11.price11[i].value;
                }
            }

            var val12 = 0;
            for( i = 0; i < document.form12.price12.length; i++ ){
                if( document.form12.price12[i].checked == true ){
                    val12 = document.form12.price12[i].value;
                }
            }

            var val13 = 0;
            for( i = 0; i < document.form13.price13.length; i++ ){
                if( document.form13.price13[i].checked == true ){
                    val13 = document.form13.price13[i].value;
                }
            }

            var val14 = 0;
            for( i = 0; i < document.form14.price14.length; i++ ){
                if( document.form14.price14[i].checked == true ){
                    val14 = document.form14.price14[i].value;
                }
            }

            var val15 = 0;
            for( i = 0; i < document.form15.price15.length; i++ ){
                if( document.form15.price15[i].checked == true ){
                    val15 = document.form15.price15[i].value;
                }
            }

            var val16 = 0;
            for( i = 0; i < document.form16.price16.length; i++ ){
                if( document.form16.price16[i].checked == true ){
                    val16 = document.form16.price16[i].value;
                }
            }

             var val17 = 0;
            for( i = 0; i < document.form17.price17.length; i++ ){
                if( document.form17.price17[i].checked == true ){
                    val17 = document.form17.price17[i].value;
                }
            }

             var val18 = 0;
            for( i = 0; i < document.form18.price18.length; i++ ){
                if( document.form18.price18[i].checked == true ){
                    val18 = document.form18.price18[i].value;
                }
            }

             var val19 = 0;
            for( i = 0; i < document.form19.price19.length; i++ ){
                if( document.form19.price19[i].checked == true ){
                    val19 = document.form19.price19[i].value;
                }
            }

             var val20 = 0;
            for( i = 0; i < document.form20.price20.length; i++ ){
                if( document.form20.price20[i].checked == true ){
                    val20 = document.form20.price20[i].value;
                }
            }

             var val21 = 0;
            for( i = 0; i < document.form21.price21.length; i++ ){
                if( document.form21.price21[i].checked == true ){
                    val21 = document.form21.price21[i].value;
                }
            }

             var val22 = 0;
            for( i = 0; i < document.form22.price22.length; i++ ){
                if( document.form22.price22[i].checked == true ){
                    val22 = document.form22.price22[i].value;
                }
            }

            var val23 = 0;
            for( i = 0; i < document.form23.price23.length; i++ ){
                if( document.form23.price23[i].checked == true ){
                    val23 = document.form23.price23[i].value;
                }
            }

            var val24 = 0;
            for( i = 0; i < document.form24.price24.length; i++ ){
                if( document.form24.price24[i].checked == true ){
                    val24 = document.form24.price24[i].value;
                }
            }



            var sum=(parseInt(val1) + parseInt(val2) + parseInt(val3) + parseInt(val4)
                    + parseInt(val5) + parseInt(val6) + parseInt(val7) + parseInt(val8)
                    + parseInt(val9) + parseInt(val10) + + parseInt(val11) + parseInt(val12)
                    + parseInt(val13) + parseInt(val14) + parseInt(val15) + parseInt(val16)
                    + parseInt(val17) + parseInt(val18) + parseInt(val19) + parseInt(val20)
                    + parseInt(val21) + parseInt(val22) + parseInt(val23) + parseInt(val24)) / 24 ;
            document.getElementById('totalSum').value=sum;

            if (sum >= 4.85 && sum <= 5) {
                     document.getElementById('equivalent').value="Outstanding";
                } else if (sum >= 4.21 && sum <= 4.84) {
                    document.getElementById('equivalent').value="Very Satisfactory";
                } else if (sum >= 3.50 && sum <= 4.20) {
                    document.getElementById('equivalent').value="Satisfactory";
                } else if (sum >= 2.50 && sum <= 3.49) {
                     document.getElementById('equivalent').value="Fair";
                } else if (sum >= 1.00 && sum <= 2.49) {
                     document.getElementById('equivalent').value="Unsatisfactory";
                }
        }
    </script>
      <!--Javascript code to calculate result of radio buttons for evaluation form result-->   
=======
>>>>>>> 6af12ab4f041f2ffb31b07eb44da23a13a3edd9b
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
<<<<<<< HEAD

        <h5>Name of Teacher:</h5>
        <input type="text" placeholder="Name of Teacher">
=======
	
        <form action='EvaluationOfAdvisoryandHomeroomWork(EAHW-A).php' method='POST'>
		<h5>Name of Teacher:</h5>
        <input type="text" placeholder="Name of Teacher" name="idNo">
>>>>>>> 6af12ab4f041f2ffb31b07eb44da23a13a3edd9b
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
                    <td>Outstanding</td>
                    <td>exceptional/excellent</td>
                </tr>
                <tr>
                    <td>Very Satisfactory</td>
                    <td>way beyond what is expected</td>
                </tr>
                <tr>
                    <td>Satisfactory</td>
                    <td>of the quality required by the job</td>
                </tr>
                <tr>
                    <td>Fair</td>
                    <td>"just to get by"</td>
                </tr>
                 <tr>
                    <td>Unsatisfactory</td>
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
<<<<<<< HEAD
                    <form name="form1" id="form1" runat="server">
                   <td><input id="rdo_1" type="radio" value="1" name="price" onclick="DisplayPrice(this.value);"> 1&nbsp</td>
                        <td><input id="rdo_2" type="radio" value="2" name="price" onclick="DisplayPrice(this.value);"> 2&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_3" type="radio" value="3" name="price" onclick="DisplayPrice(this.value);"> 3&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_4" type="radio" value="4" name="price" onclick="DisplayPrice(this.value);"> 4&nbsp&nbsp&nbsp&nbsp</td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price" onclick="DisplayPrice(this.value);"> 5&nbsp&nbsp&nbsp&nbsp</td>
                  </form>
                  </tr>
                  <tr>
                        <td> 2. Creating a physical classroom setting conducive to a homeroom atmosphere </td>
                    <form name="form2" id="form2" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price2" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price2" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price2" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price2" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price2" onclick="DisplayPrice(this.value);"> 5<br></td>
                   </form>
                  </tr>
                  <tr>
                        <td> 3. Developing team spirit and camaraderie in the advisory class </td>
                    <form name="form3" id="form3" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price3" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price3" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price3" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price3" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price3" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 4. Holding regular homeroom meetings </td>
                  <form name="form4" id="form4" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price4" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price4" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price4" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price4" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price4" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 5. Sensing/Detecting academic and other problems in students/class </td>
                  <form name="form5" id="form5" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price5" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price5" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price5" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price5" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price5" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 6. Holding friendly individual/group consultations/counselling with advisory students </td>
                  <form name="form6" id="form6" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price6" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price6" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price6" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price6" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price6" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 7. Maintaining good contact with parents; doing home visits when needed </td>
                  <form name="form7" id="form7" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price7" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price7" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price7" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price7" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price7" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 8. Exhibiting discretion, tact, and confidentiality in dealing with students/ parents/guardians </td>
                  <form name="form8" id="form8" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price8" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price8" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price8" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price8" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price8" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>>
                  </tr>
                    <tr>
                        <td> 9. Enforcing Student Handbook provisions in general </td>
                  <form name="form9" id="form9" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price9" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price9" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price9" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price9" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price9" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 10. Checking students' names in advisory class relatve to Forms 1, 137, and 138 </td>
                   <form name="form10" id="form10" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price10" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price10" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price10" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price10" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price10" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 11. Submitting promotion report (Form 18-E) at the end of the year </td>
                  <form name="form11" id="form11" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price11" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price11" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price11" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price11" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price11" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 12. Showing quality participation in the deliberation meetings every grading period(3) </td>
                  <form name="form12" id="form12" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price12" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price12" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price12" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price12" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price12" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td>  13. Performing well during Parent-Teacher Conferences (3) </td>
                    <form name="form13" id="form13" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price13" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price13" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price13" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price13" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price13" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 14. Supervising the students during flag ceremonies, programs, field trips, and other <br> similar activities </td>
                  <form name="form14" id="form14" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price14" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price14" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price14" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price14" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price14" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 15. Monitoring and following up the release/retrieval of communications to parents </td>
                  <form name="form15" id="form15" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price15" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price15" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price15" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price15" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price15" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 16. Monitoring/Recording habitual minor offenses and reporting the same to the POD </td>
                  <form name="form16" id="form16" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price16" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price16" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price16" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price16" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price16" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>17. Making referrals to the Guidance Conselors/Prefect of Discipline </td>
                  <form name="form17" id="form17" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price17" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price17" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price17" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price17" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price17" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr> 
                  <tr>
                        <td>18. Reporting damages and repair needs in the classroom </td>

                  <form name="form18" id="form18" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price18" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price18" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price18" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price18" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price18" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>19. Creating and implementing a system of maintaining order/cleanliness in the room (5) </td>
                   <form name="form19" id="form19" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price19" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price19" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price19" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price19" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price19" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>20. Coordinating with subject teachres on the schedules of long tests, projects, etc. (5) </td>
                      <form name="form20" id="form20" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price20" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price20" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price20" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price20" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price20" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>21. Conducting daily routine checks on haircut, uniform, and ID (5) </td>
                      <form name="form21" id="form21" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price21" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price21" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price21" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price21" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price21" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>22. Conducting daily routine checks on attendance/submission of reports related thereto(3) </td>
                      <form name="form22" id="form22" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price22" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price22" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price22" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price22" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price22" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>23. Guiding/Inspiring the advisory class in relation to environmental thrust </td>
                      <form name="form23" id="form23" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price23" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price23" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price23" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price23" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price23" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>24. Encouraging by word and example the living out of the LBAS core values.</td>
                      <form name="form24" id="form24" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price24" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price24" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price24" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price24" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price24" onclick="DisplayPrice(this.value);"> 5<br></td>
                    </form>
                  </tr>
            </tbody>
        </table>

        <br><br>
            <center>
                <form action="/html/tags/html_form_tag_action.cfm" method="post">
                Comments:<br />
                <textarea name="comments" id="comments">
                
                </textarea><br />
              
                </form>
            </center>

        <br><br>
        <center>
         Rating: <input type="text" name="totalSum" id="totalSum" value="" size="24" readonly="readonly">
         Equivalent: <input type="text" name="equivalent" id="equivalent" value=""  readonly="readonly">
        </center>
        <br>

            <input type="submit" value="submit">
            
    
=======
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
>>>>>>> 6af12ab4f041f2ffb31b07eb44da23a13a3edd9b
</body>
</html>
