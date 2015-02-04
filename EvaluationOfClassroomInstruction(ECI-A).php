<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Evaluation of Classroom Instruction</title>
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

            var val25 = 0;
            for( i = 0; i < document.form25.price25.length; i++ ){
                if( document.form25.price25[i].checked == true ){
                    val25 = document.form25.price25[i].value;
                }
            }

            var val26 = 0;
            for( i = 0; i < document.form26.price26.length; i++ ){
                if( document.form26.price26[i].checked == true ){
                    val26 = document.form26.price26[i].value;
                }
            }

            var val27 = 0;
            for( i = 0; i < document.form27.price27.length; i++ ){
                if( document.form27.price27[i].checked == true ){
                    val27 = document.form27.price27[i].value;
                }
            }

            var val28 = 0;
            for( i = 0; i < document.form28.price28.length; i++ ){
                if( document.form28.price28[i].checked == true ){
                    val28 = document.form28.price28[i].value;
                }
            }

            var val29 = 0;
            for( i = 0; i < document.form29.price29.length; i++ ){
                if( document.form29.price29[i].checked == true ){
                    val29 = document.form29.price29[i].value;
                }
            }

            var val30 = 0;
            for( i = 0; i < document.form30.price30.length; i++ ){
                if( document.form30.price30[i].checked == true ){
                    val30 = document.form30.price30[i].value;
                }
            }

            var val31 = 0;
            for( i = 0; i < document.form31.price31.length; i++ ){
                if( document.form31.price31[i].checked == true ){
                    val31 = document.form31.price31[i].value;
                }
            }

            var val32 = 0;
            for( i = 0; i < document.form32.price32.length; i++ ){
                if( document.form32.price32[i].checked == true ){
                    val32 = document.form32.price32[i].value;
                }
            }

            var val33 = 0;
            for( i = 0; i < document.form33.price33.length; i++ ){
                if( document.form33.price33[i].checked == true ){
                    val33 = document.form33.price33[i].value;
                }
            }

            var val34 = 0;
            for( i = 0; i < document.form34.price34.length; i++ ){
                if( document.form34.price34[i].checked == true ){
                    val34 = document.form34.price34[i].value;
                }
            }

            var val35 = 0;
            for( i = 0; i < document.form35.price35.length; i++ ){
                if( document.form35.price35[i].checked == true ){
                    val35 = document.form35.price35[i].value;
                }
            }

            var val36 = 0;
            for( i = 0; i < document.form36.price36.length; i++ ){
                if( document.form36.price36[i].checked == true ){
                    val36 = document.form36.price36[i].value;
                }
            }

            var val37 = 0;
            for( i = 0; i < document.form37.price37.length; i++ ){
                if( document.form37.price37[i].checked == true ){
                    val37 = document.form37.price37[i].value;
                }
            }

            var val38 = 0;
            for( i = 0; i < document.form38.price38.length; i++ ){
                if( document.form38.price38[i].checked == true ){
                    val38 = document.form38.price38[i].value;
                }
            }

            var val39 = 0;
            for( i = 0; i < document.form39.price39.length; i++ ){
                if( document.form39.price39[i].checked == true ){
                    val39 = document.form39.price39[i].value;
                }
            }

            var val40 = 0;
            for( i = 0; i < document.form40.price40.length; i++ ){
                if( document.form40.price40[i].checked == true ){
                    val40 = document.form40.price40[i].value;
                }
            }

            var val41 = 0;
            for( i = 0; i < document.form41.price41.length; i++ ){
                if( document.form41.price41[i].checked == true ){
                    val41 = document.form41.price41[i].value;
                }
            }

             var val42 = 0;
            for( i = 0; i < document.form42.price42.length; i++ ){
                if( document.form42.price42[i].checked == true ){
                    val42 = document.form42.price42[i].value;
                }
            }


            var sum= ((parseInt(val1) * 2) + (parseInt(val2) * 2) + parseInt(val3) + parseInt(val4)
                    + parseInt(val5) + parseInt(val6) + parseInt(val7) + parseInt(val8)
                    + parseInt(val9) + parseInt(val10) + + (parseInt(val11) * 2) + (parseInt(val12) * 3)
                    + (parseInt(val13) * 5) + (parseInt(val14) * 5) + (parseInt(val15) * 5) + parseInt(val16)
                    + (parseInt(val17) * 3) + parseInt(val18) + (parseInt(val19) * 2) + (parseInt(val20) * 2)
                    + (parseInt(val21) * 4) + (parseInt(val22) * 3) + (parseInt(val23) * 2) + (parseInt(val24) * 2)
                    + (parseInt(val25) * 5) + parseInt(val26) + (parseInt(val27) * 2) + (parseInt(val28) * 2) 
                    + (parseInt(val29) * 5) + (parseInt(val30) * 5) + (parseInt(val31) * 4) + (parseInt(val32) * 5)
                    + (parseInt(val33) * 4) + (parseInt(val34) * 4) + parseInt(val35) + parseInt(val36)
                    + parseInt(val37) + (parseInt(val38) * 4) + (parseInt(val39) * 2) + parseInt(val40)
                    + parseInt(val41) + (parseInt(val42) * 2)) / 102 ;
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
            <li class="active"><a href="#"><i class="icon-home"></i><span>Evaluation Form</span> </a> </li>
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->
    <div class="well" align="center">
    <h4>Evaluation of Advisory Work(EAHW-B)</h4>

        <h5>Name of Teacher:</h5>
        <input type="text" placeholder="Name of Teacher">
        <h5>Level/Section:</h5>
        <input type="text" placeholder="(Grade,Section)"> <br>
        <h5>Subject of Instruction:</h5>
        <input type="text" placeholder="Subject of Instruction">

        <h5>Type of Observation:</h5>
        <br>

        <form action="">
        <input type="checkbox" name="clinicalVisit">Clinical Visit<br>
        <input type="checkbox" name="vehicle">Formal Visit
        </form>

        <form action="">
        <select name="typeOfObservation">
        <option>Announced</option>
        <option>Unannounced</option>

        </select>
        </form>

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

                        <td> <h4>A. TEACHER </h4> <br>


                            1. Articulation (x2) </td>
                    <form name="form1" id="form1" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 2. Modulation of Voice (x2) </td>
                    <form name="form2" id="form2" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price2" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price2" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price2" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price2" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price2" onclick="DisplayPrice(this.value);"> 5<br></td>
                   </form>
                  </tr>
                  <tr>
                        <td> 3. Enthsiasm </td>
                    <form name="form3" id="form3" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price3" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price3" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price3" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price3" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price3" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 4. Vitality </td>
                  <form name="form4" id="form4" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price4" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price4" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price4" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price4" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price4" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 5. Poise </td>
                  <form name="form5" id="form5" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price5" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price5" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price5" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price5" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price5" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 6. Good grooming </td>
                  <form name="form6" id="form6" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price6" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price6" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price6" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price6" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price6" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 7. Punctuality </td>
                  <form name="form7" id="form7" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price7" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price7" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price7" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price7" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price7" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>

                        <td><br> <h4>B. OBJECTIVES: Were they: </h4> <br>

                         1. Known by the students? </td>
                  <form name="form8" id="form8" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price8" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price8" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price8" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price8" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price8" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>>
                  </tr>
                    <tr>
                        <td> 2. Understood by students? </td>
                  <form name="form9" id="form9" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price9" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price9" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price9" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price9" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price9" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 3. Clear? </td>
                   <form name="form10" id="form10" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price10" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price10" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price10" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price10" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price10" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 4. Specific? (x2) </td>
                  <form name="form11" id="form11" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price11" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price11" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price11" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price11" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price11" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 5. Comprehensive? [Covering all important phases of content] (x3) </td>
                  <form name="form12" id="form12" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price12" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price12" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price12" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price12" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price12" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 6. Attained (x5) </td>
                    <form name="form13" id="form13" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price13" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price13" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price13" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price13" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price13" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 7. Encouraging students to live out the LBASS core values, with emphasis on stewardship? (x5) </td>
                  <form name="form14" id="form14" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price14" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price14" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price14" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price14" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price14" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> <br> <h4>C. CONTENT: Was it:</h4> <br>

                         1. Adequate to achieve objectives? (x5)</td>
                  <form name="form15" id="form15" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price15" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price15" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price15" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price15" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price15" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 2. Related to daily life? </td>
                  <form name="form16" id="form16" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price16" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price16" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price16" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price16" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price16" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td>3. Related to human or LBASS core values? </td>
                  <form name="form17" id="form17" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price17" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price17" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price17" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price17" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price17" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr> 
                  <tr>
                        <td>4. Related to current events? </td>

                  <form name="form18" id="form18" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price18" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price18" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price18" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price18" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price18" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>

                     <tr>
                        <td>5. Suited to the students' needs (x2) </td>

                  <form name="form19" id="form19" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price19" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price19" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price19" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price19" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price19" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>

                      <tr>
                        <td>6. Suited to the students' level of understanding? (x2) </td>

                  <form name="form20" id="form20" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price20" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price20" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price20" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price20" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price20" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>


                    <tr>
                        <td> <br><h4> D. TEACHING PROCEDURE </h4> <br>
                           1. Approach is student-centered (x4) </td>

                 
                  <form name="form21" id="form21" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price21" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price21" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price21" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price21" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price21" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

               <tr>
                        <td> 2. Correlation of topic to the broader aspect of the lesson (x3) </td>

                  <form name="form22" id="form22" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price22" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price22" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price22" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price22" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price22" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

               <tr>
                        <td> 3. Evidence of careful planning (x2) </td>

                  <form name="form23" id="form23" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price23" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price23" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price23" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price23" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price23" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

                <tr>
                        <td> 4. Creativity (x2) </td>

                  <form name="form24" id="form24" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price24" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price24" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price24" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price24" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price24" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

                 <tr>
                        <td> 5. Mastery of the subject matter (x5) </td>

                  <form name="form25" id="form25" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price25" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price25" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price25" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price25" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price25" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

               <tr>
                        <td> 6. Evidence of effor at integration (subject and theme) </td>

                  <form name="form26" id="form26" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price26" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price26" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price26" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price26" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price26" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

                <tr>
                        <td> 7. Technique of questioning (x2) </td>

                  <form name="form27" id="form27" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price27" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price27" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price27" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price27" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price27" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 8. Handling of students' reponses (x2) </td>

                  <form name="form28" id="form28" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price28" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price28" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price28" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price28" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price28" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 9. Flexibility in teaching procedures (x5) </td>

                  <form name="form29" id="form29" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price29" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price29" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price29" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price29" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price29" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> <br> <h4> E. Medium of Instruction</h4> <br>

                         1. Ability to make information comprehensible to the students (x5) </td>

                  <form name="form30" id="form30" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price30" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price30" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price30" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price30" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price30" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 2. Mastery of the Language (x4) </td>

                  <form name="form31" id="form31" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price31" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price31" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price31" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price31" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price31" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> <br> <h4>F. INSTRUCTIONAL TOOLS</h4> <br>

                          1. Adequacy in arousing interest (x5) </td>

                  <form name="form32" id="form32" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price32" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price32" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price32" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price32" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price32" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 2. Effective utilization (x4) </td>

                  <form name="form33" id="form33" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price33" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price33" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price33" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price33" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price33" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 3. Variety (x4) </td>

                  <form name="form34" id="form34" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price34" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price34" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price34" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price34" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price34" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> <br> <h4>G. STUDENTS</h4> <br>

                            1. Activity </td>

                  <form name="form35" id="form35" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price35" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price35" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price35" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price35" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price35" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 2. Participation </td>

                  <form name="form36" id="form36" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price36" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price36" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price36" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price36" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price36" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 3. Cooperation </td>

                  <form name="form37" id="form37" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price37" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price37" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price37" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price37" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price37" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 4. Evidence of Critical Thinking (x4) </td>

                  <form name="form38" id="form38" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price38" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price38" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price38" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price38" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price38" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 5. Evidence of learning (x5) </td>

                  <form name="form39" id="form39" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price39" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price39" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price39" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price39" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price39" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> <br> <h4>H. CLASSROOM MANAGEMENT </h4> <br>

                         1. Human atmosphere [congenial and conducive to learning] </td>

                  <form name="form40" id="form40" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price40" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price40" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price40" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price40" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price40" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 2. Freedom from disturbance </td>

                  <form name="form41" id="form41" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price41" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price41" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price41" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price41" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price41" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>

              <tr>
                        <td> 3. Order and cleanliness (x2) </td>

                  <form name="form42" id="form42" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price42" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price42" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price42" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price42" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price42" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
              </tr>
                 
            </tbody>
        </table>

        <br><br>
            <center>
                <form action="/html/tags/html_form_tag_action.cfm" method="post">
                Comments and Other observations:<br />
                <textarea name="comments" id="comments">
                
                </textarea><br />
              
                </form>
            </center>

        <br><br>
        <center>
         Rating: <input type="text" name="totalSum" id="totalSum" value="" size="42" readonly="readonly">
         Equivalent: <input type="text" name="equivalent" id="equivalent" value=""  readonly="readonly">
        </center>
        <br>

            <input type="submit" value="submit">
            
    
</body>
</html>
