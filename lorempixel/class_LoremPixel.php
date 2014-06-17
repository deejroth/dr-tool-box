<?php

/**
 * Easily create placeholder images using the lorempixel service!
 *
 * @author DeeJRoth <i.am@beardedfolk.com> <http://github.com/deejroth>
 *
 */
class LoremPixel {

    private $url = 'http://lorempixel.com';
    public $errors = array();
    public $width;
    public $height;
    public $category;
    public $dummyText;
    public $imageNumber;

    /**
     * Sets up an image with the default width and height
     * Sets default category, dummy text, and imageNumber
     *
     * @param integer $width
     * @param integer $height
     */
    public function __construct($width = 640, $height = 480) {
        // defaults to 640 wide image
        $this->width = $width;

        // defaults to 480 high image
        $this->height = $height;

        // category defaults to sports
        $this->category = 'sports';

        // Dummy Text defaults to Dummy-Text
        $this->dummyText = 'Dummy-Text';

        // image number defaults to random between 1 and 10
        $this->imageNumber = rand(1,10);
    }

    /**
     * Get an image url with the default width and height
     * @return string
     */
    public function GetRandomImage() {
        return sprintf(
                '%s/%d/%d', $this->url, $this->width, $this->height
        );
    }

    /**
     * Set the expected width of the image
     * @param int $width
     * @return bool
     */
    public function SetWidth($width) {
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
     * @param int $height
     * @return bool
     */
    public function SetHeigth($height) {
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
     * @param string $category
     * @return bool
     */
    public function SetCategory($category) {
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
     * @return array
     */
    public function ShowCategories() {
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
     * @param int $imageNumber range of 1 to 10
     * @return boolean
     */
    public function SetImageNumber($imageNumber) {
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
     * Return an image url by user set category
     * @return string|boolean
     */
    public function GetImageCategory() {
        if (is_string($this->category) || $this->category != '') {
            return sprintf(
                    '%s/%s', $this->GetRandomImage(),
                    $this->category
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
     * @return string|boolean
     */
    public function GetImageCategoryNum(){
        if(is_int($this->imageNumber)){
            return sprintf(
                    '%s/%d',
                    $this->GetImageCategory(), $this->imageNumber
            );
        } else {
            $this->errors['GetImageNumberFromCategory'] = 'Image numbers must'
                    . ' be set by calling the SetImageNumber method. Image '
                    . 'numbers mst also be of integer type.';
            return false;
        }
    }

    public function SetDummyText($dText = 'Dummy-Text'){
        if(is_string($dText) && $dText != ''){
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
     * @return string
     */
    public function GetImageCategoryDtext(){
        return sprintf('%s/%s', $this->GetImageCategory(), $this->dummyText);
    }

    /**
     * Returns an image url for a specific image in a category with Dummy-Text
     * @return string
     */
    public function GetImageCategoryNumberDtext(){
        return sprintf('%s/%s', $this->GetImageCategoryNum(), $this->dummyText);
    }
}
