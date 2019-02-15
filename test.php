<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="./test.css" />
    <title>Intro</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
</head>

<body>
    <?php
    require('config.php');
    require('date.php');
    
    $date = new Date();
    $year = date('Y');
    $event = $date->getEvent($year);
    $dates= $date->getAll($year);
    ?>
    <div class="period">
        <div class="annee">
            <?php
            echo $year;
            ?>
        </div>
        <div id="mois">
            <ul>
                <?php foreach ($date->months as $id=>$m):?>
                <li>
                    <a href="#" onclick="myFunction(<?php echo $id?>)" id="nom_mois<?php echo $id+1;?>">
                        <?php echo substr($m,0,3); ?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        <?php $dates = current ($dates);?>
        <?php foreach ($dates as $m=>$days): ?>
        <div class="mois_tableau" id="mois_tableau<?php echo $m;?>">
            <table>
                <thead>
                    <tr>
                        <?php foreach ($date->days as $d):?>
                        <th>
                            <?php echo substr($d,0,3);?>
                        </th>
                        <?php endforeach;?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $end = end($days);foreach ($days as $d=>$w):?>
                        <?php $time=strtotime("$year-$m-$d");?>
                        <?php if($d == 1 AND $w!=1 ):?>
                        <td colspan="<?php echo $w-1; ?>"></td>
                        <?php endif;?>
                        <td>
                            <div class="jour">
                                <?php echo $d;?>

                                <?php if (isset($event[$time])) : ?>
                                <div class="event" id="<?php echo $event[$time]->id; ?>"
                                    data-title="<?php echo $event[$time]->title; ?>"
                                    data-source="<?php echo $event[$time]->source; ?>"
                                    data-type="<?php echo $event[$time]->type;?>">

                                </div>
                                <?php endif?>

                            </div>

                        </td>
                        <?php if ($w==7):?>
                    </tr>
                    <tr>
                        <?php endif?>
                        <?php endforeach;?>
                        <?php if($end != 7 ):?>
                        <td colspan="<?php echo 7-$end; ?>"></td>
                        <?php endif?>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php endforeach;?>
    </div>

    <form id="affichage">
        <input type="radio" name="x" id="global"> global<br>
        <input type="radio" name="x" id="salle"> salle<br>
        <button type="button" onclick="check()">Valider</button>
    </form>
    <script src="test.js"></script>




</body>

</html>