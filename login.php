<!DOCTYPE HTML>
<html>

<head>
  <title>log_in</title>
  <link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>
<script>
function validateform(){
			
			var x2 = document.forms["myForm2"]["email"].value;
			var atpos = x2.indexOf("@");
			var dotpos = x2.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x2.length) {
				alert("Not a valid e-mail address");
				myForm2.email.focus();
				return false;
			}
			
			var z = document.getElementById("password").value;
        	if(z == null || z == ""||z.length<6){
        		alert("PASSWORD is must 6 characters long");
				myForm2.password.focus();
        		return false;
        	}
		
			
			
			return true;
		
			
			
}
	</script>

<body>
	<div class="login" ><center>
	<h2 style="color:white; background-color:royalblue">LOGIN</h2>
    <form method="post" class="form_settings" name="myForm2" onsubmit="return validateform()" action="check.php">
		<input type="email" id="email" name="email" placeholder="Username*" required="required" /><br><br>
		<input type="password"  id="password" name="password" placeholder="Password*" required="required" /><br><br>
        
    </form>
	
</center>
</div>
</body>
</html>
