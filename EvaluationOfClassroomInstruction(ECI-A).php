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



                <!--Javascript code to calculate result of radio buttons for evaluation form result-->
    <script type="text/javascript">
	
	function target_popup(form) {
			window.open('', 'formpopup', 'width=200,height=200,resizeable,scrollbars');
			form.target = 'formpopup';
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
	
	<form action='SubmitECIAForm.php' method='POST' onsubmit="target_popup(this)>
        <h5>Name of Teacher:</h5>
        <input type="text" placeholder="Name of Teacher">
        <h5>Level/Section:</h5>
        <input type="text" placeholder="(Grade,Section)"> <br>
        <h5>Subject of Instruction:</h5>
        <input type="text" placeholder="Subject of Instruction">

        <h5>Type of Observation:</h5>
        <br>

        
        <input type="checkbox" name="clinicalVisit">Clinical Visit<br>
        <input type="checkbox" name="vehicle">Formal Visit
       

       
        <select name="typeOfObservation">
        <option>Announced</option>
        <option>Unannounced</option>

        </select>
      

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

                        <td> <h4>A. TEACHER </h4> <br>


                            1. Articulation (x2) </td>
                   
                    <td><input id="rdo_1" type="radio" value="1" name="1" > 1&nbsp</td>
                        <td><input id="rdo_2" type="radio" value="2" name="1" > 2&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_3" type="radio" value="3" name="1" > 3&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_4" type="radio" value="4" name="1" > 4&nbsp&nbsp&nbsp&nbsp</td>    
                        <td><input id="rdo_5" type="radio" value="5" name="1" > 5&nbsp&nbsp&nbsp&nbsp</td>
                  
                  </tr>
                  <tr>
                        <td> 2. Modulation of Voice (x2) </td>
                   
                        <td><input id="rdo_1" type="radio" value="1" name="2" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="2" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="2" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="2" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="2" > 5<br></td>
                   
                  </tr>
                  <tr>
                        <td> 3. Enthsiasm </td>
                   
                        <td><input id="rdo_1" type="radio" value="1" name="3" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="3" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="3" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="3" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="3" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 4. Vitality </td>
                 
                        <td><input id="rdo_1" type="radio" value="1" name="4" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="4" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="4" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="4" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="4" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 5. Poise </td>
                 
                        <td><input id="rdo_1" type="radio" value="1" name="5" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="5" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="5" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="5" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="5" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 6. Good grooming </td>
                 
                        <td><input id="rdo_1" type="radio" value="1" name="6" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="6" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="6" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="6" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="6" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 7. Punctuality </td>
                 
                        <td><input id="rdo_1" type="radio" value="1" name="7" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="7" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="7" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="7" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="7" > 5<br></td>
                  
                  </tr>
                  <tr>

                        <td><br> <h4>B. OBJECTIVES: Were they: </h4> <br>

                         1. Known by the students? </td>
                 
                        <td><input id="rdo_1" type="radio" value="1" name="8" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="8" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="8" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="8" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="8" > 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 2. Understood by students? </td>
                 
                        <td><input id="rdo_1" type="radio" value="1" name="9" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="9" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="9" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="9" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="9" > 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 3. Clear? </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="10" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="10" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="10" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="10" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="10" > 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 4. Specific? (x2) </td>
                 
                        <td><input id="rdo_1" type="radio" value="1" name="11" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="11" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="11" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="11" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="11" > 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 5. Comprehensive? [Covering all important phases of content] (x3) </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="12" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="12" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="12" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="12" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="12" > 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 6. Attained (x5) </td>
                    
                        <td><input id="rdo_1" type="radio" value="1" name="13" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="13" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="13" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="13" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="13" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 7. Encouraging students to live out the LBASS core values, with emphasis on stewardship? (x5) </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="14" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="14" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="14" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="14" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="14" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> <br> <h4>C. CONTENT: Was it:</h4> <br>

                         1. Adequate to achieve objectives? (x5)</td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="15" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="15" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="15" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="15" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="15" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 2. Related to daily life? </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="16" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="16" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="16" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="16" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="16" > 5<br></td>
                  
                  </tr>
                  <tr>
                        <td>3. Related to human or LBASS core values? </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="17" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="17" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="17" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="17" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="17" > 5<br></td>
                  
                  </tr> 
                  <tr>
                        <td>4. Related to current events? </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="18" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="18" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="18" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="18" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="18" > 5<br></td>
                  
                  </tr>

                     <tr>
                        <td>5. Suited to the students' needs (x2) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="19" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="19" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="19" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="19" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="19" > 5<br></td>
                  
                  </tr>

                      <tr>
                        <td>6. Suited to the students' level of understanding? (x2) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="20" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="20" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="20" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="20" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="20" > 5<br></td>
                  
                  </tr>


                    <tr>
                        <td> <br><h4> D. TEACHING PROCEDURE </h4> <br>
                           1. Approach is student-centered (x4) </td>

                 
                  
                        <td><input id="rdo_1" type="radio" value="1" name="21" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="21" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="21" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="21" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="21" > 5<br></td>
                  
              </tr>

               <tr>
                        <td> 2. Correlation of topic to the broader aspect of the lesson (x3) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="22" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="22" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="22" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="22" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="22" > 5<br></td>
                  
              </tr>

               <tr>
                        <td> 3. Evidence of careful planning (x2) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="23" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="23" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="23" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="23" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="23" > 5<br></td>
                  
              </tr>

                <tr>
                        <td> 4. Creativity (x2) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="24" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="24" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="24" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="24" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="24" > 5<br></td>
                  
              </tr>

                 <tr>
                        <td> 5. Mastery of the subject matter (x5) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="25" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="25" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="25" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="25" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="25" > 5<br></td>
                  
              </tr>

               <tr>
                        <td> 6. Evidence of effor at integration (subject and theme) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="26" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="26" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="26" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="26" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="26" > 5<br></td>
                  
              </tr>

                <tr>
                        <td> 7. Technique of questioning (x2) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="27" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="27" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="27" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="27" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="27" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 8. Handling of students' reponses (x2) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="28" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="28" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="28" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="28" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="28" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 9. Flexibility in teaching procedures (x5) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="29" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="29" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="29" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="29" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="29" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> <br> <h4> E. Medium of Instruction</h4> <br>

                         1. Ability to make information comprehensible to the students (x5) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="30" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="30" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="30" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="30" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="30" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 2. Mastery of the Language (x4) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="31" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="31" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="31" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="31" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="31" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> <br> <h4>F. INSTRUCTIONAL TOOLS</h4> <br>

                          1. Adequacy in arousing interest (x5) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="32" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="32" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="32" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="32" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="32" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 2. Effective utilization (x4) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="33" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="33" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="33" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="33" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="33" > 5<br></td>
                
              </tr>

              <tr>
                        <td> 3. Variety (x4) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="34" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="34" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="34" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="34" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="34" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> <br> <h4>G. STUDENTS</h4> <br>

                            1. Activity </td>

                 
                        <td><input id="rdo_1" type="radio" value="1" name="35" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="35" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="35" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="35" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="35" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 2. Participation </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="36" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="36" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="36" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="36" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="36" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 3. Cooperation </td>

                 
                        <td><input id="rdo_1" type="radio" value="1" name="37" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="37" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="37" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="37" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="37" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 4. Evidence of Critical Thinking (x4) </td>

                 
                        <td><input id="rdo_1" type="radio" value="1" name="38" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="38" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="38" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="38" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="38" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 5. Evidence of learning (x5) </td>

                 
                        <td><input id="rdo_1" type="radio" value="1" name="39" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="39" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="39" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="39" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="39" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> <br> <h4>H. CLASSROOM MANAGEMENT </h4> <br>

                         1. Human atmosphere [congenial and conducive to learning] </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="40" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="40" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="40" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="40" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="40" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 2. Freedom from disturbance </td>

                
                        <td><input id="rdo_1" type="radio" value="1" name="41" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="41" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="41" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="41" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="41" > 5<br></td>
                  
              </tr>

              <tr>
                        <td> 3. Order and cleanliness (x2) </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="42" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="42" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="42" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="42" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="42" > 5<br></td>
                
                 
            </tbody>
        </table>

        <br><br>
            <center>
               
                Comments and Other observations:<br />

                
                </textarea><br />
              
               
            </center>

        <br><br>
        <center>
        
        </center>
        <br>

           <input type='submit' value='Submit' class='Log' name='eval'>
		   </form>
    
</body>
</html>
