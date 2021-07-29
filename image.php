<?php
$from = $_FILES["image"]["tmp_name"];

$filename = $_FILES['image']['name'];

$extension = pathinfo($filename, PATHINFO_EXTENSION);

$filename = uniqid() . "." . $extension;

$to = "images/" . $filename;

move_uploaded_file($from, $to);

$connect = mysqli_connect("localhost" , "root" , "root" , "myproject");

$sql = 'INSERT INTO images (image) VALUES  ("'. $filename .'")';

mysqli_query($connect, $sql);

header("Location: /image_form.php");