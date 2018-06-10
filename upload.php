<?php
session_start();
include_once('config.php');
  require("class.filetotext.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
 // Get data


 $subject = $_POST['subject'];
 $author = $_POST['author'];
  $title = $_POST['title'];
$desc=$_POST['desc'];
 $category=$_POST["category"];
 $date=date('Y-m-d');
 $file_name=$_FILES['file']['name'];
$file_temp=$_FILES['file']['tmp_name'];
	$target_dir="uploads/";
	$target_file = $target_dir . basename($file_name);
	 $content=$subject." ".$author." ".$category." ".$target_file." ".$title." ".$desc." ";

	if(move_uploaded_file($file_temp,$target_file)){;
	if($category=='pdf'||$category=='doc'){
		$docObj = new Filetotext($target_file);
		$content.= $docObj->convertToText();

	}
else if($category=='text'){
	$content.=file_get_contents($target_file);	

}
	$content= mysqli_real_escape_string($con,$content);
	$desc= mysqli_real_escape_string($con,$desc);
	$title= mysqli_real_escape_string($con,$title);

	$sqlinsert="INSERT INTO documents(doc_url,doc_type,subject,doc_title,description,author,creation_date,content) VALUES ('$target_file','$category','$subject','$title','$desc','$author','$date','$content')";
	  if(!mysqli_query($con,$sqlinsert)){
	 die('error inserting new record'.mysqli_error($con)) ;
	 exit();
		}
}
else{
	echo '<script>alert("error in uploading document");</script>';


}
				header("refresh:0;url=admin.php");

mysqli_close($con);
}

 ?>