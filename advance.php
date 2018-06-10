<html>
       <head>
             <title> My search engine </title>
			   <link rel="stylesheet" type="text/css" href="style.css" />
			   </head>
<script>
function fetch_select(){
	var type=document.getElementById("category").value;
				 var xhttp=null;
			 xhttp = new XMLHttpRequest();
			 if(xhttp){      

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		document.getElementById("inp").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "select.php?q="+type, true);
  xhttp.send();   

}}
function find_here(){
var show=document.getElementById("search").value;
	var string=document.getElementById("category").value+" "; 
string+=document.getElementById("search").value;
		if ( show== null || show == ""||show=="dd/mm/yyyy") {
        		alert("enter keywords");
				myForm2.search.focus();

        		return ;
   			}
			        	

			 var xhttp=null;
			 xhttp = new XMLHttpRequest();
			 if(xhttp){      

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		document.getElementById("docs").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "find_advance.php?q="+string, true);
  xhttp.send();   

			 }else {
				 alert("error");
			 }
}
</script>
       <body>
	   <div align="right">
				<form action = 'login.php' method = 'post' class="frm" >
					 <input type = 'submit'  name = 'submit' value = 'Login' class="submit" >
				 </form>
		</div>
	   <div id ="middle" align="center">
					<div class="login" ><center>
	<h2 style="color:white; background-color:royalblue">Advanced</h2>
    <form class="form_settings" name="myForm2">
		<p style="margin-left:45px;text-align:left; color:black">Search Type:</p>
		<select id="category" name="category" onchange="fetch_select()">
			<option value="author" selected>Author</option>
			<option value="doc_type">Document Type</option>
			<option value="subject">Subject</option>
			<option value="doc_title">Title</option>
			<option value="creation_date" >creation_date</option>
			</select></br></br>
<div id="inp"><input type="text"  id="search" name="search" placeholder="Search*" required="required" maxlength="100"/><br><br></div>
<button type = 'button' name = 'submit'class="submit1"onclick="find_here()" >Search</button>

    </form>
</center>
</div>
				 <div id = "docs" align="left">content will appear here</div>



			 </div>
       </body >
</html > 




