
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>Employee Registration</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">
    <style>
        body{
            background: url("img/intro-carousel/28.jpg");
            background-size:cover;
            background-repeat:repeat-y;
            color:black;
        }
        .box{
            background: rgba(0,0,0,0.1);
        }
        .add_employee_form span{
            color:red;
        }
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
    </style>
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	
	<script>
		
		function usernamecheck() {
			
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check.php",
	data:'username='+$("#eid").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
		
	},
	
	error:function (){}
	});
}
</script>
	
	
    
</head>
<body> 
	<br><br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">New Employee Registration</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeadmin.php">Home</a></li>
          <li class="menu-active"><a href="empreg.php">Employee Registration</a></li>
          <li><a href="studentreg.php">Student Registration</a></li>
		 <li class="menu-has-`children"><a href="studentlogin.php">Login</a>
            <ul>
              <li><a href="emplogin.php">Employee</a></li>
              <li><a href="studentlogin.php">Student</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header">Let's Welcome a new Member</h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form">
    <form action="" method="POST">
        <h4 class="page-header" align="center">Fill The Form</h4>
        <div class="box">
            <div class="form-group">  
                  <div class="row">

                     <div class="col-md-2"><label id="leid">Employee ID<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="eid" placeholder="Enter Employee ID" name="eid" onBlur="usernamecheck()" required>
						 <span id='user-availability-status'></span>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="right"></span> </div>                 
                     <div class="col-md-3 text-right"><label id="lename" style="display: none">&nbsp;&nbsp;Employee&nbsp;Name<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="ename" placeholder="Enter Your name" name="ename" pattern=[A-Za-z]{2,30} title="Only alphabet" style="display: none" required></div>    
                       
                  </div>
                
                  <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3"><p id="errfname"></p> </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3"><p id="errlname"></p></div>
                  </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2 text-right"><label id="lcname" style="display: none">&nbsp;&nbsp;Company Name<span>&#42;</span></label></div>
                    <div class="col-md-3"><input type="text" class="form-control" id="cname" placeholder="Enter Company Name" name="cname" style="height:45px;display:none" required></div>
					
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <div class="col-md-2 text-right"><label id="lpos" style="display: none">&nbsp;&nbsp;Job Position<span>&#42;</span></label></div> &nbsp; &nbsp; &nbsp;<div><input type="text" class="form-control" id="pos" placeholder="Enter Job Position" name="pos" required style="display: none"></div>
					
					
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                   
                    
                </div>
              
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2 text-right">
                    <label id="lcity" style="display: none">City Name<span>&#42;</span></label></div>
                    <div class="col-md-3">
                        <input list="country_list" name="city" id="city" class="form-control" placeholder="Enter City name" required style="display: none">
                        <datalist id="country_list">
                        <?php  include("city_list.php"); ?>
                        </datalist>
                    </div>
					 
                    <div class="col-md-2 text-right"><label id="lpass" style="display: none">Password<span>&#42;</span></label> </div>
                    <div class="col-md-4"><input type="password" class="form-control" name="pass" id="pass" placeholder="Password" style="display: none" required></label>
                    </div> 
					
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erremail"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p id="errnationality"></p></div>
                </div>
            </div>

             <div class="form-group">
                <div class="row">
                  
                 </div>
            </div>
        </div>
        
        <br><br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit" style="display: none">Register</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
    </form>
    </div>
    
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/main.js"></script>
	
	
</body>
</html>



<?php

if(isset($_POST['submit']))
{
    $eid = $_POST['eid'];
    $ename = $_POST['ename'];
   
    $cname = $_POST['cname'];
    
    $pos = $_POST['pos'];
   
    $city = $_POST['city'];
    
    $pass = $_POST['pass'];
	$scu='ghjklcvbnm';
	$su='qwertyuiopedfvbnpojhg';
	$pd=$su.sha1($_POST['pass']).$scu;
	
    $conn = mysqli_connect("localhost","root","","intern") or die("failed to connect database");

    $eid = mysqli_real_escape_string($conn,$eid);
	$ename = mysqli_real_escape_string($conn,$ename);
	
	$cname = mysqli_real_escape_string($conn,$cname);
	
	$pos = mysqli_real_escape_string($conn,$pos);
	
	$city = mysqli_real_escape_string($conn,$city);
	
	$pd = mysqli_real_escape_string($conn,$pd);

    $result = mysqli_query($conn,"insert into employee values ('$eid','$ename','$cname','$pos','$city','$pd')") or die("Query Failed".mysqli_error($conn));
	echo "<script>alert('Registration Successfull')</script>";
	echo "<script>location.href='emplogin.php'</script>";
}

?>
