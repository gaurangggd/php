<html>
	<head>
		<title> registration page </title>


	</head>
	<body>
		<form id="myform" name="myform" action="code_exec.php" method="post">
		<table width = "274" border="1" align="center" cellpadding="2">
		<tr>
			<td colspan ="2">
				<div align = "center">
				
				<?php
					$remarks=$_GET['remarks'];
					if($remarks==null and $remarks=="")
					{
						echo "register here";
					}
					if($remarks=='success')
					{
						echo "registration success";
					}

				?>
				
				</div>
			</td>
		</tr>
		<tr>
			<td><div align="right">first name : </div></td>
			<td><input type= "text" name = "fName"/></td>
		</tr>

		<tr>
			<td><div align="right">last name : </div></td>
			<td><input type= "text" name = "lName"/></td>
		</tr>

		<tr>
			<td><div align="right">address : </div></td>
			<td><input type= "text" name = "address"/></td>
		</tr>	

		<tr>
			<td><div align="right">user name : </div></td>
			<td><input type= "text" name = "userName"/></td>
		</tr>

		<tr>
			<td><div align="right">password : </div></td>
			<td><input type= "password" name = "password"/></td>
		</tr>

		<tr>
			<td><div align="right">verify password : </div></td>
			<td><input type= "password" name = "vpassword"/></td>
		</tr>

		<tr>
			<td><div align="right">contact :  </div></td>
			<td><input type= "text" name = "contact"/></td>
		</tr>



		 <tr>
			<td><div align="right"></div></td>
			<td><input name="submit" type="submit" value="Submit" /></td>
		</tr>
	
	</table>
</form>
	<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="registration.js"></script>
</body>
</html>