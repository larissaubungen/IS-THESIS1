<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Evaluation for School Nurse (Form C)</title>
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
   


            var sum=(parseInt(val1) + parseInt(val2) + parseInt(val3) + parseInt(val4)
                    + parseInt(val5) + parseInt(val6) + parseInt(val7) + parseInt(val8)
                    + parseInt(val9) + parseInt(val10)) / 10 ;
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
    <h4>Evaluation for School Nurse  (Form C)</h4>
    <h4>(For use by Students)</h4>

    <br>
    
<h5>Name of School Nurse: </h5>
        <input type="text" placeholder="Name of School Nurse ">
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

        <br><br>
     

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
                        <td> 1. Has general program that responds to the health needs of the students </td>
                          
                    <form name="form1" id="form1" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>

                  <tr>
                        <td> 2. Effectively assists students when they go to the clinic </td>
                    <form name="form2" id="form2" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price2" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price2" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price2" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price2" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price2" onclick="DisplayPrice(this.value);"> 5<br></td>
                   </form>
                  </tr>
                  <tr>
                        <td> 3. Enjoys the trust and confidence of the students </td>

                    <form name="form3" id="form3" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price3" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price3" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price3" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price3" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price3" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>

                  </tr>
                  <tr>
                        <td> 4. Is approachable and welcoming </td>
                  <form name="form4" id="form4" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price4" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price4" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price4" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price4" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price4" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr> <td> 5. Attends to all students fairly and equally with no favoritism </td>
                  <form name="form5" id="form5" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price5" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price5" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price5" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price5" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price5" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 6. Attends to students with promptness and diligence </td>
                  <form name="form6" id="form6" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price6" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price6" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price6" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price6" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price6" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 7. Is caring, patient, and understanding to students who are sick </td>
                  <form name="form7" id="form7" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price7" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price7" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price7" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price7" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price7" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                  <tr>
                        <td> 8. Has a well-organized system in place </td>
                  <form name="form8" id="form8" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price8" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price8" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price8" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price8" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price8" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 9. Effectively coordinates/facilitates concerns of students, parents and teachers when needed </td>


                      
                  <form name="form9" id="form9" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price9" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price9" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price9" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price9" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price9" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
                    <tr>
                        <td> 10. Maintains a clean and orderly clinic </td>

                  <form name="form10" id="form10" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price10" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price10" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price10" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price10" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price10" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>

                  <tr>
                        <td> 11. Maintains a clean and orderly clinic </td>

                  <form name="form11" id="form11" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price11" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price11" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price11" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price11" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price11" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>


                  <tr>
                        <td> 12. Has clear rules and regulations and implements these fairly </td>

                  <form name="form12" id="form12" runat="server">
                        <td><input id="rdo_1" type="radio" value="1" name="price12" onclick="DisplayPrice(this.value);"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="price12" onclick="DisplayPrice(this.value);"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="price12" onclick="DisplayPrice(this.value);"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="price12" onclick="DisplayPrice(this.value);"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="price12" onclick="DisplayPrice(this.value);"> 5<br></td>
                  </form>
                  </tr>
        

                 

                </tbody>
        </table>
          <br><br>
            <center>
                <form action="/html/tags/html_form_tag_action.cfm" method="post">
                Comments and Suggestions: <br />
                <textarea name="comments" id="comments">
                
                </textarea><br />
              
                </form>
            </center>

        <br><br>
        <center>
         Rating: <input type="text" name="totalSum" id="totalSum" value="" size="12" readonly="readonly">
         Equivalent: <input type="text" name="equivalent" id="equivalent" value=""  readonly="readonly">
        </center>
        <br>

            <input type="submit" value="submit">
            
   
</body>
</html>
