<!DOCTYPE html>
<<<<<<< HEAD:app/LoremPixel_demo.php
<?php

require_once '../vendor/autoload.php';

?>
=======
<<<<<<< HEAD:app/LoremPixel_demo.php
>>>>>>> da842f9... Added APIgen configuration:LoremPixel_demo.php
=======
>>>>>>> da842f9f627a814885b3a7613ee07700dd576765:LoremPixel_demo.php
>>>>>>> 62e89d19f7382f54e8b4e59b02025a259f4e601a:app/LoremPixel_demo.php
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
