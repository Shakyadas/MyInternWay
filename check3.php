
<style>
.green{color:#2FC332;}
.red{color:#D60202;font-weight: bold}
.g{color:green;
	font-style: italic;text-decoration: underline;}	
</style>
<?php

$link=mysqli_connect("localhost","root","","intern") or die("Database can not be connected."); 

if(!empty($_POST['username'])){
	
	
	$result=mysqli_query($link,"select * from job where jid='".$_POST["username"]."'") or die("failed to query database".mysqli_error($link));
	if(mysqli_num_rows($result)>0)
	{
		echo "<span class='glyphicon glyphicon-remove red'> Username Not Available. </span>";
		$v=$_POST["username"].mt_rand(0,10000);
		
		$select = mysqli_query($link,"select * from job where jid='$v'");
		{
		if(mysqli_num_rows($select)>0)
		{
		$vv=$_POST["username"].mt_rand(0,50000);
		$select2 = mysqli_query($link,"select * from job where jid='$vv'");
		{
		if(mysqli_num_rows($select2)>0)
		{
		$vvv=$_POST["username"].mt_rand(0,100000);
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $vvv &#39; </span>";
		
		echo "<script>document.getElementById('ljname').style.display='none'</script>";
		echo "<script>document.getElementById('jname').style.display='none'</script>";
		echo "<script>document.getElementById('ljdesc').style.display='none'</script>";
		echo "<script>document.getElementById('jdesc').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lpost').style.display='none'</script>";
		echo "<script>document.getElementById('post').style.display='none'</script>";
		echo "<script>document.getElementById('lsal').style.display='none'</script>";
		echo "<script>document.getElementById('sal').style.display='none'</script>";
		
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		
			
			
		
		
		
		}
	else{		
		
		echo "<script>document.getElementById('ljname').style.display='none'</script>";
		echo "<script>document.getElementById('jname').style.display='none'</script>";
		echo "<script>document.getElementById('ljdesc').style.display='none'</script>";
		echo "<script>document.getElementById('jdesc').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lpost').style.display='none'</script>";
		echo "<script>document.getElementById('post').style.display='none'</script>";
		echo "<script>document.getElementById('lsal').style.display='none'</script>";
		echo "<script>document.getElementById('sal').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		}
		
		}
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'>Try This name= &#39; $vv &#39; </span>";
		
		echo "<script>document.getElementById('ljname').style.display='none'</script>";
		echo "<script>document.getElementById('jname').style.display='none'</script>";
		echo "<script>document.getElementById('ljdesc').style.display='none'</script>";
		echo "<script>document.getElementById('jdesc').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lpost').style.display='none'</script>";
		echo "<script>document.getElementById('post').style.display='none'</script>";
		echo "<script>document.getElementById('lsal').style.display='none'</script>";
		echo "<script>document.getElementById('sal').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";	
		}
		else
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $v &#39; </span>";
		
		echo "<script>document.getElementById('ljname').style.display='none'</script>";
		echo "<script>document.getElementById('jname').style.display='none'</script>";
		echo "<script>document.getElementById('ljdesc').style.display='none'</script>";
		echo "<script>document.getElementById('jdesc').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lpost').style.display='none'</script>";
		echo "<script>document.getElementById('post').style.display='none'</script>";
		echo "<script>document.getElementById('lsal').style.display='none'</script>";
		echo "<script>document.getElementById('sal').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		}
		}
	}
	else
	{
		echo "<span class='glyphicon glyphicon-ok g'>Username Available.</span>";	
		
		echo "<script>document.getElementById('ljname').style.display='block'</script>";
		echo "<script>document.getElementById('jname').style.display='block'</script>";
		echo "<script>document.getElementById('ljdesc').style.display='block'</script>";
		echo "<script>document.getElementById('jdesc').style.display='block'</script>";
		echo "<script>document.getElementById('lcity').style.display='block'</script>";
		echo "<script>document.getElementById('city').style.display='block'</script>";
		echo "<script>document.getElementById('lpost').style.display='block'</script>";
		echo "<script>document.getElementById('post').style.display='block'</script>";
		echo "<script>document.getElementById('lsal').style.display='block'</script>";
		echo "<script>document.getElementById('sal').style.display='block'</script>";
		echo "<script>document.getElementById('submit').style.display='block'</script>";
	}
	
	
}


else
{
		
		echo "<script>document.getElementById('ljname').style.display='none'</script>";
		echo "<script>document.getElementById('jname').style.display='none'</script>";
		echo "<script>document.getElementById('ljdesc').style.display='none'</script>";
		echo "<script>document.getElementById('jdesc').style.display='none'</script>";
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		echo "<script>document.getElementById('lpost').style.display='none'</script>";
		echo "<script>document.getElementById('post').style.display='none'</script>";
		echo "<script>document.getElementById('lsal').style.display='none'</script>";
		echo "<script>document.getElementById('sal').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
}

?>