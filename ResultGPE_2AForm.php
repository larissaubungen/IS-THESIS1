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
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">LBASS Human Resource Information System </a>
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
            <li class="active"><a href="#"><i class="icon-home"></i><span>Evaluation Form (GPE-2A)</span> </a> </li>
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->

    <?php
    $idNo = $_POST['id'];
	$date = $_POST['date'];
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
                AVG(Result),
                Count(Result)
            FROM eval_gpe_nonteaching_2a
            WHERE ID_No = '".$idNo."' AND YEAR(Date) = '".$date."'
            "); 
            
          while($row = mysql_fetch_array($result)){
          
          $ques_1 = ($row['AVG(Ques_1)']);
          $ques_2 = ($row['AVG(Ques_2)']);
          $ques_3 = ($row['AVG(Ques_3)']);
          $ques_4 = ($row['AVG(Ques_4)']);
          $ques_5 = ($row['AVG(Ques_5)']);
          $ques_6 = ($row['AVG(Ques_6)']);
          $ques_7 = ($row['AVG(Ques_7)']);
          $ques_8 = ($row['AVG(Ques_8)']);
          $ques_9 = ($row['AVG(Ques_9)']);
          $ques_10 = ($row['AVG(Ques_10)']);
          $ques_11 = ($row['AVG(Ques_11)']);
          $ques_12 = ($row['AVG(Ques_12)']);
          $ques_13 = ($row['AVG(Ques_13)']);
          $ques_14 = ($row['AVG(Ques_14)']);
          $ques_15 = ($row['AVG(Ques_15)']);
          $ques_16 = ($row['AVG(Ques_16)']);
          $ques_17 = ($row['AVG(Ques_17)']);
          $ques_18 = ($row['AVG(Ques_18)']);
          $ques_19 = ($row['AVG(Ques_19)']);
          $ques_20 = ($row['AVG(Ques_20)']);
          $ques_25 = ($row['AVG(Result)']);

        }



        $idNo = $_POST['id'];
        mysql_connect("localhost", "root", "")
        or die(mysql_error());
        mysql_select_db("lbas_hr") 
        or die(mysql_error());


            $result = mysql_query("
            SELECT *
            FROM person, work 
            WHERE person.ID_No = '$idNo' and work.ID_No = '$idNo' 
            "); 
  


     while($row = mysql_fetch_array($result)){
          $firstName = $row["F_Name"];
          $lastName = $row["L_Name"];
          $middleName = $row["M_Name"];
          $ePosition1 = $row["E_Position1"];
          $ePosition2 = $row["E_Position2"];

     

    echo '<div class="well" align="center">';
    echo '<h4>General Performance Evaluation (For use of Supervisors for Non-Teaching Staff)</h4>';
	  echo "<br>";
        echo '<form action="SubmitEvalNonTeaching2A.php" method="POST" onsubmit="target_popup(this)">';
		echo '<h5>Name of Non-Teaching Employee: </h5>';
        echo '<input type="text" placeholder="Name of Non-Teaching Employee" value="'. $row['L_Name'] . "," . " " . $row['F_Name'] .  '" readonly>';
         echo '<h5>Designation:</h5>';
   echo '<input type="text" placeholder="Designation" value="'. $row['E_Position1'] . "/" . $row['E_Position2'] . '" readonly> <br>';
        

  }
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
                        echo '<td> 1. Desire for personal and professional growth and improvement </td>';
                        echo '<td> &nbsp &nbsp &nbsp'. $ques_1 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                        echo'<td> 2. Submission of neat, accurate, well organized and gramatically correct reports </td>';
                        echo '<td> &nbsp &nbsp &nbsp' . $ques_2 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                       echo '<td> 3. Compliance with policies and directive ageter these have been discussed </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_3 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                       echo '<td> 4. Acceptance of tasks/assignements given </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_4 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 5. Judicious use of time; systemization of work; planning for tasks ahead </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_5 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td>6. Building of unity through kinf feedback; not talking behind others back and engaging in negative talk </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_6 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 7. Building and open, hamonious relationship w/ supervisors </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_7 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 8. Maintenance of a pleasant disposition toward job and persons around  </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_8 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 9. Handling of problems arising from the work and workplace </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_9 . '</td>';
                  echo '</tr>';

                   echo '<tr>';
                       echo '<td> 10. Resourcefulness and creativity in doing assigned tasks </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_10 . '</td>';
                  echo '</tr>';
                  

                  echo '<tr>';
                       echo '<td>  11. Flexibility in responding to variances in working conditions </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_11 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 12. Exercise of discretion and confidentiality required by the job </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_12 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td>13. Effort to live out the LBASS core values and serve as a role model for students </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_13 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 14. Sensitivity, tact and prudence in dealing with students and parents </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_14 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 15. Enforcement/compliance with guidelines on energy-saving, cost-cutting; care for school properties</td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_15 . '</td>';
                  echo '</tr>';


                  echo '<tr>';
                       echo '<td> 16. Enforcment/compliance with the garbage management & other pro-environment thrusts of school </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_16 . '</td>';
                  echo '</tr>';
                  
                  echo '<tr>';
                       echo '<td> 17. Willingness to go beyond official time when such may be occasionally needed  </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_17 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 18. Practice of good grooming  </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_18 . '</td>';
                  echo '</tr>';

                  echo '<tr>';
                       echo '<td> 19. Compliance with guidelines on the wearing of uniform </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_19 . '</td>';
                  echo '</tr>';
                  

                  echo '<tr>';
                       echo '<td> 20. Voluntarism (offering to be of help whenever possible) </td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_20 . '</td>';
                  echo '</tr>';


                  
                  echo '<tr>';
                       echo '<br>';
                       echo '<td><h3>Result:</h3></td>';
                       echo '<td> &nbsp &nbsp &nbsp' . $ques_25 . '</td>';
                  echo '</tr>';

            echo '</tbody>';
        echo '</table>';
            //echo "<input type='submit' value='Submit' class='Log' name='eval'>";
	echo '</form>';
    
  ?>
</body>
</html>
