<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
<<<<<<< HEAD
  } ?>  
=======
  } 

  ?>  

>>>>>>> origin/master


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>General Performance Evaluation (For Teachers)</title>
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
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">LBASS Human Resource Information System </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
      
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
<<<<<<< HEAD
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
=======
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
>>>>>>> origin/master
            <?php
              mysql_connect('localhost', 'root', '')
              or die(mysql_error());  
              mysql_select_db('lbas_hr') 
              or die(mysql_error());

              $user=$_SESSION['ID_No'];

              $retrieveName = "SELECT `L_Name`, `F_Name`  
                               FROM `person` 
                               WHERE `ID_No` = '".$user."'";
              $check = mysql_query($retrieveName);
              while ($row = mysql_fetch_array($check)) {
                $lastName = $row["L_Name"];
                $firstName = $row["F_Name"];
                echo "<i class='icon-user'> $lastName , $firstName </i>";
                echo "<b class='caret'></b></a><ul class='dropdown-menu'/>";
<<<<<<< HEAD
                
              echo '<li><a href="javascript:;">Profile</a></li>
              <li><a href="http://localhost/IS-THESIS1/logout.php">Logout</a></li>';

              }?>

              
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
=======
              }?>
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
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
>>>>>>> origin/master
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

        <li class="active"><a href="EmployeeProfileHome.php"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
        <li><a href="EmployeeProfilePage.php"><i class="icon-dashboard"></i><span>Profile</span> </a> </li>
        <li><a href=""><i class="icon-list-alt"></i><span>Reports and Records</span> </a> </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
         <ul class="dropdown-menu">
            <li><a href="">File for Leave</a></li>
            <li><a href="">File for Transfer</a></li>
            <li><a href="">File for Resignation</a></li>
         </ul> 
      </li>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

    <div class="well" align="center">
    <h4>General Perforamnce Evaluation (For Teachers)</h4>
<<<<<<< HEAD

<?php
=======
    <br>

  <?php
>>>>>>> origin/master

        $idNo = $_POST['id'];
        mysql_connect("localhost", "root", "")
        or die(mysql_error());
        mysql_select_db("lbas_hr") 
        or die(mysql_error());


            $result = mysql_query("
<<<<<<< HEAD
            SELECT DISTINCT person.F_Name, person.L_Name, person.M_Name, 
                            work.ID_No, work.Level, work.Grade 
            
            FROM            person, work 
            WHERE           person.ID_No = '$idNo' AND 
                            person.CurrentWork_ID = work.Work_ID
            "); 
  


     while($row = mysql_fetch_array($result)){
        
        echo '<h5>Name of Teacher: </h5>';
        echo '<form action="SubmitEvalGPETeachers.php" method="POST">';
          echo '<input type="text" placeholder="Name of Teacher" value="'. $row['L_Name'] . "," . " " . $row['F_Name'] .  '" readonly>';
          echo "<input type='hidden' name='id' value='$idNo'/>";
          echo '<h5>Level/Section:</h5>';
        echo '<input type="text" placeholder="Level/Section:" value="'.$row['Level']. '/' .$row['Grade']  .'" readonly> <br>';
        
      }
   ?>    
   



=======
            SELECT *
            FROM person 
            WHERE person.ID_No = '$idNo' 
            "); 


          while($row = mysql_fetch_array($result)){
          $firstName = $row["F_Name"];
          $lastName = $row["L_Name"];
          $middleName = $row["M_Name"];
          $subjectType = $row['Subject_Type'];

        echo '<h5>Name of Teacher: </h5>';
          echo '<form action="SubmitEvalGPETeachers.php" method="POST" onsubmit="target_popup(this)">';
          echo '<input type="text" placeholder="Name of Teacher" value="'. $row['L_Name'] . "," . " " . $row['F_Name'] .  '" readonly>';
          echo "<input type='hidden' name='id' value='$idNo'/>";
        echo '<h5>Level/Section: (Subject muna ung lumalabas temporarily)</h5>';
        
        echo '<input type="text" placeholder="Level/Section" value="' . $row['Subject_Type'] . '" readonly> <br>';
        
        }



  ?>
>>>>>>> origin/master
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

        <br><br>
        <center><h4>Note: Coordinators are responsible for the GPE. However, for higher validity, they may seek inputs from other personnel, as needed.</h4></center>

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

                    <!--Radio buttons are needed to be aligned with "personal" and "professional"-->
                        <td> 1. Desire for growth and developement  

                        <ul>
                          <li>personal</li>
                          <li>professional</li>
                        </ul>

                        </td>
                  
						<td><input id="rdo_1" type="radio" value="1" name="" > 1&nbsp</td>
                        <td><input id="rdo_2" type="radio" value="2" name="1" > 2&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_3" type="radio" value="3" name="1" > 3&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_4" type="radio" value="4" name="1" > 4&nbsp&nbsp&nbsp&nbsp</td>    
                        <td><input id="rdo_5" type="radio" value="5" name="1" > 5&nbsp&nbsp&nbsp&nbsp</td>
                  
                  </tr>
               

               
                  <tr>
                          
                            <td> 2. Question 2 </td> 

                  
                        <td><input id="rdo_1" type="radio" value="1" name="2" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="2" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="2" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="2" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="2" > 5<br></td>
                  
                  </tr>
              

          
                  <tr>
                        <td> 3. Acceptance of Tasks
                        <ul>
                          <li>substitution</li>
                          <li>co-curricular activities</li>
                          <li>other</li>
                        </ul>

                        </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="3" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="3" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="3" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="3" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="3" > 5<br></td>
                  
                  </tr>
      
                 <tr>
                        <td> 4. Discretion and maintenance of the confidentiality required by the job</td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="4" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="4" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="4" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="4" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="4" > 5<br></td>
                  
                  </tr>

                  <tr>
                        <td>  5. Efforts to live out the LBASS core values and serve as role models by the job</td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="5" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="5" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="5" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="5" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="5" > 5<br></td>
                  
                  </tr>

                   <tr>
                        <td> 6. Enforcement of cleanliness and upkeep of classroom </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="6" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="6" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="6" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="6" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="6" > 5<br></td>
                  
                  </tr>


                   <tr>
                        <td>  7. Punctuality in reporting to class without lingering in faculty room or any place else  </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="7" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="7" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="7" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="7" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="7" > 5<br></td>
                  
                  </tr>



                   <tr>
                        <td> 8. Enforcement on students of Student Handbook policies </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="8" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="8" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="8" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="8" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="8" > 5<br></td>
                  
                  </tr>



                   <tr>
                        <td> 9. Sensitivity, tact, and prudence


                        <ul>
                          <li>In dealing with students</li>
                          <li>In dealing with parents</li>
                        </ul>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="9" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="9" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="9" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="9" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="9" > 5<br></td>
                  
                  </tr>



                   <tr>
                        <td> 10. Pleasant disposition

                        <ul>
                          <li>In dealing with students</li>
                          <li>In dealing with parents</li>
                        </ul>


                         </td>


                  
                        <td><input id="rdo_1" type="radio" value="1" name="10" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="10" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="10" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="10" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="10" > 5<br></td>
                  
                  </tr>



                   <tr>
                       <td> 11. Maintenance of professional relatiobship

                        <ul>
                          <li>with superiors</li>
                          <li>with peers</li>
                        </ul>

                        </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="11" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="11" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="11" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="11" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="11" > 5<br></td>
                  
                  </tr>


                   <tr>
                        <td> 12. Wise and constructive use use

                        <ul>
                          <li>of time</li>
                          <li>of facilities and resources</li>
                        </ul>

                         </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="12" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="12" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="12" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="12" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="12" > 5<br></td>
                  
                  </tr>


                   <tr>
                        <td>  13. Keeping area in the faculty room clean and orderly </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="13" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="13" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="13" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="13" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="13" > 5<br></td>
                  
                  </tr>


                   <tr>
                        <td> 14. Compliance with uniform guidelines </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="14" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="14" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="14" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="14" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="14" > 5<br></td>
                  
                  </tr>


                   <tr>
                        <td> 15. Contribution to co-curricular activities </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="15" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="15" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="15" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="15" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="15" > 5<br></td>
                  
                  </tr>


                   <tr>
                        <td> 16. Voluntarism</td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="16" > 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="16" > 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="16" > 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="16" > 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="16" > 5<br></td>
                  
                  </tr>
                 
                </tbody>
        </table>

        <center>
                
                Comments:<br />
                <textarea name="comments" id="comments">
                
                </textarea><br />
              
                
            </center>

        <br><br>
        <center>
        </center>
        <br>

            <input type="submit" value="submit">
			</form>

    
</body>
</html>
