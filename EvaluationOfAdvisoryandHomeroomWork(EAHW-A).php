<!DOCTYPE html>
<html lang="en">
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
    <h4>Evaluation of Advisory Work and Homeroom Work(EAHW-A)</h4>
    <form>
        <h5>Name of Teacher:</h5>
        <input type="text" placeholder="Name of Teacher">
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
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 2. Creating a physical classroom setting conducive to a homeroom atmosphere </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 3. Developing team spirit and camaraderie in the advisory class </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 4. Holding regular homeroom meetings </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 5. Sensing/Detecting academic and other problems in students/class </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 6. Holding friendly individual/group consultations/counselling with advisory students </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 7. Maintaining good contact with parents; doing home visits when needed </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 8. Exhibiting discretion, tact, and confidentiality in dealing with students/ parents/guardians </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 9. Enforcing Student Handbook provisions in general </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 10. Checking students' names in advisory class relatve to Forms 1, 137, and 138 </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 11. Submitting promotion report (Form 18-E) at the end of the year </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td> 12. Showing quality participation in the deliberation meetings every grading period(3) </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                    <tr>
                        <td>  13. Performing well during Parent-Teacher Conferences (3) </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 14. Supervising the students during flag ceremonies, programs, field trips, and other similar activities </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 15. Monitoring and following up the release/retrieval of communications to parents </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td> 16. Monitoring/Recording habitual minor offenses and reporting the same to the POD </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>17. Making referrals to the Guidance Conselors/Prefect of Discipline </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr> 
                  <tr>
                        <td>18. Reporting damages and repair needs in the classroom </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>19. Creating and implementing a system of maintaining order/cleanliness in the room (5) </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>20. Coordinating with subject teachres on the schedules of long tests, projects, etc. (5) </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>21. Conducting daily routine checks on haircut, uniform, and ID (5) </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>22. Conducting daily routine checks on attendance/submission of reports related thereto(3) </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>23. Guiding/Inspiring the advisory class in relation to environmental thrust </td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td>
                  </tr>
                  <tr>
                        <td>24. Encouraging by word and example the living out of the LBAS core values.</td>
                        <td><input type="radio" name="" value="1"> 1<br></td>
                        <td><input type="radio" name="" value="2"> 2<br></td>
                        <td><input type="radio" name="" value="3"> 3<br></td>
                        <td><input type="radio" name="" value="4"> 4<br></td>    
                        <td><input type="radio" name="" value="5"> 5<br></td><br>
                  </tr>
            </tbody>
        </table>
            <input type="submit" value="submit">
    </form>
</body>
</html>
