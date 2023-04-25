<?php

$directory = "images";

$file = $_FILES["image"];

$name = $file["name"];
$extension = pathinfo($name, PATHINFO_EXTENSION);

$uniqid = uniqid();
$newName = $uniqid . "." . $extension;

move_uploaded_file($file["tmp_name"], $directory . "/" . $newName);


header("Location: dashboard.php");
