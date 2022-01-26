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
    <link rel="stylesheet" href="Vertical.css">
    <title>
      Alaman Sergiu
    </title>

    <!-- title image -->


  </head>


  <body>

  
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

  <div class="row">
    <div class="col-lg-5 margintb text-center"  >
      <img src="images1\poza4.jpg" alt="Alaman Sergiu" class="imgbody">
    </div>
    <div class="col-lg-7 margintb  align-self-center">
      <span class="subtitlu"><strong>Cine sunt eu?</strong></span>
      <br>
      <p class="text-indent">  Numele meu este Alaman Sergiu-Mihai. Sunt student în anul IV, grupa 3.1 TST3 la <a href="https://www.upt.ro/Informatii_electronica-telecomunicatii-si-tehnologii-informationale_131_ro.html" target="_blank" class="my-title">Electronică, Telecomunicaţii și Tehnologii Informaționale</a> la <a href="https://www.upt.ro/Universitatea-Politehnica-Timisoara_ro.html" target="_blan"k class="my-title">Universitatea Politehnica Timisoara</a> .
            M-am născut pe 20 iulie 1998 în <a href="https://ro.wikipedia.org/wiki/Brad_(ora%C8%99)" target="_blank" class="my-title">Brad</a>, județul <a href="https://ro.wikipedia.org/wiki/Hunedoara" target="_blank" class="my-title">Hunedoara</a>.
      </p>
      <span class="subtitlu"><strong>Hobby</strong></span>
      <br>
      <p class="text-indent">Sunt o persoană foarte muncitoare și interesată să învețe lucruri noi. Cel mai important lucru pe care trebuie să îl stiţi despre mine este că sunt omul festivalurilor <a href="https://neversea.com/" target="_blank" class="my-title">Neversea</a> şi <a href="https://untold.com/" target="_blank" class="my-title">Untold</a>. Principalele mele hobby-uri sunt snowboarding, fitness, baschetball, și vizionarea serialelor TV. Serialele mele preferate de televiziune sunt în general cele din seria <a href="https://www.netflix.com/" target="_blank" class="my-title">Netflix</a>, însă preferatele mele sunt: <a href="https://www.imdb.com/title/tt9460858/" target="_blank" class="my-title">La valla</a> , dar si <a href="https://www.imdb.com/title/tt7134908/" target="_blank" class="my-title">Élite</a> , de asemenea, unul dintre cele mai bune.
   </p>
   <span class="subtitlu"><strong>Am studiat:</strong></span>
   <br>
   <p class="text-indent">Scoala generala am facut-o la <a href="https://sites.google.com/site/scoalamirceasantimbreanubrad/contact-me" target="_blank" class="my-title">ȘCOALA GIMNAZIALA "MIRCEA SANTIMBREANU" BRAD</a>
</p>
<p class="text-indent">Urmand apoi liceul din orasul meu, <a href="http://www.cnaibrad.ro/" target="_blank" class="my-title">COLEGIUL "NAŢIONAL AVRAM IANCU" BRAD</a>
</p>
<span class="subtitlu"><strong>Idol:</strong></span>
<br>
<p class="text-indent">Idolul meu, încă de când eram mai mic şi până în prezent este <a href="https://en.wikipedia.org/wiki/Shaun_White" target="_blank" class="my-title">Shaun Roger White</a> , fiind un snowboarder american. White deține recordul în snowboard de cele mai multe medalii de aur la X-Games și cele mai multe medalii olimpice de aur. Pasiunea mea pentru snowboarding a pronit din urmarirea capionatelor acestuia.
</p>


<br>


<div class="iframe-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/he03dVkhLTM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>



</div>

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

</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
      <!-- Textinfo color 17a2b8 -->
