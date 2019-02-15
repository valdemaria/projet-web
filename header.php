<!DOCTYPE html>
<?php session_start();?>
<html>

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="./header.css" />
    <title>Intro</title>

</head>

<body>
    <div class="header">
        <p id="menu-text">
            <img src="./photos/header/Logo.PNG" id="logo" />

            <ul id="menu">
                <a href="./accueil.php">accueil </a>
                <li><a href="#">historique</a>
                    <ul>
                        <li><a href="presentation.php">presentation</a></li>
                        <li><a href="2017-2018.php">2017-2018</a></li>
                        <li><a href="2018-2019.php">2018-2019</a></li>
                    </ul>
                </li>
                <li><a href="activités.php">activités</a>
                    <ul>

                        <li><a href="jeune.php">6-12ans</a></li>
                        <li><a href="senior.php">senior</a></li>
                        <li><a href="salle.php">salle des jeunes</a></li>
                        <li><a href="famille.php">famille</a></li>
                    </ul>
                </li>
                <a href="./calendrier.php">calendrier </a>
                <li>partage</a>
                    <ul>

                        <li><a href="photos.php">photos/videos</a></li>
                        <li><a href="blog.php">idées/blog</a></li>
                        <li><a href="partenaire.php">partenariats</a></li>
                    </ul>
                </li>
                <a href="./contact.php" id="contact">contact </a>
                <?php
                    if ( isset($_SESSION['login']) )
                    {?>
                <a href="./admin.php" id="admin">admin:
                    <?php echo $_SESSION['prenom'];?></a>
                <?php
                    }
                ?>
            </ul>

        </p>
    </div>


    <script src="./header.js"></script>
</body>

</html>