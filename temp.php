<?php
		session_start();

		$myFavMovie=urlencode(' learn php ');
		
		echo "<a href=\" moviesite.php?favMovie=$myFavMovie\">";
		echo " click here to see my favourite movie ";
		echo "</a>";

		echo"</br>";


		echo "<a href=\" moviesite.php?sorted=true\">";
		echo " click here to see my 10 favourite movie ";
		echo "</a>";
?>