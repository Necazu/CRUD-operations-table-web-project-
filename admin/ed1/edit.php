<?php  
	$connect = mysqli_connect("localhost", "root", "", "proiect");
	$id = $_POST["id"];  
	$nume = $_POST["nume"];  
	$nume_firma = $_POST["nume_firma"];  

	
	$sql = "UPDATE experienta_profesionala SET ".$nume_firma."='".$nume."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Actualizat!';  
	}  
 ?>