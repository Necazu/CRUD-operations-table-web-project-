<?php 

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: \Proiect TMM - ALAMAN/login.php");
    exit;
}?>
<html>  
    <head>  
        <title></title>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="stil2.css">
    </head>  
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-info sticky-top">

<a class="navbar-brand" href="#">ADMIN MODE</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mr-auto">
  <li class="nav-item ">
      <a class="nav-link active" href="admin.php">Feedback</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link active" href="ed1/index.php">Experienta profesionala</a>
    </li>
  </ul>
  <div class="form-inline ">
  <a class="culoare_a" href="\Proiect TMM - ALAMAN/logout.php">
      <!--iconita logout-->
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
        <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
    </svg>
    <!--iconita logout-->
  </a>
  </div>
</nav>
    
        <div class="container">  
            <br />  
            <br />
            <h3>Tabel Feedback</h3>
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>

        <div class="row fixed-bottom navbar-dark bg-info " >
    <div class="col-sm-6 ">
      <span class="navbar-text marginleft20px">Contact:</span>
      <a class="navbar-link margin5px" href="https://www.facebook.com/serjmihai" target="_blank" ><span class="navbar-text evidentiatbottom"><i class="fab fa-facebook-f" ></i></span></a>
      <a class="navbar-link margin5px" href="https://www.instagram.com/serjmihai" target="_blank" ><span class="navbar-text evidentiatbottom"><i class="fab fa-instagram"></i></span></a>
      <a class="navbar-link margin5px" href="mailto:sergiualaman@yahoo.com"  ><span class="navbar-text evidentiatbottom"><i class="fas fa-envelope"></i></span></a>
    </div>
    <div class="col-sm-6 text-right">
      <span class="navbar-text marginright20px">
        &copy;2022 copyright to Alaman Sergiu
      </span>
    </div>
  </div>

</div>  
    </body>  
</html>  



<script>  
/* selectezi apasand pe un camp */
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    
    /* editeaza cand dau click in afara */
	function edit_data(id, nume, parere)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, nume:nume, parere:parere},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    } 


    /* capul de tabel */
    $(document).on('blur', '.nume', function(){  
        var id = $(this).data("id1");  
        var nume = $(this).text();  
        edit_data(id, nume, "nume");  
    });  

    $(document).on('blur', '.parere', function(){  
        var id = $(this).data("id2");  
        var parere = $(this).text();  
        edit_data(id,parere, "parere");  
    });

    /* butonul de delete */
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Sigur doresti sa stergi acest element?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>