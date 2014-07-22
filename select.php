<?php 
	
	$db=mysqli_connect('localhost','root','');
	mysqli_select_db($db,'moviesite');

	$query = 'select movie_name , movie_type from 
			movie where movie_year > 2000 order by movie_type';

 	$result=mysqli_query($db,$query);

 	while($row = mysqli_fetch_array($result))
 	{
 		extract($row);
 		 echo $movie_name ." -- ". $movie_type;
 		 echo "</br>";
 	}

 ?>