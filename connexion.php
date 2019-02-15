<!DOCTYPE html>

<html>


<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="connexion.css" />
    <title>Intro</title>

</head>

<body>

    <?php include "header.php";?>
    <div class="connexion">
        <form action="connexion.php" method="post" id="form">
            <p><label for="login">login</label>: <input type="text" name="login" id="login" required /></p>
            <p><label for="password">mot de passe</label>: <input type="text" name="password" id="password" /></p>
            <p><input type="submit" value="valider" id="valider" /></p>
        </form>
    </div>
    <?php
    if(isset($_POST["login"]) ) {
        require ('config.php');
        global $DB;
            $login = $_POST['login'];
            $password = $_POST['password'];
            
     

            //  Récupération de l'utilisateur et de son pass hashé
            $req = $DB->prepare('SELECT prenom, password,nom FROM admin WHERE login = :login AND password=:password');
            $req->execute(array(
                'login' => $login,
               'password'=>$password));
            if ($req->rowCount()==1)
            {
                foreach($req as $row){
                   
                    $_SESSION['prenom'] = $row['prenom'];
                    $_SESSION['login'] = $login;
                    $_SESSION['nom'] = $row['nom'];
                    header("location:accueil.php");
                }
            }
            else{
                echo 'mauvais login ou mot de passe';
            }
            
           
              
            
                
            
            
            
        }
      
     
    ?>







    <?php include "footer.php";?>
</body>

</html>