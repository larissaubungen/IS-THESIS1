<?php 
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  }
  else if ($_SESSION['ID_No'] != 'Admin'){
      header('Location:ErrorAuthentication.php');  
    }
?>
<!DOCTYPE html>
<?php  
  mysql_connect("localhost", "root", "")
        or die(mysql_error());
  mysql_select_db("lbas_hr") 
        or die(mysql_error());
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>LBASS Resignation Requests</title>
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


<style> 
  p{
    text-indent: 1em;
  }
</style> 

</head>
<body>

<div class="navbar navbar-fixed-top">  <!--main navbar-->
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
                echo "<i class='icon-user'></i> $lastName , $firstName";
                echo "<b class='caret'></b></a><ul class='dropdown-menu'/>";
              }?>
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>  
        <!--form navbar was here-->
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->

<div class="subnavbar">  <!--subnavbar-->
  <div class="subnavbar-inner">
    <div class="container">

      <ul class="mainnav">
        <li ><a href="HR_Page.php"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="EmployeesPage.php"><i class="icon-user"></i><span>Employees</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> 
          <i class="icon-user"></i><span>Applicants</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="ListOfApplicant.php">View Current Applicants</a></li>
            <li><a href="Signup.php">Add Applicant Account</a></li>
          </ul>   
        </li>
                
        <li><a href="AttendancePage.php"><i class="icon-table"></i><span>Attendance</span> </a></li>
        <li><a href="ReportsPage.php"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
      
        <?php
                $leaves=mysql_query("SELECT * 
               FROM leave_table 
               WHERE L_Status ='Pending'");

        if ($leaves){ //if and else statement for handling the query

          if(mysql_num_rows($leaves) > 0)
          {
            ?>
              <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests*</span></a>
               <ul class="dropdown-menu">
                  <li><a href="HR_Resignation.php">Resignations</a></li>
                  <li><a href="HR_Transfer.php">Transfers</a></li>
                  <li><a href="LeaveRequest.php">Leaves*</a></li>
               </ul> 
              </li>
            <?php 

          }else{
            ?>
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
                   <ul class="dropdown-menu">
                      <li><a href="HR_Resignation.php">Resignations</a></li>
                      <li><a href="HR_Transfer.php">Transfers</a></li>
                <li><a href="LeaveRequest.php">Leaves</a></li>
                   </ul> 
                </li>
            <?php
          }
        }else{
            ?>
                <li class="active dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-list"></i><span>Requests</span></a>
                   <ul class="dropdown-menu">
                      <li><a href="HR_Resignation.php">Resignations</a></li>
                      <li><a href="HR_Transfer.php">Transfers</a></li>
                <li><a href="LeaveRequest.php">Leaves</a></li>
                   </ul> 
                </li>
            <?php
        }   ?>

    </div>

    <!-- /container --> 
  </div>
  </div>
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->



  <div class="container">
       <div class="row">
        <div class="span6">

          <h3>Resignation Request</h3><br/>

    <?php

     mysql_connect("localhost", "root", "")
          or die(mysql_error());
      
      mysql_select_db("lbas_hr") 
        or die(mysql_error()); 

      error_reporting(0); //for hiding the unidentified index
      $flag = $_POST["deleteFlag"]; //variable indicator if the Admin user approve the resignation
      $disFlag = $_POST["disapproveFlag"];
      $idNumber = $_POST["idNumber"]; 

      date_default_timezone_set('Asia/Manila'); //Setting up the timezone to Philippines   
      $today = date('Y-m-d', strtotime($date));  //setting the date 1 day late because of the timezone problem?
      $date = date_create($today, timezone_open('Asia/Manila')); //creating procedural date
      $datePH = date_format($date, 'Y-m-d'); //formating the date today

      $archiveYES = "Yes";
      $approvedStat = "Approve";

      if (!(is_null($flag))){  //approving the list based on the flag
      
         $approveResign = mysql_query("UPDATE `person`,`resignation`,`work`
                                       SET person.E_Status= NULL, person.CurrentWork_ID = NULL, person.Archive = '".$archiveYES."',
                                       resignation.Res_Status = '".$approvedStat."', resignation.Res_Date = CURDATE(), work.ID_No = NULL
                                       WHERE person.ID_No = '".$idNumber."' AND resignation.ID_No = '".$idNumber."' AND work.ID_No= '".$idNumber."'                  
              "); 

          if ($approveResign) {   //dismissible alert for approval success
            ?>                
                <div class="bs-example">
                  <div class="alert alert-success" id="alert">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Resignation Approved.</strong> 
                  </div>
               </div>    
            <?php 
          }else{
            ?>

                <div class="bs-example">
                  <div class="alert alert-danger" id="alert">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Resignation Approval request failed.</strong> 
                  </div>
               </div> 

               <?php
                  $flag = NULL;
                }
      }else{
            $flag = NULL;
          }  

        if(!(is_null($disFlag))){
          $disapproveResign =mysql_query("UPDATE person INNER JOIN resignation
                                          ON person.Resign_ID LIKE resignation.Resign_ID
                                          SET person.Resign_ID = NULL,
                                              resignation.Res_Status = 'Disapprove',
                                              resignation.Res_Date = CURDATE()
                                          WHERE person.ID_No = '".$idNumber."' AND resignation.ID_No = '".$idNumber."' ");
            if ($disapproveResign) {   //dismissible alert for approval success
            ?>                
                <div class="bs-example">
                  <div class="alert alert-success" id="alert">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Resignation Disapproved.</strong> 
                  </div>
               </div>    
            <?php 
          }else{
            ?>

                <div class="bs-example">
                  <div class="alert alert-danger" id="alert">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Resignation Disapproval request failed.</strong> 
                  </div>
               </div> 

               <?php
                  $disFlag = NULL;
                }

        }else{
             $disFlag = NULL;
        }

       //query for the list of resignation requests filtered to pending status
          $result = mysql_query("
              SELECT DISTINCT person.F_Name as firstName, person.M_Name as middleName, person.L_Name as lastName, person.CurrentWork_ID as currentWorkID,
                              work.E_Position1 as position1, work.E_Position2 as position2, work.Department as dept, 
                              work.Level, work.Subject as subject, work.Subject_Type as subj_type, work.Grade as grade, 
                              work.Date_Assigned as dateAssigned,
                              resignation.ID_No as resIDNo, resignation.Res_DateFiled as dateFiled, resignation.Reason
              FROM person, work, resignation
              WHERE person.ID_No LIKE resignation.ID_No and 
                    resignation.Resign_ID Like person.Resign_ID and 
                    person.ID_No like work.ID_No and resignation.Res_Status LIKE 'Pending'");

          while($row = mysql_fetch_array($result)){

          $idNumber = $row["resIDNo"];
          $firstName = $row["firstName"];
          $middleName = $row["middleName"];
          $lastName = $row["lastName"];
          $position1 = $row["position1"];
          $position2 = $row["position2"];
          $dept = $row["dept"];
          $subj = $row["subject"];
          $subj_type = $row["subj_type"];
          $reason = $row["Reason"];
          $clearance = "Cleared";

          $currentWorkID = $row['currentWorkID']; //for value passing only

      echo '<li class="span7 clearfix" style="list-style:none;">';
        echo '<div class="thumbnail clearfix">';
          echo '<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style="margin-right:10px">';
            echo '<div class="caption" >';

           echo '<h4>';      
             echo '<a href="#" >'. $lastName .", ". $firstName ." ". $middleName.'</a>';

             //<a data-toggle="modal" data-target="#modal-1" onclick="modal();" style="padding-left:2em; color:black"> See List of Jobs</a>

             echo '<button type="button" class="demo btn btn-success icon pull-right" data-toggle="modal" data-target="#modal-1">Approve</button>';
             echo '<button type="button" style="margin-right:1em;" class="demo btn btn-danger icon pull-right" data-toggle="modal" data-target="#modal-2">Disapprove</button>';
             echo '</h4>';
             
             echo '<small><b>ID Number: </b>'. $idNumber .'</small><br/>'; 
             
              if (is_null($position1) && !(is_null($position2))) {
                echo '<small><b>Position 2: </b>'. $position2 .'</small><br/>';
                if (!is_null($dept)) {
                   echo '<small><b>Department: </b>'. $dept .'</small><br/>';  
                }  

             }else if (is_null($position2) && !(is_null($position1))) {
                echo '<small><b>Position 1: </b>'. $position1 .'</small><br/>';  
                if (!is_null($dept)) {
                   echo '<small><b>Department: </b>'. $dept .'</small><br/>';  
                }

             }else{
                echo '<small><b>Position 1: </b>'. $position1 .'</small><br/>';  
                echo '<small><b>Position 2: </b>'. $position2 .'</small><br/>';  
                echo '<small><b>Department: </b>'. $dept .'</small><br/>';
             }

          echo '<form action="HR_ResignRecommend.php" method="post">';
            echo '<input type="hidden" id="idNumber" name="idNumber" value="'.$idNumber.'">';
            echo '<input type="hidden" id="currentWorkID" name="currentWorkID" value="'.$currentWorkID.'">';
            echo '<input type="hidden" id="firstName" name="firstName" value="'.$firstName.'">';
            echo '<input type="hidden" id="middleName" name="middleName" value="'.$middleName.'">';
            echo '<input type="hidden" id="lastName" name="lastName" value="'.$lastName.'">';
            echo '<input type="hidden" id="dept" name="dept" value="'.$dept.'">';
          echo '<input type="submit" class="btn btn-default icon pull-right" style="display:inline-block;" value="Select Recommendations">
                </form>';     
                
             echo '<small><b>Reason: </b>'.$reason.'</small><br/>';
             echo '<small><b>Clearance: </b> '.$clearance.'</small>';
            ?>
          </div>
        </li>
        <?php
          }
        ?>



      </div>
     </div> 
   </div>
          
    <!--Modal Part for APPROVAL Prompt-->

        <header></header>
        <div class="modal" id="modal-1" style="display:none;">
          <div class="modal-dialog">            
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Resignation Approval</h3>
            </div> <!--modal header-->

            <div class="modal-body"> 
                <p>Are you sure to <strong>APPROVE</strong> the resignation request without employee replacement?</p>
             
            </div>
            </div> <!--modal body-->

            <div class="modal-footer">

              <form id="resignForm" action="HR_Resignation.php" method= "POST">
        <?php
          echo '<input type="hidden" id="deleteFlag" name="deleteFlag" value="'.$flag.'">';
          echo '<input type="hidden" id="idNumber" name="idNumber" value="'.$idNumber.'">';
          echo '<input type="hidden" id="firstName" name="firstName" value="'.$firstName.'">';
          echo '<input type="hidden" id="middleName" name="middleName" value="'.$middleName.'">';
          echo '<input type="hidden" id="lastName" name="lastName" value="'.$lastName.'">';
          echo '<input type="hidden" id="Reason" name="Reason" value="'.$reason.'">';
          echo '<input type="hidden" id="Position1" name="Position1" value="'.$position1.'">';
          echo '<input type="hidden" id="Position2" name="Position2" value="'.$position2.'">';
          echo '<input type="hidden" id="dept" name="dept" value="'.$dept.'">';
          echo '<input type="hidden" id="subject" name="subject" value="'.$subj.'">';
          echo '<input type="hidden" id="subj_type" name="subj_type" value="'.$subj_type.'">';

        ?>
            <button type="button" data-dismiss="modal" class="btn">Return</button>
              <input type="submit" class="btn btn-primary" value="Proceed">      
          </form>
                </div> <!--modal footer-->
              </div> <!--modal content-->
          </div> <!--modal dialogue-->
          </div> <!--modal-->
          </div> <!--Container-->
    <footer></footer>
    <!--END OF Modal Part for APPROVAL Prompt-->

    <!--Modal Part for DISAPPROVAL Prompt-->

     <header></header>
        <div class="modal" id="modal-2" style="display:none;">
          <div class="modal-dialog">            
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Resignation Approval</h3>
            </div> <!--modal header-->

            <div class="modal-body"> 
                <p>Are you sure to <strong>DISAPPROVE</strong> the resignation request without employee replacement?</p>
             
            </div>
            </div> <!--modal body-->

            <div class="modal-footer">

              <form id="resignForm" action="HR_Resignation.php" method= "POST">
        <?php
          echo '<input type="hidden" id="disapproveFlag" name="disapproveFlag" value="'.$disFlag.'">';
          echo '<input type="hidden" id="idNumber" name="idNumber" value="'.$idNumber.'">';
          echo '<input type="hidden" id="firstName" name="firstName" value="'.$firstName.'">';
          echo '<input type="hidden" id="middleName" name="middleName" value="'.$middleName.'">';
          echo '<input type="hidden" id="lastName" name="lastName" value="'.$lastName.'">';
          echo '<input type="hidden" id="Reason" name="Reason" value="'.$reason.'">';
          echo '<input type="hidden" id="Position1" name="Position1" value="'.$position1.'">';
          echo '<input type="hidden" id="Position2" name="Position2" value="'.$position2.'">';
          echo '<input type="hidden" id="dept" name="dept" value="'.$dept.'">';
          echo '<input type="hidden" id="subject" name="subject" value="'.$subj.'">';
          echo '<input type="hidden" id="subj_type" name="subj_type" value="'.$subj_type.'">';

        ?>
            <button type="button" data-dismiss="modal" class="btn">Return</button>
              <input type="submit" class="btn btn-primary" value="Proceed">      
          </form>
                </div> <!--modal footer-->
              </div> <!--modal content-->
          </div> <!--modal dialogue-->
          </div> <!--modal-->
          </div> <!--Container-->
    <footer></footer>

<!-- Placed at the end of the document so the pages load faster -->

<script src="js/boostrap2.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap-modalmanager.js"></script>
<script src="js/bootstrap-modal.js"></script>

<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/boostrap.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
<script src="js/base.js"></script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".close").click(function(){
    $("#alert").alert();
  });
});
</script>
</body>
</html>
