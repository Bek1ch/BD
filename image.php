<?php

$from = $_FILES["image"]["tmp_name"];
$to = "images/image1.jpg";

$result = move_uploaded_file($from, $to);
var_dump($result);