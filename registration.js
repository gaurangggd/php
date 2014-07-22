// var formValid = false;

$(document).ready(function(e)
{

	$('#myform').submit(function(e)
	{		
		
			// e.preventDefault();

		
			var fname = $(this).find('input[name="fName"]').val();
			var lname=$(this).find('input[name="lName"]').val();
			var address=$(this).find('input[name="address"]').val();
			var username=$(this).find('input[name="userName"]').val();
			var password=$(this).find('input[name="password"]').val();
			var vpassword=$(this).find('input[name="vpassword"]').val();
			var contact=$(this).find('input[name="contact"]').val();

			var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
			if(reg.test(username)===false)
			{	
				alert("enter valid email address ");
				return false;
			}

			var regNo = /^[0-9]*$/
			if(regNo.test(contact)===false)
			{
				alert("enter valid phone number");
				return false;
			} 


			if ((fname==null || fname=="") || (lname==null || lname=="") || (address==null || address=="") && 
				(password==null || password=="") || (username==null || username==""))
			{
				alert("All Field must be filled out");
				return false;
			}

			if(password != vpassword)
			{
				alert("enter correct password");
				return false;
			}

			// formValid = true;
			// $(this).submit();

			return true;
	});

});