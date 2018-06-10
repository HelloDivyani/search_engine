<?php if(session_start())session_destroy();
?>
<html>
       <head>
             <title> My search engine </title>
			   <link rel="stylesheet" type="text/css" href="style.css" />
			   </head>
<script>
function find(){
var string=document.getElementById("search").value;
		if ( string== null || string == "") {
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
  xhttp.open("GET", "find.php?q="+string, true);
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
				<form  class="frm"  >
                           <h1 id="1"> SEARCH HERE </h1 >
                           <input type = 'text' maxlength='90' name = 'search' id='search'/ >
<button type = 'button' name = 'submit'class="submit"onclick="find()" >Search</button>
    </form >
					<form  class="frm" action="advance.php" >
					<input type="submit" name = 'submit'class="submit" value="Advanced">
					</form>

				 <div id = "docs" align="left">content will appear here</div>

			 </div>
       </body >
</html > 




