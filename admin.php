<!DOCTYPE HTML>
<html>

<head>
  <title>log_in</title>
  <link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>
<script>
function validateform(){
			
		var x = document.getElementById("subject").value;
		var re=/^[\w ]+$/;
		if (x == null || x == "") {
        		alert(" subject must be filled out");
				myForm2.name.focus();

        		return false;
   			}
		if(!re.test(x))
			{
				alert("Error:subject contains INVALID characters");
				myForm2.name.focus();
				return false;
			}
			 x = document.getElementById("author").value;
		if (x == null || x == "") {
        		alert(" author must be filled out");
				myForm2.name.focus();

        		return false;
   			}
		if(!re.test(x))
			{
				alert("Error:author contains INVALID characters");
				myForm2.name.focus();
				return false;
			}
		x = document.getElementById("title").value;
		if (x == null || x == "") {
        		alert(" title must be filled out");
				myForm2.title.focus();

        		return false;
   			}
		x = document.getElementById("desc").value;
		if (x == null || x == "") {
        		alert(" description must be filled out");
				myForm2.desc.focus();

        		return false;
   			}


		var z=myForm2.file.value;
		if (z == null || z == "") {
        		alert(" document must be uploaded");
				myForm2.file.focus();

        		return false;
   			}

		var r = confirm("Upload Document?");
		if (r == true) {alert("Document Uploaded");
		return true;
		} else {
		return false;
	
			
			return true;
		
			
			
}
	</script>

<body>
	   <div align="right">
				<form action = 'index.php' method = 'post' class="frm" >
					 <input type = 'submit'  name = 'submit' value = 'LogOut' class="submit" >
				 </form>
		</div>

	<div class="login" ><center>
	<h2 style="color:white; background-color:royalblue">UPLOAD</h2>
    <form method="post" class="form_settings" name="myForm2" onsubmit="return validateform()" action="upload.php" enctype="multipart/form-data">
		<p style="margin-left:45px;text-align:left; color:black">Document Type:</p>
		<select id="category" name="category">
			<option value="doc" selected>doc</option>
			<option value="image">Image</option>
			<option value="pdf">Pdf</option>
			<option value="ppt">Ppt</option>
			<option value="text">Text</option>
			</select></br></br>

		<input type="text"  id="subject" name="subject" placeholder="Subject*" required="required" maxlength="50"/><br><br>
		<input type="text"  id="title" name="title" placeholder="Title*" required="required" maxlength="50" /><br><br>
<textarea rows="3" cols="75" name="desc" id="desc" placeholder="Write description here..." maxlength="100"></textarea>		
<input type="text"  id="author" name="author" placeholder="Author*" required="required" maxlength="100" /><br><br>
				<p style="margin-left:45px;text-align:left; color:black">Upload document here:</p>
		<input type="file" name="file" id="file" accept="application/ppt,application/doc,image/jpeg,image/png,image/tiff,image/bmp,image/gif" />

        <input type="submit"  class="submit1" value="UPLOAD" name="submit" >
        <input type="submit"  class="submit1" value="UPDATE" name="update" >
    </form>
</center>
</div>
</body>
</html>
