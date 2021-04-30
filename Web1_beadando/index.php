<?php
    include('./includes/config.inc.php');
$nyit = $oldalak['fooldal'];
if(isset($_GET['oldal'])){
    if(isset($oldalak[$_GET['oldal']]) && file_exists("./templates/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")){
        $nyit=$oldalak[$_GET['oldal']];
    }
    else  if(isset($extrak[$_GET['oldal']]) && file_exists("./templates/pages/{$extrak[$_GET['oldal']]['fajl']}.tpl.php")){
        $nyit=$extrak[$_GET['oldal']];
    }
    else{
        $nyit =$hibas_oldal;
        header("HTTP/1. 404 Not Found");
    }
}


    include('./templates/index.tpl.php');
?>

