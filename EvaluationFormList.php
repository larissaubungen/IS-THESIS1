<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->





    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pages/dashboard.css" rel="stylesheet">

    <style>
       table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>

    <!--CSS code for profiles-->
    <style type="text/css">
        .user-row {
         margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }

    </style>

     <!--CSS code for profiles-->

      <!--Javascript code for profiles-->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!--Javascript code for profiles-->
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




<hr class="">
<div class="container target">
    <div class="row">
        


       <?php

       $idNo = $_POST['id'];
       $subjectofEmployee = $_POST['subject'];
       $departmentofEmployee = $_POST['department'];
      

        mysql_connect("localhost", "root", "")
        or die(mysql_error());
        mysql_select_db("lbas_hr") 
        or die(mysql_error());

        /*$result = mysql_query("
            SELECT work.Level
            FROM work 
            WHERE ID_No LIKE '".$idNo."'
            "); 

        while($row = mysql_fetch_array($result)){
          
        $level = $row["Level"];
        

        }
        
        echo "$level";*/

       if($departmentofEmployee == 'Human Resource Department' || $departmentofEmployee == 'Accounting Department' ||
          $departmentofEmployee == 'Registrar' || $departmentofEmployee == 'IT Department' || $departmentofEmployee == 'Director/Principal' ||
          $departmentofEmployee == 'Library' || $departmentofEmployee == 'Clinic' || $departmentofEmployee == 'Student Formation Center') {

            
               echo '<center>';
               echo '<table>';
                   echo '<table style="width:50%">';
                        echo '<tr>';
                        echo '<td><strong>General Performance Evaluation (2-A)</td>';
                                      
                      echo'<form action="GPEforNonTeachingStaff(2-A).php" method= "POST">';
                        echo "<input type='hidden' name='id' value='$idNo'/>";
                        echo '<td><input type="submit" value="Go to evaluation form"></td>';
                        
                      echo'</form>';  


                        echo '</tr>';
                   
                        echo '</table>';
              echo '</center>';                          

       } else if ($departmentofEmployee == 'SMIT' || $departmentofEmployee == 'Humanities') {

      
               echo '<center>';
               echo '<table>';
                   echo '<table style="width:50%">';
                        echo '<tr>';
                        echo '<td><strong>General Performance Evaluation for Teachers</td>';            
                            echo'<form action="GPEforTeachers.php" method= "POST">';
                              echo "<input type='hidden' name='id' value='$idNo'/>";
                              echo "<input type='hidden' name='subject' value='$subjectofEmployee'/>";
                              echo '<td><input type="submit" value="Go to evaluation form"></td>'; 
                            echo'</form>';

                      echo '</tr>';

                    echo '<tr>';
                      echo '<td><strong>Evaluation Of Classroom Instruction(ECI-A)</td>';
                        echo'<form action="EvaluationOfClassroomInstruction(ECI-A).php" method= "POST">';
                          echo "<input type='hidden' name='id' value='$idNo'/>";
                          echo "<input type='hidden' name='subject' value='$subjectofEmployee'/>";
                          echo '<td><input type="submit" value="Go to evaluation form"></td>'; 
                        echo'</form>';
                      echo '</tr>';  


                      /*echo '<tr>';
                        echo '<td><strong>Evaluation Of Classroom Instruction for Intermmediate and Higschool Students(ECI-B)</td>';
                        echo'<form action="EvaluationOfClassroomInstruction(ECI-B)_Inter_HS.php" method= "POST">';
                          echo "<input type='hidden' name='id' value='$idNo'/>";
                          echo '<td><input type="submit" value="Go to evaluation form"></td>'; 
                        echo'</form>';
                      echo '</tr>';

                      echo '<tr>';
                        echo '<td><strong>Evaluation Of Classroom Instruction for Primary Students(ECI-B)</td>';
                          echo'<form action="EvaluationOfClassroomInstruction(ECI-B)_Primary.php" method= "POST">';
                            echo "<input type='hidden' name='id' value='$idNo'/>";
                            echo '<td><input type="submit" value="Go to evaluation form"></td>'; 
                          echo'</form>';  
                      echo '</tr>';*/
                   
                        echo '</table>';
              echo '</center>';                          


       }


    ?>




</body>
</html>
