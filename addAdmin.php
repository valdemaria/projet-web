<?php
require ('config.php');
        if(isset($_POST["login"]) AND isset($_POST["password"]) AND $_SESSION['login']!='') {
            global $DB;
            
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $login = $_POST['login'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $numero =$_POST['numero'];

            $req =$DB->prepare('SELECT login FROM admin WHERE login = :login');
            $req->execute(array(
                
                'login' => $login
            ));
            print_r($login);
            if($req->rowCount() == 0)
            {
            $req = $DB->prepare('INSERT INTO admin (nom, prenom, login, mail, password, numero) VALUES (:nom, :prenom, :login, :mail, :password, :numero )');
            $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'login' => $login,
                'mail' => $mail,
                'password' => $password,
                'numero' => $numero
            ));   
            }
          
        }
            ?>