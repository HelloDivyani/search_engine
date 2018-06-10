

<?php // Include confi.php
session_start();
include_once('config.php');
 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	$keyword=$_GET["q"];
	$search_exploded = explode ( " ", $keyword ); 
	$x = 0; foreach( $search_exploded as $search_each ) 
	{ $x++; $construct = "";
	if($x==1)$type=$search_each;
	else if( $x == 2 ) $construct .="$type LIKE '%$search_each%'"; 
	else $construct .="AND $type LIKE '%$search_each%'"; } 
	$query = " SELECT * FROM documents WHERE $construct "; 
	 $result = mysqli_query($con,$query);
   $num= mysqli_num_rows($result);
	if($num==0){
	$output= "<p>Sorry, there are no matching result for <b> $keyword </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling</p>"; }
else { $output= "<p>$num results found !</p>"; 
while( $runrows = mysqli_fetch_assoc( $result ) ) { 
$title = $runrows ['doc_title'];
 $desc = $runrows ['description'];
 $url = $runrows ['doc_url']; 
$output.= "<p><a href='$url' download=".$title."> <b> save $title file </b> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='$url'> <b> open $title file </b> </a> <br> $desc  </p> "; 
}
}echo $output;

}
 mysqli_close($con);

 ?>