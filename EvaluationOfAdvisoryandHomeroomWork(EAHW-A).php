<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } ?>  


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
		
		<script type="text/javascript">
	  
	  function target_popup(form) {
			window.open('', 'formpopup', 'width=200,height=200,resizeable,scrollbars');
			form.target = 'formpopup';
		}
	
	
	  </script>
		
		
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
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
                
              echo '<li><a href="javascript:;">Profile</a></li>
              <li><a href="http://localhost/IS-THESIS1/logout.php">Logout</a></li>';

              }?>

              
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
    <h4>Evaluation of Advisory Work and Homeroom Work(EAHW-A)</h4>
	     <h5>Name of Teacher:</h5>
        <br>
        <form action='SubmitEAHWAForm.php' method='POST'onsubmit="target_popup(this)">
      
    <select id="idNo" name="idNo">
        <?php

         mysql_connect('localhost', 'root', '')
              or die(mysql_error());  
              mysql_select_db('lbas_hr') 
              or die(mysql_error());

          $result = mysql_query("
            SELECT work.ID_No, work.E_Position1, work.E_Position2
            FROM work 
            WHERE work.E_Position1='Teacher' OR work.E_Position2='Teacher'

            ");     

          while ($row = mysql_fetch_array($result)) {
             $teachers = $row['ID_No'];
            echo '<option>' . $teachers. '</option>';
          }
        
        ?>

      </select>
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
                        <td><input type="radio" name="1" value="1"> 1&nbsp</td>
                        <td><input type="radio" name="1" value="2"> 2&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="radio" name="1" value="3"> 3&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="radio" name="1" value="4"> 4&nbsp&nbsp&nbsp&nbsp</td>    
                        <td><input type="radio" name="1" value="5"> 5&nbsp&nbsp&nbsp&nbsp</td>
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
                        <td> 10. Checking students' names in advisory class relative to Forms 1, 137, and 138 </td>
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
        <br>

         <br><br>
            <center>
               
             <center>
                
                Comments:<br />
                <textarea name="comments" id="comments">
                
                </textarea><br />
              
                
            </center>
              
               
            </center>

        <br><br>
        <center>
        
        </center>
        <br>

           <input type='submit' value='Submit' class='Log' name='eval'>
          

	</form>
</body>
</html>
