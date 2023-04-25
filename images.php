<?php

function getImages($directory) {
    $images = array();
    $files = scandir($directory);
    foreach ($files as $file) {
      $path = $directory . "/" . $file;
      $extension = pathinfo($path, PATHINFO_EXTENSION);
      if (is_file($path) && in_array($extension, array("jpg", "jpeg", "png", "gif"))) {
        $images[] = $path;
      }
    }
    return $images;
  }