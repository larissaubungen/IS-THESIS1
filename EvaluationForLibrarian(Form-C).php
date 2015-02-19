
</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Evaluation for Librarian (Form C)</title>
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
    <div class="well" align="center">
    <h4>Evaluation for Librarian (Form C)</h4>
    <h4>(For use by Students)</h4>

    <br>
    
<h5>Name of Librarian: </h5>
        <input type="text" placeholder="Name of Librarian">
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
     

        <div class="well" align="center">
        <table>
            <thead>
                <tr>
                    <th>Criteria</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
						<form action='SubmitEvalLibrian.php' method='POST'onsubmit="target_popup(this)">
				  <tr>
                        <td> 1. Has the materials that students need to do their assignments </td>
                          
                    
                     <td><input id="rdo_1" type="radio" value="1" name="1"> 1&nbsp</td>
                        <td><input id="rdo_2" type="radio" value="2" name="1"> 2&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_3" type="radio" value="3" name="1"> 3&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input id="rdo_4" type="radio" value="4" name="1"> 4&nbsp&nbsp&nbsp&nbsp</td>    
                        <td><input id="rdo_5" type="radio" value="5" name="1"> 5&nbsp&nbsp&nbsp&nbsp</td>
                  
                  </tr>

                  <tr>
                        <td> 2. Has other materials that are informative and enriching </td>
                    
                        <td><input id="rdo_1" type="radio" value="1" name="2"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="2"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="2"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="2"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="2"> 5<br></td>
                   
                  </tr>
                  <tr>
                        <td> 3. Is a well organized resource center </td>

                    
                        <td><input id="rdo_1" type="radio" value="1" name="3"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="3"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="3"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="3"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="3"> 5<br></td>
                  

                  </tr>
                  <tr>
                        <td> 4. Is a place where students can comfortably work in </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="4"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="4"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="4"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="4"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="4"> 5<br></td>
                  
                  </tr>
                  <tr> <td> 5. Has staff who are welcoming to students </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="5"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="5"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="5"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="5"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="5"> 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 6. Has staff who gives students assistance when they go there  </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="6"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="6"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="6"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="6"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="6"> 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 7. Has clear rules and regulations </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="7"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="7"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="7"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="7"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="7"> 5<br></td>
                  
                  </tr>
                  <tr>
                        <td> 8. Implements strictly its rules and regulations </td>
                  
                        <td><input id="rdo_1" type="radio" value="1" name="8"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="8"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="8"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="8"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="8"> 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 9. Has a quiet and pleasant atmosphere  </td>


                      
                  
                        <td><input id="rdo_1" type="radio" value="1" name="9"> 1<br></td>
                        <td><input id="rdo_2" type="radio" value="2" name="9"> 2<br></td>
                        <td><input id="rdo_3" type="radio" value="3" name="9"> 3<br></td>
                        <td><input id="rdo_4" type="radio" value="4" name="9"> 4<br></td>    
                        <td><input id="rdo_5" type="radio" value="5" name="9"> 5<br></td>
                  
                  </tr>
                    <tr>
                        <td> 10.  Is an interesting place to go to </td>

                  
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
			<input type='submit' value='Submit' class='Log' name='eval'>
        <br><br>
        <center>
         
        </center>
        <br>

            
   
</body>
</html>
 