<?php
class Date{
    var $days   =array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
    var $months =array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre');

    function getEvent($year){
        global $DB;
        $req =$DB->prepare('SELECT id,title,date,source,type FROM calendrier WHERE YEAR(date)=:years');
        $req->bindParam(':years', $year);
        $req->execute();
        $r=array();
        while($d= $req->fetch(PDO::FETCH_OBJ)){
            
            $r[strtotime($d->date)]=$d;
        }
            return $r;
    }





    function getAll($year){
        $r=array();
        $date =new DateTime ($year.'-01-01');
        while($date->format('Y')<= $year){
            $y=$date->format('Y');
            $m=$date->format('n');
            $d=$date->format('j');
            $w=str_replace('0','7',$date->format('w'));
            $r[$y][$m][$d]=$w;
            $date->add(new DateInterval ('P1D'));
        }
        return $r;
    }



}






?>