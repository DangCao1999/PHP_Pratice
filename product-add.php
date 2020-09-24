<?php

function addItem(&$hs,$name, $tuoi){
    $hstemp = array("name"=>$name, "tuoi"=>$tuoi);
    array_push($hs, $hstemp);
    $_SESSION['hs'] = $hs;
    // print_r($hstemp);
}

function editItem($hs, $name, $tuoi, $key)
{
    // $itemtemp = array("name" => $name, "tuoi" => $tuoi);
    // array_replace($hs, )
}
?>