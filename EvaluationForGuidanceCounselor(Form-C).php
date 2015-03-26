<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
  } ?>  

</script>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Evaluation for Guidance Counsleor (Form C)</title>
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
                
              echo '<li><a href="http://localhost/IS-THESIS1/logout.php">Logout</a></li>';

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
    <h4>Evaluation for Guidance Counselor (Form C)</h4>
    <h4>(For use by Students)</h4>

    <br>
    <h5>ID Number of Guidance Counselor: </h5>
    <form action="SubmitEvalGuidance.php" method="POST" onsubmit="target_popup(this)">
    
    
    <select id="idNo" name="idNo">
        <?php

         mysql_connect('localhost', 'root', '')
              or die(mysql_error());  
              mysql_select_db('lbas_hr') 
              or die(mysql_error());

          $result = mysql_query("
            SELECT work.ID_No, work.Department
            FROM work 
            WHERE work.Department='Student Formation Center'

            ");     

          while ($row = mysql_fetch_array($result)) {
             $guidanceCounselor = $row['ID_No'];
            echo '<option>' . $guidanceCounselor. '</option>';
          }
        
        ?>

      </select>

        <div class="well" align="center">
        <table border="1">
            <thead>
                <center>
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
            </center>
            </tbody>
        </table>

        <br><br>
     
    
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
                        <td> 1. Has a general program that respons to the needs of the <br> students </td>
                        <td><input id="rdo_1" type="radio" value="1" name="1"> 1&nbsp</td>
                        <td><input id="rdo_2" type="radio" value="2" name="1"> 2&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_3" type="radio" value="3" name="1"> 3&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_4" type="radio" value="4" name="1"> 4&nbsp&nbsp&nbsp&nbsp</td>    
                        <td><input id="rdo_5" type="radio" value="5" name="1"> 5&nbsp&nbsp&nbsp&nbsp</td>
          
                  </tr>

                  <tr>
                        <td> 2. Enjoys the turst and confidence of the students </td>
                    
                        <td><input id="rdo_1" type="radio" value="1" name="2"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="2"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="2"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="2"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="2"> 5<br></td>
                   
                  </tr>
                  <tr>
                        <td> 3. Effectively assists students when they go there </td>

                        <td><input id="rdo_1" type="radio" value="1" name="3"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="3"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="3"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="3"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="3"> 5<br></td>

                  </tr>
                  <tr>
                        <td> 4. Has staff who are approachable and welcoming </td>
                
                        <td><input id="rdo_1" type="radio" value="1" name="4"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="4"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="4"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="4"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="4"> 5<br></td>
                  </tr>
                  <tr> <td> 5. Effectively coordinates/facilitates concerns of students, <br> parents and teachers when needed </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="5"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="5"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="5"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="5"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="5"> 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 6. Implements effective career guidance activities  </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="6"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="6"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="6"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="6"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="6"> 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 7. Implements effective personality development activities</td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="7"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="7"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="7"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="7"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="7"> 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 8. Has a well-organized system in place</td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="8"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="8"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="8"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="8"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="8"> 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 9. Has clear rules and regulations  </td>

                        <td><input id="rdo_1" type="radio" value="1" name="9"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="9"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="9"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="9"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="9"> 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 10. Strictly implements its rules and regulations </td>

                  
                        <td><input id="rdo_1" type="radio" value="1" name="10"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="10"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="10"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="10"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="10"> 5<br></td>
                  
                  </tr>
        

                 

                </tbody>
        </table>
          <br><br>
            <center>
                
                Comments and Suggestions: <br />
                <textarea name="comments" id="comments">
                
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
