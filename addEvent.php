<?php
        require('config.php');
        global $DB;
        if (isset($_POST["title"]) AND isset($_POST["source"]) AND isset($_POST["date"]) AND isset($_POST["type"]))
        {
            $date = $_POST['date'];
            $source = $_POST['source'];
            $title = $_POST['title'];
            $type= $_POST["type"];
            $req = $DB->prepare('INSERT INTO calendrier (date, source,title,type) VALUES (:date, :source, :date, :type)');
            $req->execute(array(
                'date' => $date,
                'source' => $source,
                'title' => $title,
                'type' => $type
            ));   

        }
    ?>