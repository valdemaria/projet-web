<?php
    try{
        $DB= new PDO('mysql:host=localhost;dbname=web;charset=utf8','root','');
    
}
    catch(PDOException $e){
        echo 'probleme connexion base de données';
        exit();
    }
?>