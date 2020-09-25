<?php

include("./products.php");

// print($_POST['addHS']);
print($_POST['tenAdd']);
print($_POST["tuoiAdd"]);
$tenAdd = $_POST['tenAdd'];
$tuoiAdd = $_POST['tuoiAdd'];
addItem($hs, $tenAdd, $tuoiAdd);


?>