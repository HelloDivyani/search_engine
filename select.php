

<?php // Include confi.php
session_start();
include_once('config.php');
 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$type=$_GET["q"];
	if($type=="author"){
		$output='<input type="text"  id="search" name="search" placeholder="Search*" required="required" maxlength="100"/><br><br>';
	}
	else if($type=="subject"||$type=="doc_title"){
				$output='<input type="text"  id="search" name="search" placeholder="Search*" required="required" maxlength="50"/><br><br>';

	}
	else if($type=="doc_type"){
		$output='		<select id="search" name="search">
			<option value="doc" selected>doc</option>
			<option value="image">Image</option>
			<option value="pdf">Pdf</option>
			<option value="ppt">Ppt</option>
			<option value="text">Text</option>
	</select></br></br>';}
	else $output='<input type="date"  id="search" name="search"  required="required"/><br><br>';
	echo $output;
	}

 mysqli_close($con);

 ?>