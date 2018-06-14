
<style>
.green{color:#2FC332;}
.red{color:#D60202;font-weight: bold}
.g{color:green;
	font-style: italic;text-decoration: underline;}	
</style>
<?php

$link=mysqli_connect("localhost","root","","intern") or die("Database can not be connected."); 

if(!empty($_POST['username'])){
	
	
	$result=mysqli_query($link,"select * from employee where eid='".$_POST["username"]."'") or die("failed to query database".mysqli_error($link));
	if(mysqli_num_rows($result)>0)
	{
		echo "<span class='glyphicon glyphicon-remove red'> Username Not Available. </span>";
		$v=$_POST["username"].mt_rand(0,10000);
		
		$select = mysqli_query($link,"select * from employee where eid='$v'");
		{
		if(mysqli_num_rows($select)>0)
		{
		$vv=$_POST["username"].mt_rand(0,50000);
		$select2 = mysqli_query($link,"select * from employee where eid='$vv'");
		{
		if(mysqli_num_rows($select2)>0)
		{
		$vvv=$_POST["username"].mt_rand(0,100000);
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $vvv &#39; </span>";
		echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		}
	else{		
		echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		}
		
		}
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'>Try This name= &#39; $vv &#39; </span>";
		echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		}
		else
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='g'> Try This name= &#39; $v &#39; </span>";
		echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
		}
		}
	}
	else
	{
		echo "<span class='glyphicon glyphicon-ok g'>Username Available.</span>";	
		echo "<script>document.getElementById('lename').style.display='block'</script>";
		echo "<script>document.getElementById('ename').style.display='block'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='block'</script>";
		echo "<script>document.getElementById('cname').style.display='block'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='block'</script>";
		echo "<script>document.getElementById('pos').style.display='block'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='block'</script>";
		echo "<script>document.getElementById('city').style.display='block'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='block'</script>";
		echo "<script>document.getElementById('pass').style.display='block'</script>";
		echo "<script>document.getElementById('submit').style.display='block'</script>";
	}
	
	
}


else
{
		echo "<script>document.getElementById('lename').style.display='none'</script>";
		echo "<script>document.getElementById('ename').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcname').style.display='none'</script>";
		echo "<script>document.getElementById('cname').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpos').style.display='none'</script>";
		echo "<script>document.getElementById('pos').style.display='none'</script>";
		
		echo "<script>document.getElementById('lcity').style.display='none'</script>";
		echo "<script>document.getElementById('city').style.display='none'</script>";
		
		echo "<script>document.getElementById('lpass').style.display='none'</script>";
		echo "<script>document.getElementById('pass').style.display='none'</script>";
		echo "<script>document.getElementById('submit').style.display='none'</script>";
}

?>