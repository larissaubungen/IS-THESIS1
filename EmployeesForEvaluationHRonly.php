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
    <title>Employees For Evaluation</title>
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
      <li class="active"><a href="http://localhost/IS-THESIS1/HR_Page.php"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
      <li><a href="http://localhost/IS-THESIS1/EmployeesPage.php"><i class="icon-user"></i><span>Employees</span> </a> </li>
      

      <li><a href="ReportsPage.php"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
      <li><a href="AttendancePage.php"><i class="icon-table"></i><span>Attendance</span> </a></li>
      <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>
        <span>Applicants</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">

          <li><a href="http://localhost/IS-THESIS1/ListOfApplicant.php">View Current Applicants</a></li>
          <li><a href="http://localhost/IS-THESIS1/Signup.php">Add Applicant</a></li>
        </ul>    
      <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
         <ul class="dropdown-menu">
            <li><a href="HR_Resignation.php">Resignations</a></li>
            <li><a href="HR_Transfer.php">Transfers</a></li>
         </ul> 
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


<!--Container for Employee Profiles-->

<div class="container">
    <div class="row">
        <div class="span12">
            <ul class="thumbnails">
        <?php

        //User that is currently logged in
        $user=$_SESSION['ID_No']; 
        //User that is currently logged in

        mysql_connect("localhost", "root", "")
        or die(mysql_error());
        mysql_select_db("lbas_hr") 
        or die(mysql_error());
        

         

        $department = "";

        $result = mysql_query("
        SELECT ID_No, Department, Subject
        FROM work 
        WHERE ID_No LIKE '".$user."' 
        "); 


        
        while($row = mysql_fetch_array($result)){
          
        $department = $row["Department"];
        $subject = $row["Subject"];
        

        }


        $getUser = mysql_query("
            SELECT DISTINCT person.F_Name, person.L_Name, person.M_Name,
                            work.ID_No, work.Department
            FROM work, person
            WHERE person.CurrentWork_ID = work.Work_ID AND
                  work.Department = '".$department."' AND

                  work.ID_No != '".$user."'
            
           "); 


        while($row = mysql_fetch_array($getUser)){

            echo '<li class="span5 clearfix">';
            echo '<div class="thumbnail clearfix">';
            echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
             
              echo '<div class="caption" class="pull-left">';
                
                echo'<form action="EvaluationFormList.php" method= "POST">';
                  echo "<input type='hidden' name='id' value='". $row['ID_No']."'/>";
                  echo "<input type='hidden' name='department' value='$department'/>";
                  echo "<input type='hidden' name='subject' value='$subject'/>";

                  echo '<input type= "submit" class="btn btn-primary icon  pull-right" value="Evaluate">';

                echo '</form>';
            


              echo '<h4>';      
                echo '<a href="#" >'. $row["F_Name"] . " " . $row["L_Name"] .'</a>';
              echo '</h4>';
              echo '<small><b>ID Number: </b>'. $row["ID_No"] .'</small>';

              echo '<br>';
              echo '<br>';

               /*Dropdown menu for choosing the type of evaluation (OLD IDEA)

                   echo '<select name="">';
                    echo '<option>2012</option>';
                    echo '<option>2012</option>';
                  echo '</select>'; 



               */

       }
                      echo'</div>';
                    echo'</div>';
                  echo'</li>';



        ?>




            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>

</body>
</html>
