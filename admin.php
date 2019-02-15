<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="./admin.css" />
    <title>Intro</title>
    <script type="text/javascript" src="admin.js"></script>
</head>

<body>
    <?php include "header.php";?>
    <div class="admin">

        <ul>
            <li>
                <a href="#" onclick="myFunction2(1)" class="lien" id="lien1">Ajouter un événement:</a>
                <div id="form1" class="form">
                    <form action="addEvent.php" method="post">
                        <p><label for="title">title</label>: <input type="text" name="title" id="title" required /></p>
                        <p><label for="date">date</label>: <input type="date" name="date" id="date" required /></p>
                        <p><label for="source">source</label>: <input type="source" name="source" id="source"
                                required /></p>
                        <p><label for="type">type</label>: <input type="text" name="type" id="type" required /></p>
                        <p><input type="submit" value="valider" id="valider" /></p>
                    </form>
                </div>
            </li>
            <li><a href="#" onclick="myFunction2(2)" class="lien" id="lien2">Ajouter un administrateur:</a>
                <div id="form2" class="form">
                    <form action="addAdmin.php" method="post">
                        <p><label for="nom">nom</label>: <input type="text" name="nom" id="nom" required /></p>
                        <p><label for="prenom">prenom</label>: <input type="text" name="prenom" id="prenom" required />
                        </p>
                        <p><label for="login">login</label>: <input type="text" name="login" id="login" required /></p>
                        <p><label for="password">password</label>: <input type="password" name="password" id="password"
                                required /></p>


                        <p><label for="numero">téléphone</label>: <input type="text" name="numero" id="numero"
                                required /></p>
                        <p><label for="mail">mail</label>: <input type="text" name="mail" id="addresseMail" required />
                        </p>

                        <p><input type="submit" value="valider" id="valider" /></p>
                    </form>
                </div>
            </li>
        </ul>

    </div>









    <?php include "footer.php";?>
    <script src="admin.js"></script>
</body>


</html>