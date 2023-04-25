<?php
require "images.php";

$directory = "images";
$images = getImages($directory);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit">Kép feltöltése</button>
    </form>

    <table class="image-row">
       <?php foreach ($images as $image) { ?>
        <tr>
            <td><img src="<?php echo $image?>"></td>
            <td><a href=<?php echo "delete.php?file=" . $image?> >Törlés</a></td>
        </tr>
       <?php }?>
    </table>
</body>

</html>