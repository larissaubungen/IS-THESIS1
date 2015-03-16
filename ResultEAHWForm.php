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

    <?php
  mysql_connect("localhost", "root", "")
      or die(mysql_error());
  
  mysql_select_db("lbas_hr") 
    or die(mysql_error());

    $result = mysql_query("
            SELECT  AVG(Ques_1),
                AVG(Ques_2),
                AVG(Ques_3),
                AVG(Ques_4),
                AVG(Ques_5),
                AVG(Ques_6),
                AVG(Ques_7),
                AVG(Ques_8),
                AVG(Ques_9),
                AVG(Ques_10),
                AVG(Ques_11),
                AVG(Ques_12),
                AVG(Ques_13),
                AVG(Ques_14),
                AVG(Ques_15),
                AVG(Ques_16),
                AVG(Ques_17),
                AVG(Ques_18),
                AVG(Ques_19),
                AVG(Ques_20),
                AVG(Ques_21),
                AVG(Ques_22),
                AVG(Ques_23),
                AVG(Ques_24),
                AVG(Result),
                Count(Result)
            FROM eval_eahw_a
            WHERE ID_No = ''  
            "); 
            
          while($row = mysql_fetch_array($result)){
          
          $ques_1 = ($row['AVG(Ques_1)']/5)* 100;
          $ques_2 = ($row['AVG(Ques_2)']/5)* 100;
          $ques_3 = ($row['AVG(Ques_3)']/5)* 100;
          $ques_4 = ($row['AVG(Ques_4)']/5)* 100;
          $ques_5 = ($row['AVG(Ques_5)']/5)* 100;
          $ques_6 = ($row['AVG(Ques_6)']/5)* 100;
          $ques_7 = ($row['AVG(Ques_7)']/5)* 100;
          $ques_8 = ($row['AVG(Ques_8)']/5)* 100;
          $ques_9 = ($row['AVG(Ques_9)']/5)* 100;
          $ques_10 = ($row['AVG(Ques_10)']/5)* 100;
          $ques_11 = ($row['AVG(Ques_11)']/5)* 100;
          $ques_12 = ($row['AVG(Ques_12)']/5)* 100;
          $ques_13 = ($row['AVG(Ques_13)']/5)* 100;
          $ques_14 = ($row['AVG(Ques_14)']/5)* 100;
          $ques_15 = ($row['AVG(Ques_15)']/5)* 100;
          $ques_16 = ($row['AVG(Ques_16)']/5)* 100;
          $ques_17 = ($row['AVG(Ques_17)']/5)* 100;
          $ques_18 = ($row['AVG(Ques_18)']/5)* 100;
          $ques_19 = ($row['AVG(Ques_19)']/5)* 100;
          $ques_20 = ($row['AVG(Ques_20)']/5)* 100;
          $ques_21 = ($row['AVG(Ques_21)']/5)* 100;
          $ques_22 = ($row['AVG(Ques_22)']/5)* 100;
          $ques_23 = ($row['AVG(Ques_23)']/5)* 100;
          $ques_24 = ($row['AVG(Ques_24)']/5)* 100;
          $ques_25 = ($row['AVG(Result)']/$row['Count(Result)'])* 100;




     

    echo '<div class="well" align="center">';
    echo '<h4>Evaluation of Advisory Work and Homeroom Work(EAHW-A)</h4>';
	
        echo '<form action="SubmitEAHWAForm.php" method="POST" onsubmit="target_popup(this)">';
		echo '<h5>Name of Teacher:</h5>';
        echo '<input type="text" placeholder="Name of Teacher" name="idNo" >';
        echo '<h5>Level/Section:</h5>';
        echo '<input type="text" placeholder="(Grade,Section)"> <br>';
        echo '<div class="well" align="center">';
        echo '<table border="1">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th>Rating Scale</th>';
                    echo '<th>Legend</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>
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
        </table>';

        echo '<div class="well" align="center">';
        echo '<table>';
            echo '<thead>';
                echo '<tr>';
                    echo '<th>Criteria</th>';
                    echo '<th>Rating</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                  
                  echo'<tr>';
                        echo '<td> 1. Developing a "homeroom" relationship in the advisory class  </td>';
                        echo '<td> &nbsp &nbsp &nbsp'. $ques_1 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                        echo'<td> 2. Creating a physical classroom setting conducive to a homeroom atmosphere </td>';
                        echo '<td> &nbsp &nbsp &nbsp' . $ques_2 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                       echo '<td> 3. Developing team spirit and camaraderie in the advisory class </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_3 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                       echo '<td> 4. Holding regular homeroom meetings </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_4 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 5. Sensing/Detecting academic and other problems in students/class</td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_5 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 6. Holding friendly individual/group consultations/counselling with advisory students </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_6 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 7. Maintaining good contact with parents; doing home visits when needed </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_7 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 8. Exhibiting discretion, tact, and confidentiality in dealing with students/ parents/guardians </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_8 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 9. Enforcing Student Handbook provisions in general </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_9 . '</td>';
                  echo '</tr>';

                   echo '<tr>';
                       echo '<td> 10. Checking students names in advisory class relative to Forms 1, 137, and 138 </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_10 . '</td>';
                  echo '</tr>';
                  

                  echo '<tr>';
                       echo '<td> 11. Submitting promotion report (Form 18-E) at the end of the year </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_11 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 12. Showing quality participation in the deliberation meetings every grading period(3)aderie in the advisory class </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_12 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 13. Performing well during Parent-Teacher Conferences (3) </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_13 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 14. Supervising the students during flag ceremonies, programs, field trips, and other similar activities </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_14 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 15. Monitoring and following up the release/retrieval of communications to parents </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_15 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td>16. Monitoring/Recording habitual minor offenses and reporting the same to the POD</td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_16 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                       echo '<td> 17. Making referrals to the Guidance Conselors/Prefect of Discipline  </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_17 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 18. Reporting damages and repair needs in the classroom  </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_18 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 19. Creating and implementing a system of maintaining order/cleanliness in the room (5) </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_19 . '</td>';
                  echo '</tr>';
                  

                  echo '<tr>';
                       echo '<td> Coordinating with subject teachres on the schedules of long tests, projects, etc.  </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_20 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 21. Conducting daily routine checks on haircut, uniform, and ID (5) </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_21 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 22. Conducting daily routine checks on attendance/submission of reports related thereto(3) </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_22 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 23. Guiding/Inspiring the advisory class in relation to environmental thrust </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_23 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                       echo '<td> 24. Encouraging by word and example the living out of the LBAS core values  </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_24 . '</td>';
                  echo '</tr>';

                  
                  echo '<tr>';
                       echo '<br>';
                       echo '<td><h3>Result:</h3></td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_25 . '</td>';
                  echo '</tr>';

            echo '</tbody>';
        echo '</table>';
            echo "<input type='submit' value='Submit' class='Log' name='eval'>";
	echo '</form>';
    }
  ?>
</body>
</html>
