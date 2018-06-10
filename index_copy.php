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

        		return false;
   			}
			       return true; 	

			 
}
</script>
       <body>
	   <div align="right" id="up">
				<form action = 'login.php' method = 'post' class="frm" >
					 <input type = 'submit'  name = 'submit' value = 'Login' class="submit" >
				 </form>
		</div>
	   <div id ="middle" align="center">
				<form  class="frm" onsubmit="return find()" method="get" action="find.php" >
                           <h1 id="1"> SEARCH HERE </h1 >
                           <input type = 'text' maxlength='90' name = 'search' id='search'/ >
<input type = 'submit' name = 'submit' value ='Search' class="submit" >         
    </form >
				 <div id = "docs" align="left"><p id="text">hhhhh</p></div>

			 </div>
       </body >
</html > 




