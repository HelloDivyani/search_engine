

<?php // Include confi.php
session_start();
include_once('config.php');
 ?>
 <html>
       <head>
             <title> My search engine </title>
			   <link rel="stylesheet" type="text/css" href="style.css" />
			   </head>
<body>
 <?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$keyword=$_GET["search"];
	$search_exploded = explode ( " ", $keyword ); 
	$x = 0; foreach( $search_exploded as $search_each ) 
	{ $x++; $construct = "";
	if( $x == 1 ) $construct .="content LIKE '%$search_each%'"; 
	else $construct .="AND content LIKE '%$search_each%'"; } 
	$query = " SELECT * FROM documents WHERE $construct "; 
	 $result = mysqli_query($con,$query);
   $num= mysqli_num_rows($result);
	if($num==0){
	$output= "<p>Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling</p>"; }
else { $output= "<p>$num results found !</p>"; 
while( $runrows = mysqli_fetch_assoc( $result ) ) { 
$title = $runrows ['doc_title'];
 $desc = $runrows ['description'];
 $url = $runrows ['doc_url']; 
$output.= "<p><a href='$url' download=".$title."> <b> $title </b> </a> <br> $desc <br> </p> "; 
} 

}
}
else $output="no hello";

	echo $output;
 mysqli_close($con);
 ?>
 </body>
</html>