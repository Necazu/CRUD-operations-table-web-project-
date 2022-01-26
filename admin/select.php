<?php  
 $connect = mysqli_connect("localhost", "root", "", "proiect");  
 $output = '';  

 $sql = "SELECT * FROM feed_back ORDER BY id DESC";  

 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">Nume</th>  
                     <th width="40%">Feedback</th>  
                     <th width="10%">Delete</th>  
                </tr>';  

 $rows = mysqli_num_rows($result);

 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM experienta_profesionala LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }

      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="nume" data-id1="'.$row["id"].'" contenteditable>'.$row["nume"].'</td>  
                     <td class="parere" data-id2="'.$row["id"].'" contenteditable>'.$row["parere"].'</td> 
                                         
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }      
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="nume" contenteditable></td>  
					<td id="parere" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>