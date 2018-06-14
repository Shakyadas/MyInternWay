<?php
session_start();
if(isset($_SESSION['empname'])){
    session_unset();
    session_destroy();
}
	echo"<script>location.href='emplogin.php'</script>";	

?>