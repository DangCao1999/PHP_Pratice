<?php

session_start();
$hs = array();
if(isset($_SESSION['hs'])){
    $hs = $_SESSION['hs'];
}
function addItem(&$hs,$name, $tuoi){
    $hstemp = array("name"=>$name, "tuoi"=>$tuoi);
    array_push($hs, $hstemp);
    $_SESSION['hs'] = $hs;
    // print_r($hstemp);
    return array($name, $tuoi);
}

function editItem(&$hs, $name, $tuoi, $key)
{
    $itemtemp = array($key => array("name" => $name, "tuoi" => $tuoi));
    //print_r($itemtemp);
    
    //print_r($hs);
    
    $hs = array_replace($hs, $itemtemp);
    //print_r($hs);
}

function deleteItemWithName(array &$hs, string $name)
{
    // print("start delete");
    // print($name);
    // $keyarray = array('name'=> $name);
    // print_r($keyarray);
    $key = array_search($name, array_column($hs, 'name'));
    print($key); 
   
    if(is_null($key))
    {
        print_r($hs);
        return false;
        //not exist
    }
    else
    {   
        unset($hs[$key]);
        print_r($hs);
        return true;
    }
}


addItem($hs, "cao", "10");
//addItem($hs, "hung", "20");
//addItem($hs, "duy", "30");
//editItem($hs, "duy", "1", "1");
//session_destroy();
?>


