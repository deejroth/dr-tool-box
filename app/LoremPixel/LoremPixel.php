<?php

namespace LoremPixel;

/**
 * Easily create placeholder images using the lorempixel service!
 *
 * My LoremPixel class makes it easy to create links to placeholder images using
 * the Lorem Pixel image placeholder service.
 *
 * PHP version 5.5
 *
 * @package   LoremPixel
 *
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
 * Sets up the url for a placeholder image from LoremPixel
 *
 * @package  LoremPixel
 *
 * @author   DeeJRoth <i.am@beardedfolk.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @example  /LoremPixel_demo.php Demo of use of LoremPixel class, see file on GitHub
 *
 * @link     https://github.com/deejroth/dr-tool-box/tree/master/app/lorempixel
 *
 * @todo [ ] Make tests
 */
class LoremPixel implements LoremPixelInterface
{

    /**
     * The URL to the LoremPixel Service
     *
     * @var string
     */
    private $_url = 'http://lorempixel.com';

    /**
     * Holds errors as errors[method_name]='error'
     *
     * @var array
     */
    public $errors = array();

    /**
     * The width of the expected image
     *
     * @var integer Defaults to 640
     */
    public $width;

    /**
     * The height of the expected image
     *
     * @var integer Defaults to 480
     */
    public $height;

    /**
     * The category to pull the images from
     *
     * @var string Run showCategories() method to see categories
     */
    public $category;

    /**
     * The string to use as dummy text
     *
     * @var string No special chars, change spaces to hyphen
     */
    public $dummyText;

    /**
     * Which image number to use from the specified category
     *
     * @var integer Range of 1 to 10, Defaults to random between 1 and 10
     */
    public $imageNumber;

    /**
     * Sets up a default image
     *
     * Sets Defaults for:
     * <ul>
     *  <li>width: 640</li>
     *  <li>height: 480</li>
     *  <li>category: sports</li>
     *  <li>dummy text: Dummy-Text</li>
     *  <li>image number: random between 1 and 10</li>
     * </ul>
     *
     * @param integer $width  The width of the expected image
     * @param integer $height The height of the expected image
     */
    public function __construct($width = 640, $height = 480)
    {
        // defaults to 640 wide image
        $this->width = $width;

        // defaults to 480 high image
        $this->height = $height;

        // category defaults to sports
        $this->category = 'sports';

        // Dummy Text defaults to Dummy-Text
        $this->dummyText = 'Dummy-Text';

        // image number defaults to random between 1 and 10
        $this->imageNumber = rand(1, 10);
    }

    /**
     * Get an image url with the default width and height
     *
     * @return string
     */
    public function getRandomImage()
    {
        return sprintf(
                '%s/%d/%d', $this->_url, $this->width, $this->height
        );
    }

    /**
     * Set the expected width of the image
     *
     * @param int $width Width of the expected image
     *
     * @return bool
     */
    public function setWidth($width)
    {
        if (is_int($width)) {
            $this->width = $width;
            return true;
        } else {
            $this->errors['SetWidth'] = 'Incorrect data type, expected '
                    . 'integer type.';
            return false;
        }
    }

    /**
     * Set the expected height of the image
     *
     * @param int $height Set the height of the expected image
     *
     * @return bool
     */
    public function setHeight($height)
    {
        if (is_int($height)) {
            $this->height = $height;
            return true;
        } else {
            $this->errors['SetHeight'] = 'Incorrect data type, expected '
                    . 'integer type.';
            return false;
        }
    }

    /**
     * Set the category for the image to be pulled from
     *
     * @param string $category Set the category to pull images from
     *
     * @return bool
     */
    public function setCategory($category)
    {
        if (is_string($category) && $category != '') {
            $this->category = $category;
            return true;
        } else {
            $this->errors['SetCategory'] = 'Incorrect data type, expected '
                    . 'non-zero length string type.';
            $this->category = '';
            return false;
        }
    }

    /**
     * Returns a list of available categories
     *
     * @return array
     */
    public function showCategories()
    {
        return array(
            'abstract',
            'animals',
            'business',
            'cats',
            'city',
            'food',
            'nightlife',
            'fashion',
            'people',
            'nature',
            'sports',
            'technics',
            'transport'
        );
    }

    /**
     * Sets the image number of the category
     *
     * @param int $imageNumber range of 1 to 10
     *
     * @return bool
     */
    public function setImageNumber($imageNumber)
    {
        if (is_int($imageNumber)) {
            if ($imageNumber > 0 && $imageNumber <= 10) {
                $this->imageNumber = $imageNumber;
                return true;
            } else {
                $this->errors['SetImageNumber'] = 'Image number must be '
                        . 'greater than 0, and less than 10';
                return false;
            }
        } else {
            $this->errors['SetImageNumber'] = 'Incorrect data type, expected '
                    . 'integer type.';
            return false;
        }
    }

    /**
     * Return an image url by user set category.
     *
     * @return string|bool
     */
    public function getImageCategory()
    {
        if (is_string($this->category) || $this->category != '') {
            return sprintf(
                    '%s/%s', $this->getRandomImage(), $this->category
            );
        } else {
            $this->errors['GetImageByCategory'] = 'Category must not be left '
                    . 'blank and must be of string format. Did you set the '
                    . 'category by calling the SetCategory method?';
            return false;
        }
    }

    /**
     * Return an image URL with a specific image number that belongs
     * to a specific category
     *
     * @return string|bool
     */
    public function getImageCategoryNum()
    {
        if (is_int($this->imageNumber)) {
            return sprintf(
                    '%s/%d', $this->getImageCategory(), $this->imageNumber
            );
        } else {
            $this->errors['GetImageNumberFromCategory'] = 'Image numbers must'
                    . ' be set by calling the SetImageNumber method. Image '
                    . 'numbers mst also be of integer type.';
            return false;
        }
    }

    /**
     * Set the dummy text to be displayed over images
     *
     * @param string $dText What the dummy text should read
     *
     * @return boolean
     */
    public function setDummyText($dText = 'Dummy-Text')
    {
        if (is_string($dText) && $dText != '') {
            $this->dummyText = $dText;
            return true;
        } else {
            $this->errors['SetDummyText'] = 'Dummy text must be a string with '
                    . 'no symbols. Space should also be converted to hyphens.';
            return false;
        }
    }

    /**
     * Returns an image URL for a specific category with Dummy-Text
     *
     * @return string
     */
    public function getImageCategoryDtext()
    {
        return sprintf('%s/%s', $this->getImageCategory(), $this->dummyText);
    }

    /**
     * Returns an image url for a specific image in a category with Dummy-Text
     *
     * @return string
     */
    public function getImageCategoryNumberDtext()
    {
        return sprintf('%s/%s', $this->getImageCategoryNum(), $this->dummyText);
    }
}
