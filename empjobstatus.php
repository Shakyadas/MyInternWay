<?php
	session_start();
	if(!isset($_SESSION['empname'])){
		header("location:emplogin.php");
	}
	
	$username=$_SESSION['empname'];
	
	
?>

<!DOCTYPE html>
<html>
<head>
	
	
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
   <link href="img/job.png" rel="icon">
   <link href="img/job.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
 
  
	
	<link href="css/style.css" rel="stylesheet">
	
    <style>
		
		
        body{
            background: url("img/intro-carousel/34.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            color:black;
        }
		
		table,th,td{
			margin: auto;
			border: none;
			border-radius: 20px;
			border-collapse: collapse;
			text-align: center;
			font-size: 16px;
			table-layout: auto;
			background-color:#043E63;
			color: black;
			margin-top: 100px;
		}
		
		th,td{
			padding: 20px;
			opacity: 0.9;
			color: black;
			
		}
		
		th{
			background-color: darkblue;
			color: white;	
		}
		
		
		td:hover
		{
			background-color: cornflowerblue;
			color: black;
		}
		
		tr:hover{
			background-color: black;
		}
		
		
		.pic{
	width:250px;
	height:250px;
}
.picbig{
	position: relative;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
}
.pic:hover + .picbig{
	width:500px;
	height: 500px;
}
		
		
		
    </style>
</head>
<body id="back">
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto" >Internship List Is Here</a></h1>
      </div>
		
       <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="empwelcome.php">Employee Home</a></li>
          <li><a href="jobpost.php">Post A Internship</a></li>
          <li class="menu-active"><a href="empjobstatus.php">Internship Application Status</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
	
    <div style="text-align:center">
        <h3 >Here is The Internship List Posted By You</h3>
		<div align="center"><button type="button" class="btn btn-primary" onClick="window.print();"><span class="glyphicon glyphicon-print"></span>  Print Details </button></div>
		<form method="POST">
    <div style="text-align: right">
	<label>Search: </label>	
    <input type="text" placeholder="Type To Search" name="key" autocomplete="off" style="border-right:none; border-left: none; border-top:none;outline: none;border-bottom: 1px solid white;background-color:transparent; color: black"  >
			
			 <button type="submit" class="btn btn-info btn-xs" name="sub" >
     			 <span class="glyphicon glyphicon-search"></span> Search
   					 </button>
		</form>
		
		
		</div>
    </div>
	
	
	
	
   <table style="width:100%;"> 
	   
        <thead>
            <tr>
                <th style="width:10%;"><h4>Internship Id</h4></th>
				<th style="width:10%;"><h4>Employee Id</h4></th>
                <th style="width:10%;"><h4>Company Name</h4></th>
				<th style="width:10%;"><h4>Internship Description</h4></th>
				<th style="width:10%;"><h4>Internship Location</h4></th>
				<th style="width:10%;"><h4>Internship Post</h4></th>
				<th style="width:10%;"><h4>Internship Salary</h4></th>
				<th style="width:10%;"><h4>Username</h4></th>
                <th style="width:10%;"><h4>Action</h4></th>
            </tr>
        </thead>
        <tbody>
			
			<script>
			
			function cancel(jid)
				{	//alert(jid);
					var ajx=new XMLHttpRequest();
			ajx.onreadystatechange=function()
			{
				if ( this.readyState == 4 && this.status == 200 )
				{
					alert(this.responseText);
				}
			}
			ajx.open( "POST", "cancel2.php", true );
			ajx.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
			ajx.send("jid=" +jid);
				}
	</script>
			
			
            <?php
			
			
			
			
			if(isset($_POST['sub']))
				{
						$link=mysqli_connect("localhost","root","","intern") or die($link);
						$k=$_POST['key'];
	
				$k=mysqli_real_escape_string($link,$k);
				//$x= $_COOKIE['x'];
				$result=mysqli_query($link,"select * from job where cname like '%".$k."%' or jdesc like '%".$k."%'  or jpost like '%".$k."%'  or loc like '%".$k."%'  or sal like '%".$k."%' ") or die("failed to query database".mysqli_error($link));
                if ($result->num_rows > 0) 
				{
                    while($row = $result->fetch_assoc()) 
					{
						$jid=$row['jid'];
						
                         echo "<tr><td><form action='' method='post'>".$row['jid']."<td>".$row['eid']."<td>".$row['cname']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['jpost']."<td>".$row['sal']."<td>".$row['uname']."</td><td>".
                            
                            "<button type='submit' class='btn btn-xs btn-danger' name='_view2' id='_view2' onclick=cancel('".$jid."')>Cancel Post</button></form> <br> <br>";
						if(isset($_POST['_view']))
						 {
							
							
							
							
						echo"<script>alert('Login First')</script>";
						echo "<script>location.href='mainjobs.php'</script>";
						 }
                    }
                }
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
				
				
	
			}
			
			else if(!isset($_POST['sub']))
			{
				$conn=mysqli_connect("localhost","root","","intern") or die("connection failed".mysqli_connect_error());
                $query = "select * from job where eid='$username'";
				
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
						
						$jid=$row['jid'];
                        echo "<tr><td><form action='' method='POST'>".$row['jid']."<td>".$row['eid']."<td>".$row['cname']."<td>".$row['jdesc']."<td>".$row['loc']."<td>".$row['jpost']."<td>".$row['sal']."<td>".$row['uname']."</td><td>".
                            "<button type='submit' class='btn btn-xs btn-danger' name='_view2' id='_view2' onclick=cancel('".$jid."')>Cancel</button></form> <br> <br>";
						 if(isset($_POST['_view']))
						 {
							 
							 
	
	
							 
							 
							 
							 
						 }
						
                    }
                }
				
				
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
				}
				
			}  
			
			
                
                else
				{
                    echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Job Found</h4></td></tr>";
                }
			   
			   ?>
			
		

        </tbody>
    </table>
    </form>
	
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








?>
