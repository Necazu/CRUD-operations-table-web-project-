<?php  
 $connect = mysqli_connect("localhost", "root", "", "proiect");  
 $output = '';  
 $sql = "SELECT * FROM experienta_profesionala ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">Nume</th>  
                     <th width="40%">Nume firma</th>  
                     <th width="40%">Pozitie ocupata</th> 
                     <th width="40%">Anul inceperii</th> 
                     <th width="40%">Anul incheierii</th> 
                     <th width="40%">Oras</th> 
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
                     <td class="nume_firma" data-id2="'.$row["id"].'" contenteditable>'.$row["nume_firma"].'</td>  
                     <td class="pozitie_ocupata" data-id3="'.$row["id"].'" contenteditable>'.$row["pozitie_ocupata"].'</td>
                     <td class="anul_inceperii" data-id4="'.$row["id"].'" contenteditable>'.$row["anul_inceperii"].'</td>
                     <td class="anul_incheierii" data-id5="'.$row["id"].'" contenteditable>'.$row["anul_incheierii"].'</td>
                     <td class="oras" data-id6="'.$row["id"].'" contenteditable>'.$row["oras"].'</td>
                     
                     <td><button type="button" name="delete_btn" data-id7="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
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
					<td id="nume_firma" contenteditable></td>  
                         <td id="pozitie_ocupata" contenteditable></td>  
                         <td id="anul_inceperii" contenteditable></td>  
                         <td id="anul_incheierii" contenteditable></td>  
                         <td id="oras" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>