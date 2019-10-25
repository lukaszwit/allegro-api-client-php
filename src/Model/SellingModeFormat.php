<?php
/**
 * SellingModeFormat
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;
use \AllegroApi\ObjectSerializer;

/**
 * SellingModeFormat Class Doc Comment
 *
 * @category Class
 * @description The selling format of the offer.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SellingModeFormat
{
    /**
     * Possible values of this enum
     */
    const BUY_NOW = 'BUY_NOW';
    const AUCTION = 'AUCTION';
    const ADVERTISEMENT = 'ADVERTISEMENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUY_NOW,
            self::AUCTION,
            self::ADVERTISEMENT,
        ];
    }
}

