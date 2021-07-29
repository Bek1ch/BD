<?php

$text = $_POST['text'];

$connect = mysqli_connect("localhost", "root", "root", "myproject");

$text = mysqli_real_escape_string($connect, $text);

$sql = 'INSERT INTO texts (text) VALUES ("'.$text .'")';

mysqli_query($connect, $sql);


header("Location: /index.php");