<?php

/**
 * Interface for GoogleMaps class
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
 * Interface for GoogleMaps class
 *
 * @package  Google\GoogleMaps
 * @author   DeeJRoth <i.am@beardedfolk.com>
 *
 * @license  MIT http://opensource.org/licenses/MIT
 *
 * @todo Change how Image Attributes are set (Breakup some of the spaghetti!)
 * @todo Change some of the parameters to use array type
 *
 */
interface GoogleMapsInterface
{

    public function __construct($address, $isGeo = false);

    public function setCenter();

    public function setZoomLevel($zoom = 16);

    public function setSize($size);

    public function setMarker(array $marker);

    public function setFormat($format);

    public function setImageAttributes(
    $altAttribute = '', $classAttribute = '', $idAttribute = ''
    );

    public function setImageTag();

    public function getImageTag();
}
