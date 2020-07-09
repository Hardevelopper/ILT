<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion: compte ILT</title>
        <link rel="stylesheet" type="text/css" href="login_style.css">
    </head>
    <body>
        <form action="admin.php" method="post">
            <div class="loginlogo">
                <form class="connexion">
                    <img src="logo.png" alt="alt" class="logo1">
                    <h1 class="h1">Connecter vous</h1>
                    <form class="input"> 
                        <p class="text">Identifiant</p>
                        <input type="text" name="name" placeholder="Votre nom" required class="put">
                        <p class="text">Mot de passe</p>
                        <input type="password" name="password" placeholder="Votre mot de passe" required class="put">
                        <p>
                        <input type="checkbox" name="#">
                        <label for="#" class="inline">sauvegarder</label>
                        <input type="submit" name="Connexion" value="Connexion" class="submit">
                        </p>
                        <P>
                        <a href="#">Mot de passe oublié ?</a>
                        </P>
                    </form>
                </form>    
            </div>
        </form> 
    </body>

</html>


<?php 
    $con= mysqli_connect("localhost","root","","ivoire_languages_translator");
    if (isset($_POST['Connexion']))
    {
        $name= $_POST['name'];
        $password= $_POST['password'];
        $query= "insert into connexion (name,password) values ('$name', '$password')";
        if(mysqli_query($con, $query))
        {
            echo "<h3> enregistered successful !</h3>";
        }

    }

                
?>