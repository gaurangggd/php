<?php 
	session_unset()
 ?>

 <html>
 	<head>
 		<title>please login</title>
 	</head>
 	<body>
 		<form action="movie1.php" method="post">
 		<p> enter name : 
 			<input type="text" name="user">
 		</p>
 		<p>
 			enter password :
 			<input type="password" name="pass">
 		</p>
 		<p>
 			<input type="submit" name ="submit" value = "submit">
 		</p>
		</form>
	</body>
</html>