<?php 
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  }

$user=$_SESSION['ID_No'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>LBASS HR Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/bootstrap-modal.css" rel="stylesheet" />
<script src="js/boostrap2.js"></script>
<script src="js/jquery-2.1.1.js"></script>
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
              }?>
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="http://localhost/IS-THESIS1/logout.php">Logout</a></li>
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
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

  <header></header>

    <script>
      $(document).ready(
        function modal(){
          $("#modal-1").getElementById().show();          
        }
      );
    </script>       

    <div class="container">
       <div class="row">
        <div class="span6">

      <?php

           mysql_connect("localhost", "root", "")
                or die(mysql_error());
            
            mysql_select_db("lbas_hr") 
              or die(mysql_error());   

          $result = mysql_query(
                  "SELECT DISTINCT person.F_Name, person.M_Name,person.L_Name, 
                                   person.E_Position1, person.E_Position2,
                                   person.Department, person.Subject,
                                   resignation.reason, resignation.D_Filed, resignation.ID_No
                  FROM person
                  INNER JOIN resignation
                  ON person.ID_No LIKE resignation.ID_No
                  ORDER BY person.L_Name ASC") or die (mysql_error());

          echo "<h3>Resignation Request</h3><br/>";

          while($row = mysql_fetch_array($result)){

          $idNumber = $row["ID_No"];
          $firstName = $row["F_Name"];
          $lastName = $row["L_Name"];
          $position1 = $row["E_Position1"];
          $position2 = $row["E_Position2"];
          $dept = $row["Department"];
          $subj = $row["Subject"];
          $reason = $row["reason"];


          echo '<div class="thumbnail clearfix">';
          echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
          echo '<div class="caption" class="pull-left">';

           echo '<h4>';      
             echo '<a href="#" >'. $firstName ." ". $lastName .'</a>';
             echo '</h4>';
             echo '<small><b>ID Number: </b>'. $idNumber .'</small><br/>';
             echo'<form id="resignForm" action="HR_ResignRecommend.php" method= "POST">';
             echo '<button type="button" class="btn btn-primary icon pull-right" data-toggle="modal" data-target="#modal-1" onclick="modal();">Approval</button>';

              echo '<input type="hidden" id="firstName" name="firstName" value="'.$firstName.'">';
              echo '<input type="hidden" id="lastName" name="lastName" value="'.$lastName.'">';
              echo '<input type="hidden" id="idNumber" name="idNumber" value="'.$idNumber.'">';


             if (is_null($position1) && !(is_null($position2))) {
                echo '<small><b>Position 2: </b>'. $position2 .'</small><br/>';
                echo '<small><b>Department: </b>'. $dept .'</small><br/>';  

             }elseif (is_null($position2) && !(is_null($position1))) {
                echo '<small><b>Position 1: </b>'. $position1 .'</small><br/>';  
                echo '<small><b>Department: </b>'. $dept .'</small><br/>';

             }else{
                echo '<small><b>Position 1: </b>'. $position1 .'</small><br/>';  
                echo '<small><b>Position 2: </b>'. $position2 .'</small><br/>';  
                echo '<small><b>Department: </b>'. $dept .'</small><br/>';
             }
             echo '<small><b>Reason:</b>'.$reason.'</small>';
      
      echo '
    <!--modal part-->  
    <!--modal header-->  

       <div id="stack1" class="modal hide fade" tabindex="-1" data-focus-on="input:first">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3>Resignation Approval</h3>
        </div>

    <!--modal body-->      
      <div class="modal-body">
        <p>Are you sure to approve the resignation request?</p>
        <div class="well">

          <p><b>ID number:</b>'." ". $row["ID_No"].'<br/>
                <b>Name:</b>'." ".$lastName.", ".$firstName. '<br/>';

                if (is_null($position1) && !(is_null($position2))) {
                echo ' <b>Position 2: </b>'. $position2 .' <br/>';
                echo ' <b>Department: </b>'. $dept .' <br/>';  

             }elseif (is_null($position2) && !(is_null($position1))) {
                echo ' <b>Position 1: </b>'. $position1 .' <br/>';  
                echo ' <b>Department: </b>'. $dept .' <br/>';

             }else{
                echo ' <b>Position 1: </b>'. $position1 .' <br/>';  
                echo ' <b>Position 2: </b>'. $position2 .' <br/>';  
                echo ' <b>Department: </b>'. $dept .' <br/>';
             }
             echo ' <b>Reason: </b>'.$reason.'  </p><br/>';
             echo $row['index'];
             ?>
      ';
      
      
        
          <p>ID Number:</p>
          <p>Name:</p>
          <p>Position:</p>
          <p>Reason:</p>
          <button type="button" class="btn" onclick="location='index.html'">Select Recommendations</button>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn">Close</button>
          <button class="btn btn-primary" data-toggle="modal" href="#stack2">Approve</button>
          
        </div>
      </div>

      <div id="stack2" class="modal hide fade" tabindex="-1" data-focus-on="input:first">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3>Resignation Approval</h3>
        </div>
        <div class="modal-body">
          <p>Are you sure to approve without replacement?</p>
          <button type="button" class="btn" onclick="location='index.html'">Select Recommendations</button>
          <!-- <button class="btn" data-toggle="modal" href="#stack3">Select</button> -->
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn">Return</button>
          <button type="button" class="btn btn-primary">Proceed</button>
        </div>
      </div>      


      echo ' <!--modal part-->
      <div class="modal" id="modal-1" style="display:none;">
          <div class="modal-dialog">            
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Resignation Approval</h3>
            </div> <!--modal header-->

            <div class="modal-body">
              <p>Are you sure to approve the resignation request?</p>
              <div class="well">
              
              <p><b>ID number:</b>'." ". $row["ID_No"].'<br/>
                <b>Name:</b>'." ".$lastName.", ".$firstName. '<br/>';

                if (is_null($position1) && !(is_null($position2))) {
                echo ' <b>Position 2: </b>'. $position2 .' <br/>';
                echo ' <b>Department: </b>'. $dept .' <br/>';  

             }elseif (is_null($position2) && !(is_null($position1))) {
                echo ' <b>Position 1: </b>'. $position1 .' <br/>';  
                echo ' <b>Department: </b>'. $dept .' <br/>';

             }else{
                echo ' <b>Position 1: </b>'. $position1 .' <br/>';  
                echo ' <b>Position 2: </b>'. $position2 .' <br/>';  
                echo ' <b>Department: </b>'. $dept .' <br/>';
             }
             echo ' <b>Reason: </b>'.$reason.'  </p>';
             ?>
             <input type="button" class="btn btn-primary" value="See Recommendations" onclick="location='HR_ResignRecommend.php'">
             <?php

      echo'        
            </div>
            </div> <!--modal body-->

            <div class="modal-footer">
                <form action="HR_ResignRecommend.php" method="post" id="subForm">      
                  <a href="" class="btn btn-default">Close</a>
                 <input type="submit" class="btn btn-primary" value="Approve">
                </form>
            </div> <!--modal footer-->
          </div> <!--modal content-->
      </div> <!--modal dialogue-->
      </div> <!--modal-->
      </div> <!--Container-->';
                    echo'</div>';
                  echo'</div>';
                echo'</li>';
            echo '</form>';   
          }

          ?>          
                </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 

      

     

  <footer></footer>




<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
<script src="js/base.js"></script> 
</body>
</html>