<?php
$ablakcim = array('cim' => 'Badacsonytomaj Városüzemeltető Nonprofit KFT.',);

$fejlec =array(
        'logo' => 'logo.png',
        'logoszoveg'=> 'logo',
        'cim' =>'Badacsonytomaj Városüzemeltető Nonprofit KFT.');


$MAPPA='./gallery/';
$TIPUSOK =array('.jpg','.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;


$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'keszitok'=> 'Az oldalt Engler Dániel és Bajár Milán készítette!'
);

$oldalak= array(
    'fooldal' =>array('fajl' => 'tajekoztato', 'szoveg'=> 'Tájékoztató','menun' => array(1,1)),
    'rolunk' => array('fajl' => 'rolunk', 'szoveg'=> 'Cégünkről','menun' => array(1,1)),
    'kapcsolatok' => array('fajl' => 'kapcsolatok', 'szoveg'=> 'Kapcsolatok','menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg'=> 'Galéria','menun' => array(1,1)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg'=> 'Bejelentkezés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg'=> 'Kijelentkezés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' => '', 'menun' => array(0,0))
  


);

$hibas_oldal =array('fajl'=> '404', 'szoveg' => 'A keresett oldal nem található!');
?>