<?php
require "images.php";
$images = getImages("images");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galléria</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="gallery">
      <?php foreach ($images as  $image) { ?>
        <a href=<?php echo $image ?>><img src=<?php echo $image ?>></a>
      <?php } ?>
    </div>
</body>
</html>

