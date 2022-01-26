<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="stylesheet" href="stil.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link  rel="icon" href="images1/logo.png" >
    <title>
      Alaman Sergiu
    </title>

    <!-- title image -->


  </head>


  <body>



    <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v5.0"></script>

  
<nav class="navbar navbar-expand-sm navbar-dark bg-info sticky-top">

<a class="navbar-brand" href="index.php">Salut <?php echo htmlspecialchars($_SESSION["username"]); ?>! <!--caracter invizibil--> &zwnj; &zwnj; <!--caracter invizibil--><img class=" opacity imgnavbar marginright5px"src="images1/portret.png" alt="Alaman Sergiu"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link active" href="index.php">Acasa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Despre.php">Hobby</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cv.php">CV</a>
    </li>
       <li class="nav-item">
      <a class="nav-link" href="contact.php">Contact</a>
    </li>

  </ul>
  <div class="form-inline ">
  <a class="culoare_a" href="logout.php">
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


  <span class="subtitlu"><strong>Cum mă poţi găsi? &#128512; </strong></span>
  <br><br>
  <p><font size="6">Mail:     <em>sergiualaman@yahoo.com  &#x2709; </em></font></p>
<br>
<p><font size="6"> Adresa:<a href="https://www.google.com/maps/place/C%C4%83minul+C4/@45.747526,21.2380334,15z/data=!4m5!3m4!1s0x0:0xb05aeac8c7c95c4d!8m2!3d45.747526!4d21.2380334" target="_blank" class="my-title">Timişoara, Complexul Studenţesc, Cămin 4C &#127757; </a></font></p>
<br>

<p>
  <div class="embed-responsive embed-responsive-21by9">
  
 
<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.180562052752!2d21.23584471544034!3d45.74752597910542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d8f5cb52361%3A0xb05aeac8c7c95c4d!2sC%C4%83minul%20C4!5e0!3m2!1sro!2sro!4v1609843324809!5m2!1sro!2sro"
 width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</p>

<br>

<?php

require("conectare.php");

if (isset($_POST['upload'])) {

    $nume = $_POST['nume'];
    $parere = $_POST['parere'];
    $query = "INSERT INTO feed_back (nume,parere)
        VALUES ('$nume', '$parere');";
    
    $result=mysqli_query($conexiune, $query);

    if (!$result) {
      echo mysqli_error($conexiune);
    } else {
      echo "<meta http-equiv='refresh' content='0'>";

    }
} else {
    ?>

        <form method="POST" action="contact.php" enctype="multipart/form-data">

          <div class="form-group">

            <label for="nume">Numele</label>
            <input type="nume" class="form-control" name="nume" id="nume" placeholder="Numele tau">

          </div>
          <div class="form-group">

            <label for="parere">Feedback</label>
            <textarea class="form-control" id="parere" name="parere" rows="3" placeholder="Spune-ne parerea"></textarea>

          </div>

          <button type="submit" class="btn btn-info"  name="upload">Trimite feedback</button>
        </form>

<?php
                 }
                        mysqli_close($conexiune);
                ?>

        <br>
        <br>
        <?php
        require("conectare.php");
        ?>
        <table id="data_table" class="table table-striped">
       
        <thead>
          <tr>
          <th>Id</th>
          <th>Nume</th>
          <th>Feedback</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sql_query = "SELECT * FROM feed_back LIMIT 10";

        $resultset = mysqli_query($conexiune, $sql_query) or die("database error:". mysqli_error($conexiune));

        while( $developer = mysqli_fetch_assoc($resultset) ) {
        ?>
        <tr>
        <td><?php echo $developer ['id']; ?></td>
        <td><?php echo $developer ['nume']; ?></td>
        <td><?php echo $developer ['parere']; ?></td>
        </tr>
        <?php }

        mysqli_close($conexiune);?>
        </tbody>
        </table>



  <div class="col-lg-7 margintb text-center">
   
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
        &copy;2020 copyright to Alaman Sergiu
      </span>
    </div>
  </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
    </html>