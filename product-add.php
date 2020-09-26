<?php

include("./products.php");

// print($_POST['addHS']);
//print($_POST['tenAdd']);
//print($_POST["tuoiAdd"]);
$tenAdd = $_POST['tenAdd'];
$tuoiAdd = $_POST['tuoiAdd'];
[$hsResultTen, $hsResultTuoi  ]= addItem($hs, $tenAdd, $tuoiAdd);
echo("<h1> ten: $hsResultTen || tuoi: $hsResultTuoi </h1>");

?>