<?php  
	$connect = mysqli_connect("localhost", "root", "", "proiect");
	
	$sql = "DELETE FROM feed_back WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Sters!';  
	}  
 ?>