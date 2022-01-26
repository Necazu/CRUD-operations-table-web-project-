<?php

require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty(trim($_POST["username"])))
    {
        $username_err = "";
    } 
    else
    {
        /*verificam daca deja exista numele introdus in baza de date*/

        $sql = "SELECT id FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql))
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "Aceasta username este folosit.";
                } 
                else
                {
                    $username = trim($_POST["username"]);
                }
            } 
            else
            {
                echo "Legatura intrerupta baza date.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    if(empty(trim($_POST["password"])))
    {
        $password_err = "";   

    } 

      /*verificam parola e mai mica de 6 caractere*/

    elseif(strlen(trim($_POST["password"])) < 6)
    {
        $password_err = "Parola trebuie sa fie mai lunga de 6 caractere";
    }
     else
     {
        $password = trim($_POST["password"]);
    }

    /*verificam daca ai introdus parola corect a doua oara*/
    if(empty(trim($_POST["confirm_password"])))
    {
        $confirm_password_err = "";     
    } 
    else
    {
        $confirm_password = trim($_POST["confirm_password"]);

        if(empty($password_err) && ($password != $confirm_password))
        {
            $confirm_password_err = "Parolele nu se potrivesc";
        }
    }
        /*verificam daca nu exista erori in introducerea utilizatorului*/
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql))
        {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            $param_username = $username;

            /*criptam parola*/
            $param_password = password_hash($password, PASSWORD_DEFAULT); 

            if(mysqli_stmt_execute($stmt))
            {
                header("location: login.php");
            } 
            else
            {
                echo "Nu s-a putut inregistra contul";
            }

            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
	<title>Inregistare/Logare</title>
	<head>
    <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="logincss.css" >
	</head>
	<body>

        <div class="d-flex justify-content-center align-items-center mt-5">
                <div class="card">
                        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                        
                            <li class="nav-item text-center "> 
                                <a class="nav-link active btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a> 
                            </li>
                        </ul>

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="form px-4"> 
                            <!--incepe inregistrarea-->
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="form-group">

                                        <h3>Username</h3>
                                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'invalid' : ''; ?>" value="<?php echo $username; ?>">
                                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                    </div>   

                                    <div class="form-group">
                                        <h3>Parola</h3>
                                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'invalid' : ''; ?>" value="<?php echo $password; ?>">
                                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                    </div>

                                    <div class="form-group">
                                        <h3>Confirmare Parola</h3>
                                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                    </div>
                            
                                    <div class="form-group">
                                        <!--trimite actiune-->
                                        <button class="btn btn-info" type="submit button" name="upload" value="Submit" >Creaza</button>
                                    </div>
                                    <br>
                                    <h3 id="eroare">Ai deja un cont? <a href="login.php" class="culoare">-Login-</a></h3>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>
        
		
	</body>
</html>