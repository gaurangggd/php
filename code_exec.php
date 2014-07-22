<?php 
	
	
	session_start();
	
	//inclued('connection.php');

	$db=mysqli_connect('localhost','root','');
	mysqli_select_db($db,'moviesite');

	
	$fname=$_POST['fName'];
	$lname=$_POST['lName'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$username=$_POST['userName'];
	$contact=$_POST['contact'];

	$query="insert into member (fname,lname,address,username,password,contact)
				values
			('".$fname ."' , '" .$lname . "' , '".$address."' , '".$username."' ,
			 '".$password."' , '".$contact."')";


	echo mysqli_query($db,$query) ;
		
		header('location: registration.php?remarks=success');
		
		mysqli_close($db);

 ?>