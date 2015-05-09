<!DOCTYPE html>
<?php

require_once '../vendor/autoload.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LoremPixel Class Demo</title>
    </head>
    <body>
        <?php

        $image = new LoremPixel\LoremPixel(200, 200);

        echo '<p>Show Random Image</p>';
        printf('<img src="%s" />', $image->getRandomImage());

        echo '<p>Show random image from default category (sports)</p>';
        printf('<img src="%s" />', $image->getImageCategory());

        echo '<p>Get random image from default category with default '
        . 'dummy-text</p>';
        printf('<img src="%s" />', $image->getImageCategoryDtext());

        echo '<p>Get specific number ' . $image->imageNumber . ' from default '
        . 'category</p>';
        printf('<img src="%s" />', $image->getImageCategoryNum());

        echo '<p>Get specific number ' . $image->imageNumber . ' from default '
        . 'category with default Dummy-Text</p>';
        printf('<img src="%s" />', $image->getImageCategoryNumberDtext());

        ?>
    </body>
</html>
