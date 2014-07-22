<?php 

	session_start();

	echo " welcome to our site ";
	echo  $_SESSION['username'];
	echo "</br>";
	//////////////////////////////////////////////////////////////


 ///////////////////////////////////////////////////////////////////
	$favMovies = array( "1"=>"movie3 ","3"=>"movie9 ","4"=>"movie2 ","2"=>"movie1 ","5"=>"movie5 ",
				"6"=>"movie7 ","7"=>"movie6 ","8"=>"movie10 ","9"=>"movie4 ","10"=>"movie8 ",);
	

	if(isset($_GET['favMovie']))
		{
			echo "your favourite movie is ";
			echo $_GET['favMovie'];
		}
	else
		{
			echo "my favourite 10 movies are ";
			if(isset($_GET['sorted']))
			{
				ksort($favMovies);
			}
			echo "<ol>";
			foreach ($favMovies as $k => $tempValue) 
			{
				echo "<li>";
				echo $tempValue;
				echo "</li>";
			}
			echo "</ol>";
		}
 ?>