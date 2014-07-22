<?php 
	
	
	session_start() ;
	echo "after session start </br> ";


	$_SESSION['username']=$_POST['user'];
	$_SESSION['password']=$_POST['pass'];
	$_SESSION['id']=0;
	$_count=1;
	$db=mysqli_connect('localhost','root','');
	mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

		if(($_SESSION['username']== 'ggd') and ($_SESSION['password']== '12345'))
			{
				$_SESSION['id']=1;
				
				$query = "INSERT INTO customer_info ( user_name, user_password)
					VALUES 
					('ggd','12345')";
				mysqli_query($db,$query);
				
				header('location:temp.php');
			}
		else
			{
				echo " invalid user ";
				exit();
			}

		

 ?>