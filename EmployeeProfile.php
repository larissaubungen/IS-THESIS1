<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Administrators</title>
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
        <li class="active"><a href="HR_Page.php"><i class="icon-dashboard"></i><span>HR Dashboard</span> </a> </li>
        <li><a href="EmployeesPage.php"><i class="icon-user"></i><span>Employees</span> </a> </li>
        
        <li><a href="ReportsPage.php"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="guidely.html"><i class="icon-table"></i><span>Attendance</span> </a></li>
        <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->







<hr class="">
<div class="container target">
    <div class="row">
        <div class="col-sm-10">

             <h1 class="">Employee</h1>
         <br><br>
          <button type="button" class="btn btn-info">Send a message</button>
<br>
        </div>
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.lagunabelairschool.com.ph/images/danenberg.jpg"></a>

        </div>
    </div>
  <br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">

                 <?php
        mysql_connect("localhost", "root", "")
        or die(mysql_error());
        mysql_select_db("lbas_hr") 
        or die(mysql_error());
        
            $result = mysql_query("
            SELECT  F_Name, L_Name, ID_No
            FROM person 
            WHERE E_Status = 'Applicant'  
            "); 
        
        while($row = mysql_fetch_array($result)){
            echo $row['F_Name'];
        





          //      <li class="list-group-item text-muted" contenteditable="false">Profile</li>
            //    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Employed since:</strong></span> 1998</li>
             
                    echo '<li class="list-group-item text-right">full name;' . $row['F_Name']. '</li>';
              //<li class="list-group-item text-right"><span class="pull-left"><strong class="">Position: </strong></span> Directress
               
                //      </li>
                 }
        ?>

            </ul>
           <div class="panel panel-default">
             <div class="panel-heading">Dont know yet

                </div>
                <div class="panel-body"><i style="color:green" class="fa fa-check-square"></i> text text text




                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dont know yet <i class="fa fa-link fa-1x"></i>

                </div>
                <div class="panel-body"><a href="http://bootply.com" class="">Text text text</a>

                </div>
            </div>
          
            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>

                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Absent</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Tardy</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Leavess</strong></span> 37</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong class="">Teaching load</strong></span> 78</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Dont know yet</div>
                <div class="panel-body">  <i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i> 
                    <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>

                </div>
            </div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9" contenteditable="false" style="">
            <div class="panel panel-default">
              <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Records</a></li>
              </ul> 

                <div class="panel-heading">Bio</div>
                <div class="panel-body"> Descriptions.

                </div>
            </div>
            <div class="panel panel-default target">
                <div class="panel-heading" contenteditable="false">Dont know yet</div>
                <div class="panel-body">
                  <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://www.lagunabelairschool.com.ph/images/danenberg.jpg">
            <div class="caption">
              <h3>
                
              </h3>
              <p>
               
              </p>
              <p>
              
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://www.lagunabelairschool.com.ph/images/danenberg.jpg">
            <div class="caption">
              <h3>
                
              </h3>
              <p>
                
              </p>
              <p>
              
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <img alt="300x200" src="http://www.lagunabelairschool.com.ph/images/danenberg.jpg">
            <div class="caption">
              <h3>
                
              </h3>
              <p>
                
              </p>
              <p>
              
              </p>
            </div>
                </div>
                 
            </div>
                     
            </div>
                 
        </div>
              
    </div>
           <div class="panel panel-default">
                <div class="panel-heading">DOnt know yet</div>
                <div class="panel-body"> Description

                </div>
</div></div>


            <div id="push"></div>
        </div>
       
        
        <script src="/plugins/bootstrap-select.min.js"></script>
        <script src="/codemirror/jquery.codemirror.js"></script>
        <script src="/beautifier.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
        <script>
        jQuery.fn.shake = function(intShakes, intDistance, intDuration, foreColor) {
            this.each(function() {
                if (foreColor && foreColor!="null") {
                    $(this).css("color",foreColor); 
                }
                $(this).css("position","relative"); 
                for (var x=1; x<=intShakes; x++) {
                $(this).animate({left:(intDistance*-1)}, (((intDuration/intShakes)/4)))
                .animate({left:intDistance}, ((intDuration/intShakes)/2))
                .animate({left:0}, (((intDuration/intShakes)/4)));
                $(this).css("color",""); 
            }
          });
        return this;
        };
        </script>
        <script>
        $(document).ready(function() {
        
            $('.tw-btn').fadeIn(3000);
            $('.alert').delay(5000).fadeOut(1500);
            
            $('#btnLogin').click(function(){
                $(this).text("...");
                $.ajax({
                    url: "/loginajax",
                    type: "post",
                    data: $('#formLogin').serialize(),
                    success: function (data) {
                        //console.log('data:'+data);
                        if (data.status==1&&data.user) { //logged in
                            $('#menuLogin').hide();
                            $('#lblUsername').text(data.user.username);
                            $('#menuUser').show();
                            /*
                            $('#completeLoginModal').modal('show');
                            $('#btnYes').click(function() {
                                window.location.href="/";
                            });
                            */
                        }
                        else {
                            $('#btnLogin').text("Login");
                            prependAlert("#spacer",data.error);
                            $('#btnLogin').shake(4,6,700,'#CC2222');
                            $('#username').focus();
                        }
                    },
                    error: function (e) {
                        $('#btnLogin').text("Login");
                        console.log('error:'+JSON.stringify(e));
                    }
                });
            });
            $('#btnRegister').click(function(){
                $(this).text("Wait..");
                $.ajax({
                    url: "/signup?format=json",
                    type: "post",
                    data: $('#formRegister').serialize(),
                    success: function (data) {
                        console.log('data:'+JSON.stringify(data));
                        if (data.status==1) {
                            $('#btnRegister').attr("disabled","disabled");
                            $('#formRegister').text('Thanks. You can now login using the Login form.');
                        }
                        else {
                            prependAlert("#spacer",data.error);
                            $('#btnRegister').shake(4,6,700,'#CC2222');
                            $('#btnRegister').text("Sign Up");
                            $('#inputEmail').focus();
                        }
                    },
                    error: function (e) {
                        $('#btnRegister').text("Sign Up");
                        console.log('error:'+e);
                    }
                });
            });
            
            $('.loginFirst').click(function(){
                $('#navLogin').trigger('click');
                return false;
            });
            
            $('#btnForgotPassword').on('click',function(){
                $.ajax({
                    url: "/resetPassword",
                    type: "post",
                    data: $('#formForgotPassword').serializeObject(),
                    success: function (data) {
                        if (data.status==1){
                            prependAlert("#spacer",data.msg);
                            return true;
                        }
                        else {
                            prependAlert("#spacer","Your password could not be reset.");
                            return false;
                        }
                    },
                    error: function (e) {
                        console.log('error:'+e);
                    }
                });
            });
            
            $('#btnContact').click(function(){
                
                $.ajax({
                    url: "/contact",
                    type: "post",
                    data: $('#formContact').serializeObject(),
                    success: function (data) {
                        if (data.status==1){
                            prependAlert("#spacer","Thanks. We got your message and will get back to you shortly.");
                             $('#contactModal').modal('hide');
                            return true;
                        }
                        else {
                            prependAlert("#spacer",data.error);
                            return false;
                        }
                    },
                    error: function (e) {
                        console.log('error:'+e);
                    }
                });
                return false;
            });
            
            /*
            $('.nav .dropdown-menu input').on('click touchstart',function(e) {
                e.stopPropagation();
            });
            */
            
            
            
            
            
        });
        $.fn.serializeObject = function()
        {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name] !== undefined) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };
        var prependAlert = function(appendSelector,msg){
            $(appendSelector).after('<div class="alert alert-info alert-block affix" id="msgBox" style="z-index:1300;margin:14px!important;">'+msg+'</div>');
            $('.alert').delay(3500).fadeOut(1000);
        }
        </script>
        <!-- Quantcast Tag -->
        <script type="text/javascript">
        var _qevents = _qevents || [];
        
        (function() {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
        })();
        
        _qevents.push({
        qacct:"p-0cXb7ATGU9nz5"
        });
        </script>
        <noscript>
        &amp;amp;amp;amp;amp;amp;amp;lt;div style="display:none;"&amp;amp;amp;amp;amp;amp;amp;gt;
        &amp;amp;amp;amp;amp;amp;amp;lt;img src="//pixel.quantserve.com/pixel/p-0cXb7ATGU9nz5.gif" border="0" height="1" width="1" alt="Quantcast"/&amp;amp;amp;amp;amp;amp;amp;gt;
        &amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;gt;
        </noscript>
        <!-- End Quantcast tag -->
        <div id="completeLoginModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                 <h3>Do you want to proceed?</h3>
            </div>
            <div class="modal-body">
                <p>This page must be refreshed to complete your login.</p>
                <p>You will lose any unsaved work once the page is refreshed.</p>
                <br><br>
                <p>Click "No" to cancel the login process.</p>
                <p>Click "Yes" to continue...</p>
            </div>
            <div class="modal-footer">
              <a href="#" id="btnYes" class="btn danger">Yes, complete login</a>
              <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
            </div>
        </div>
        <div id="forgotPasswordModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                 <h3>Password Lookup</h3>
            </div>
            <div class="modal-body">
                  <form class="form form-horizontal" id="formForgotPassword">    
                  <div class="control-group">
                      <label class="control-label" for="inputEmail">Email</label>
                      <div class="controls">
                          <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                          <input type="email" name="email" id="inputEmail" placeholder="you@youremail.com" required="">
                          <span class="help-block"><small>Enter the email address you used to sign-up.</small></span>
                      </div>
                  </div>
                  </form>
            </div>
            <div class="modal-footer pull-center">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>  
              <a href="#" data-dismiss="modal" id="btnForgotPassword" class="btn btn-success">Reset Password</a>
            </div>
            
        </div>
        <div id="upgradeModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                 <h4>Would you like to upgrade?</h4>
            </div>
            <div class="modal-body">
                  <p class="text-center"><strong></strong></p>
                  <h1 class="text-center">$4<small>/mo</small></h1>
                  <p class="text-center"><small>Unlimited plys. Unlimited downloads. No Ads.</small></p>
                  <p class="text-center"><img src="/assets/i_visa.png" width="50" alt="visa"> <img src="/assets/i_mc.png" width="50" alt="mastercard"> <img src="/assets/i_amex.png" width="50" alt="amex"> <img src="/assets/i_discover.png" width="50" alt="discover"> <img src="/assets/i_paypal.png" width="50" alt="paypal"></p>
            </div>
            <div class="modal-footer pull-center">
              <a href="/upgrade" class="btn btn-block btn-huge btn-success"><strong>Upgrade Now</strong></a>
              <a href="#" data-dismiss="modal" class="btn btn-block btn-huge">No Thanks, Maybe Later</a>
            </div>
        </div>
        <div id="contactModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3>Contact Us</h3>
                <p>suggestions, questions or feedback</p>
            </div>
            <div class="modal-body">
                  <form class="form form-horizontal" id="formContact">
                      <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                      <div class="control-group">
                          <label class="control-label" for="inputSender">Name</label>
                          <div class="controls">
                              <input type="text" name="sender" id="inputSender" class="input-large" placeholder="Your name">
                          </div>
                      </div>
                      <div class="control-group">
                          <label class="control-label" for="inputMessage">Message</label>
                          <div class="controls">
                              <textarea name="notes" rows="5" id="inputMessage" class="input-large" placeholder="Type your message here"></textarea>
                          </div>
                      </div>
                      <div class="control-group">
                          <label class="control-label" for="inputEmail">Email</label>
                          <div class="controls">
                              <input type="text" name="email" id="inputEmail" class="input-large" placeholder="you@youremail.com (for reply)" required="">
                          </div>
                      </div>
                  </form>
            </div>
            <div class="modal-footer pull-center">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>     
                <a href="#" data-dismiss="modal" aria-hidden="true" id="btnContact" role="button" class="btn btn-success">Send</a>
            </div>
        </div>
        
        
        
  
  <script src="/plugins/bootstrap-pager.js"></script>
</div>



</body>
</html>
