<?php

/**
 * Creates a map using Google's Maps API
 *
 * This class uses the information to build a map image based on <br>
 * <a href="https://developers.google.com/maps/documentation/staticmaps/">
 *  Google's Static Maps API
 * </a>
 *
 * PHP version 5.4
 *
 * @package  Google\GoogleMaps
 * @author   DeeJRoth <i.am@beardedfolk.com>
 *
 * @license  MIT http://opensource.org/licenses/MIT
 */
namespace Google\GoogleMaps;

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
 * Generates a Goolge Maps image for use in a web page
 *
 * @package  Google\GoogleMaps
 * @author   DeeJRoth <i.am@beardedfolk.com>
 *
 * @license  MIT http://opensource.org/licenses/MIT
 *
 * @todo [ ] Make tests
 */
class GoogleMaps implements GoogleMapsInterface
{

    const GMAPSQUERYURL = 'http://maps.googleapis.com/maps/api/staticmap?';

    public $address;
    public $geo;
    public $center;
    public $zoomLevel;
    public $size;
    public $markers;
    public $format = 'jpg';
    public $sensor = 'false';
    public $query;
    public $image = array();
    public $imageTag;

    /**
     * The address to use for the center of the map
     *
     * @param string  $address A human readable address or coordinates
     * @param boolean $isGeo   If $address is coordinates
     */
    public function __construct($address, $isGeo = false)
    {
        if ($isGeo === false) {
            $this->address = $address;
        } else {
            $this->geo = $address;
        }
        $this->setCenter();
    }

    /**
     * Sets the address to use for the center of the map
     *
     * @return boolean Lets you know the magic happened!
     */
    public function setCenter()
    {
        $this->center = $this->address;
        return true;
    }

    /**
     * Set the zoom level of the map
     *
     * @param int $zoom The zoom setting of the map
     *
     * @return boolean|string Returns a string only if there is a failure
     */
    public function setZoomLevel($zoom = 16)
    {
        if (\is_int($zoom)) {
            $this->zoomLevel = $zoom;
            return true;
        } else {
            return 'Zoom sha\'ll be an integer only!';
        }
    }

    /**
     * Set the size of the map to render
     *
     * @param string $size Representation of the size of the map (Format: WxH)
     *
     * @return boolean|string Returns a string on error
     */
    public function setSize($size)
    {
        if (is_string($size)) {
            $this->size = $size;
            return true;
        } else {
            return 'Size sha\'ll look like this: ###x###';
        }
    }

    /**
     * Set the marker attirbutes to use on the map
     *
     * @param array $marker Inexes are color and label
     *
     * @return boolean
     */
    public function setMarker($marker)
    {
        if (\is_array($marker)) {
            $this->markers[] = array(
                'color' => $marker['color'],
                'label' => $marker['label']
            );
        } else {
            $this->marker = $marker;
        }
        return true;
    }

    /**
     * Set the format of the map to render
     *
     * @param string $format Sets the format of the map. See the link in the file
     * comment for more inforation on map formats
     *
     * @return boolean Lets you know the magic happened!
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return true;
    }

    /**
     * Set image tag attributes and src path
     *
     * @param string $altAttribute   The alt attribute to use in the image tag
     * @param string $classAttribute The class attribute to use in the image tag
     * @param string $idAttribute    The id attribute to use in the image tag
     *
     * @return string The image tag for the map
     *
     * @TODO Bring attributes in as array
     */
    public function setImageAttributes(
    $altAttribute = '', $classAttribute = '', $idAttribute = ''
    ) {
        $this->image['src'] = self::GMAPSQUERYURL;

        if (isset($altAttribute) && $altAttribute !== '') {
            $this->image['alt'] = "'{$altAttribute}'";
        }

        if (isset($classAttribute) && $classAttribute !== '') {
            $this->image['classes'] = $classAttribute;
        }

        if (isset($idAttribute) && $idAttribute !== '') {
            $this->image['id'] = $idAttribute;
        }

        if (isset($this->center)) {
            $this->query = 'center=' . \urlencode($this->center);
        } else {
            return 'Please define the center of the map.';
        }

        if (isset($this->zoomLevel)) {
            $this->query .= '&zoom=' . \urlencode($this->zoomLevel);
        } else {
            return 'Please define the zoom level for the map.';
        }

        if (isset($this->size)) {
            $this->query .= '&size=' . \urlencode($this->size);
        } else {
            return 'Please define the size of the map.';
        }

        if (isset($this->markers)) {
            $this->query .= '&markers=';
            foreach ($this->markers as $marker) {
                $this->query .= 'color:' . \urlencode($marker['color'] . '|');
                $this->query .= 'label:' . \urlencode($marker['label'] . '|');
                $this->query .= \urlencode($this->address);
            }
        } else {
            return 'Please define the marker(s) for the map.';
        }

        if (isset($this->format)) {
            $this->query .= '&format=' . \urlencode($this->format);
        }

        if (isset($this->sensor)) {
            $this->query .= '&sensor=' . \urlencode($this->sensor);
        } else {
            return 'Please define the sensor for the map.';
        }

        if (isset($this->image['src'])) {
            $this->image['src'] .= $this->query;
        }

        return $this->image['src'];
    }

    /**
     * The entire image tag for you to place in your page
     *
     * @return string The image tag to embed in your page
     */
    public function setImageTag()
    {
        $this->imageTag = '<img';
        foreach ($this->image as $attr => $val) {
            $this->imageTag .= ' ' . $attr . '="' . $val . '"';
        }
        $this->imageTag .= ' />';

        return $this->imageTag;
    }

    /**
     * Returns the image tag to be placed in the page
     *
     * @return string The image tag to embed in your page
     */
    public function getImageTag()
    {
        return $this->imageTag;
    }
}
