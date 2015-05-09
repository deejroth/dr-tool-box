<?php
<<<<<<< HEAD

namespace LoremPixel;

=======
namespace LoremPixel;
>>>>>>> da842f9... Added APIgen configuration
/*
 * The MIT License
 *
 * Copyright 2015 DeeJRoth <i.am@beardedfolk.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Interface for the LoremPixel class!
 *
 * My LoremPixel class makes it easy to create links to placeholder images using
 * the Lorem Pixel image placeholder service.
 *
 * PHP version 5.5
<<<<<<< HEAD
 *
 * @package   LoremPixel
 *
=======
 * 
 * @package   LoremPixel
 * 
>>>>>>> da842f9... Added APIgen configuration
 * @author    DeeJRoth <i.am@beardedfolk.com>
 * @copyright 2014 DeeJRoth
 * @license   http://opensource.org/licenses/MIT MIT
 *
 * @link      https://github.com/deejroth/dr-tool-box/tree/master/lorempixel
 *
 * @since     June 26, 2014
 *
 * @filesource
 * @access public
 */

/**
 * Interface for setting up the LoremPixel class
<<<<<<< HEAD
 *
 * @package  LoremPixel
 *
=======
 * 
 * @package  LoremPixel
 * 
>>>>>>> da842f9... Added APIgen configuration
 * @author   DeeJRoth <i.am@beardedfolk.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @example  /LoremPixel_demo.php Demo of use of LoremPixel class, see file on GitHub
 *
 * @link     https://github.com/deejroth/dr-tool-box/tree/master/app/lorempixel
 *
 * @todo Add option for gray images
 * @todo Add method for retrieving all and last error message
 */
<<<<<<< HEAD
interface LoremPixelInterface
{

    public function __construct($width, $height);

    public function getRandomImage();

    public function getImageCategory();

    public function getImageCategoryNum();

    public function getImageCategoryDtext();

    public function getImageCategoryNumberDtext();

    public function setWidth($width);

    public function setHeight($height);

    public function setCategory($category);

    public function setImageNumber($imageNumber);

    public function setDummyText($dText);

    public function showCategories();

=======
interface LoremPixelInterface {
    public function __construct($width, $height);
    
    public function getRandomImage();
    public function getImageCategory();
    public function getImageCategoryNum();
    public function getImageCategoryDtext();
    public function getImageCategoryNumberDtext();
    
    public function setWidth($width);
    public function setHeight($height);
    public function setCategory($category);
    public function setImageNumber($imageNumber);
    public function setDummyText($dText);
    
    public function showCategories();
    
>>>>>>> da842f9... Added APIgen configuration
}
