<?php
	session_start();
	if(isset($_POST['jid']) && isset($_SESSION['username']))

		{
		$link=mysqli_connect("localhost","root","","intern") or die("Database can not be connected.");
		$username=$_SESSION['username'];

		if($result=mysqli_query($link,"update job set uname='0' where jid='".$_POST["jid"]."'") or die("failed to query database".mysqli_error($link)))
			echo "APPLICATION REQUEST DELETED SUCCESSFULLY";
		else 
			echo "SOMETHING WENT WRONG";

		}
	
	
	else 
	header("location:studentlogin.php");

?>