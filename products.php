<?php

session_start();
$hs = array();


include("./product-add.php");
include("./product-delete.php");


addItem($hs, "name1", "1");

print_r($hs);

deleteItemWithName($hs, "name1");

//print_r($hs);

session_destroy()


?>