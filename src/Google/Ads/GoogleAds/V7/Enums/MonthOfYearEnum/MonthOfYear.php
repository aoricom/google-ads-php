<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/month_of_year.proto

namespace Google\Ads\GoogleAds\V7\Enums\MonthOfYearEnum;

use UnexpectedValueException;

/**
 * Enumerates months of the year, e.g., "January".
 *
 * Protobuf type <code>google.ads.googleads.v7.enums.MonthOfYearEnum.MonthOfYear</code>
 */
class MonthOfYear
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * January.
     *
     * Generated from protobuf enum <code>JANUARY = 2;</code>
     */
    const JANUARY = 2;
    /**
     * February.
     *
     * Generated from protobuf enum <code>FEBRUARY = 3;</code>
     */
    const FEBRUARY = 3;
    /**
     * March.
     *
     * Generated from protobuf enum <code>MARCH = 4;</code>
     */
    const MARCH = 4;
    /**
     * April.
     *
     * Generated from protobuf enum <code>APRIL = 5;</code>
     */
    const APRIL = 5;
    /**
     * May.
     *
     * Generated from protobuf enum <code>MAY = 6;</code>
     */
    const MAY = 6;
    /**
     * June.
     *
     * Generated from protobuf enum <code>JUNE = 7;</code>
     */
    const JUNE = 7;
    /**
     * July.
     *
     * Generated from protobuf enum <code>JULY = 8;</code>
     */
    const JULY = 8;
    /**
     * August.
     *
     * Generated from protobuf enum <code>AUGUST = 9;</code>
     */
    const AUGUST = 9;
    /**
     * September.
     *
     * Generated from protobuf enum <code>SEPTEMBER = 10;</code>
     */
    const SEPTEMBER = 10;
    /**
     * October.
     *
     * Generated from protobuf enum <code>OCTOBER = 11;</code>
     */
    const OCTOBER = 11;
    /**
     * November.
     *
     * Generated from protobuf enum <code>NOVEMBER = 12;</code>
     */
    const NOVEMBER = 12;
    /**
     * December.
     *
     * Generated from protobuf enum <code>DECEMBER = 13;</code>
     */
    const DECEMBER = 13;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::JANUARY => 'JANUARY',
        self::FEBRUARY => 'FEBRUARY',
        self::MARCH => 'MARCH',
        self::APRIL => 'APRIL',
        self::MAY => 'MAY',
        self::JUNE => 'JUNE',
        self::JULY => 'JULY',
        self::AUGUST => 'AUGUST',
        self::SEPTEMBER => 'SEPTEMBER',
        self::OCTOBER => 'OCTOBER',
        self::NOVEMBER => 'NOVEMBER',
        self::DECEMBER => 'DECEMBER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MonthOfYear::class, \Google\Ads\GoogleAds\V7\Enums\MonthOfYearEnum_MonthOfYear::class);

