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

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="stil.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link  rel="icon" href="images1/logo.png" >
    <link rel="stylesheet" href="galerie.css">
    <title>
      Acasa
    </title>

    <!-- title image -->


  </head>


  <body>


<nav class="navbar navbar-expand-sm navbar-dark bg-info sticky-top">

  <a class="navbar-brand" href="index.php">Salut  <?php echo htmlspecialchars($_SESSION["username"]); ?>! <!--caracter invizibil--> &zwnj; &zwnj; <!--caracter invizibil-->  <img class=" opacity imgnavbar marginright5px"src="images1/portret.png" alt="Alaman Sergiu"></a>
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
<div class="gallery-container">


<div class="tz-gallery">

    <div class="row ">

        <div class="col-md-4 margintbg">
            <div class="card overflow">
                <a class="lightbox" href="images1/poza1.jpg">
                <img src="images1/poza1.jpg" alt="1" class="card-img-top hoverzi" >
                </a>
            </div>
        </div>

        <div class="col-md-4 margintbg">
            <div class="card overflow">
                <a class="lightbox" href="images1/poza2.jpg">
                <img src="images1/poza2.jpg" alt="2" class="card-img-top hoverzi">
                </a>
            </div>
        </div>

        <div class="col-md-4 margintbg">
            <div class="card overflow">
                <a class="lightbox" href="images1/poza3.jpg">
                <img src="images1/poza3.jpg" alt="3" class="card-img-top hoverzi">
                </a>
            </div>
        </div>
    </div>
      <div class="row paddingb">
        <div class="col-md-4 margintbg">
            <div class="card overflow">
                <a class="lightbox" href="images1/poza4.jpg">
                <img src="images1/poza4.jpg" alt="4" class="card-img-top hoverzi">
                </a>
            </div>
        </div>

        <div class="col-md-4 margintbg">
            <div class="card overflow">
                <a class="lightbox" href="images1/poza5.jpg">
                <img src="images1/poza5.jpg" alt="5" class="card-img-top hoverzi">
                </a>
            </div>
        </div>

        <div class="col-md-4 margintbg">
            <div class="card overflow">
                <a class="lightbox" href="images1/poza6.jpg">
                <img src="images1/poza6.jpg" alt="6" class="card-img-top hoverzi">
                </a>
            </div>
        </div>

    </div>

</div>


<br><br><br>

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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="galerie.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
  </script>
  </body>
</html>

