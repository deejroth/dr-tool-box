<?php
//error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LoremPixel Class Demo</title>
    </head>
    <body>
        <?php
        include 'class_LoremPixel.php';

        $image = new LoremPixel(200, 200);

        echo '<p>Show Random Image</p>';
        printf('<img src="%s" />', $image->GetRandomImage());

        echo '<p>Show random image from default category (sports)</p>';
        printf('<img src="%s" />', $image->GetImageCategory());

        echo '<p>Get random image from default category with default '
        . 'dummy-text</p>';
        printf('<img src="%s" />', $image->GetImageCategoryDtext());

        echo '<p>Get specific number ' . $image->imageNumber . ' from default '
                . 'category</p>';
        printf('<img src="%s" />', $image->GetImageCategoryNum());

        echo '<p>Get specific number ' . $image->imageNumber . ' from default '
                . 'category with default Dummy-Text</p>';
        printf('<img src="%s" />', $image->GetImageCategoryNumberDtext());
        ?>
    </body>
</html>
