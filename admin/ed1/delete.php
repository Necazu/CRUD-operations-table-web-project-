<?php  
	$connect = mysqli_connect("localhost", "root", "", "proiect");
	$sql = "DELETE FROM experienta_profesionala WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Sters!';  
	}  
 ?>