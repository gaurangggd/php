<?php 
/*	
	$db = mysqli_connect('localhost','root','');

	if(mysqli_connect_errno())
		{
			echo "failed to connect to database ".mysqli_connect_error();
		}
		
		// create database
	
	$query="create database if not exists moviesite";
	mysqli_query($db,$query);

	if(mysqli_query($db,$query))
		{
			echo "database successfully created";
		}
	else
		{
			echo "error creating database ".mysqli_error($db);
		}
 		
 		//create table movie

		$query="create table movie 

				( movie_id integer unsigned not null auto_increment,
					movie_name varchar(50) not null,
					movie_type tinyint not null default 0,
					movie_year smallint not null default 0,
					movie_leadactor integer unsigned default 0,
					movie_director integer unsigned default 0,

					primary key(movie_id),
					
					key movie_type(movie_type,movie_year)
					)"; // specify engine if error occurs
		mysqli_query($db,$query);

		// create table movie type

		$query="create table movie_type
				(movietype_id tinyint unsigned not null auto_increment,
					movietype_label varchar(50),

					primary key(movietype_id)
					)";
	mysqli_query($db,$query);

		// create table people

		$query="create table people
				(people_id tinyint unsigned not null auto_increment,
					people_fullname varchar(50) not null,
					people_isactor tinyint(1)not null default 0,
					people_isdirector tinyint(1)not null default 0,


					primary key(people_id)
					)";
	mysqli_query($db,$query);

		echo "movie database successfully created ";

*/
 ?>