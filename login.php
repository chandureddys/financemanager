<?php

include 'includes/common_class.php';
$obj=new common;


if(isset($_POST['signup']))
{
    
  $table_name='signup';
  $values="'".$_POST['email']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['passwd']."'";
  $columnnames="emailid,firstname,lastname,password";
  $msg=$obj->signupinsert($table_name,$columnnames,$values);

}

if(isset($_POST['submit']))
{
    
    $table_name='login';
    $where="emailid='".$_POST['username']."' && password='".$_POST['password']."'";
    $result=$obj->loginvalid($table_name,$where);
    if(isset($result['emailid']))
        {

            $_SESSION["username"]=$result['emailid'];
            header("Location:index.php");
        }


 else
 {
    $msg="inavlid emailid and password";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Example of Bootstrap 3 Static Navbar</title>
   <link rel="stylesheet" href="css//css/bootstrap.min.css">
   <link rel="stylesheet" href="css/css/bootstrap-theme.min.css">
   <script src="css/js/jquery-1.11.2.js"></script>
  <script src="css/js/bootstrap.min.js"></script>

   <style type="text/css">
    footer {
            color: #666;
            
            padding: 17px 0 18px 0;
            border-top: 1px solid #000;
            bottom:0px;
            left:0px;
            right:0px;
            margin-bottom:0px;
            position: fixed;
 
        }
        footer a {
            color: #999;
        }
        footer a:hover {
            color: #efefef;
        }
        .footerp{
        	text-align: center;
        }

   </style>
<script language="javascript">
  
function valid()
{


var $fname=$("#firstname").val();
var $lname=$("#lastname").val();
var $pass=$("#password").val();
var $mail=$("#email").val();

if($mail=="")
{
  $("#mailid").html("pls enter email id");
  $("#email").focus();
  return false;
  }
  else
  {
  $("#mailid").hide();
  }

if($fname=="")
{
  $("#fnames").html("pls enter username");
  $("#firstname").focus();
  return false;
  }
  else
  {
  $("#fnames").hide();
  }
  
if($lname=="")

  {
  $("#lnames").html("pls enter username");
  $("#lastname").focus();
  return false;
  }
  else
  {
  $("#lnames").hide();
  }
  
if($pass=="")
{
  $("#passw").html("pls enter username");
  $("#password").focus();
  return false;
  }
  else
  {
  $("#passw").hide();
  }
  

}
    </script>

</head> 
<body>
<div class="bs-example">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Chandu</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
            	<li><a href="#">Sign Up</a></li>
                
            </ul>
        </div>
    </nav>
</div>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="login.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>

                               
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit">
                                      
                                      <?php 

                                      if(isset($msg))
                                      {

                                        echo "email id and password doesnot matched";

                                      }
                                      ?>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="post" action="#">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                <div id="#errorBox"></div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" id="email">
                                        <label id="mailid"></label>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name" id="firstname">
                                        <label id="fnames"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" id="lastname">
                                        <label id="lnames"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password" id="password" >
                                        <label id="passw"></label>
                                    </div>
                                </div>
                                                                   

                                
                                        <input type="submit" value="Register" name="signup" id="sub" onclick="return valid()"/>
                                        
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    
<footer>
      <div class="container">
        <p class="footerp">All Copy Rights are Reserved <a href="http://chandrasekharreddy.me/" rel="author">Chandrasekhar</a>. Uses <a href="http://twitter.github.com/bootstrap/" rel="external">Twitter Bootstrap</a> </p>
      </div>
    </footer>
</body>
</html>                                		