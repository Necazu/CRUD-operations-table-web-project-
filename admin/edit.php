<?php  
	$connect = mysqli_connect("localhost", "root", "", "proiect");
	
	$id = $_POST["id"];  
	$nume = $_POST["nume"];  
	$parere = $_POST["parere"];  

	
	$sql = "UPDATE feed_back SET ".$parere."='".$nume."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Actualizat!';  
	}  
 ?>