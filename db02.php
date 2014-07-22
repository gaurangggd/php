<?php 

 $db=mysqli_connect('localhost','root','');
 mysqli_select_db($db,'moviesite');

 // insert statements

 $query = "insert into movie (movie_id ,
					movie_name ,
					movie_type ,
					movie_year, 
					movie_leadactor, 
					movie_director ) 
				values
				(1,'movieab',5,2003,1,2),
				(2,'moviecd',2,1999,3,4),
				(3,'movieabef',4,1991,5,6),
				(4,'movieabgh',5,2001,1,2)";

				mysqli_query($db,$query); 

/* $query = "insert into movie_type (movietype_id ,
					movietype_label ) 
				values
				(1,'war'),
				(2,'adventure'),
				(3,'comedy'),
				(4,'horror')";

				mysqli_query($db,$query);

$query = "insert into people (people_id ,
					people_fullname,
					people_isactor,
					people_isdirector ) 
				values
				(1,'actor1',1,0),
				(2,'actor2',1,0),
				(3,'director1',0,1),
				(4,'director2',0,1)";

				mysqli_query($db,$query);*/

			echo "database successfully populated";
		

 ?>