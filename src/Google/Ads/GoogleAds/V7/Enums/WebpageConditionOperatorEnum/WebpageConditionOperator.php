<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/webpage_condition_operator.proto

namespace Google\Ads\GoogleAds\V7\Enums\WebpageConditionOperatorEnum;

use UnexpectedValueException;

/**
 * The webpage condition operator in webpage criterion.
 *
 * Protobuf type <code>google.ads.googleads.v7.enums.WebpageConditionOperatorEnum.WebpageConditionOperator</code>
 */
class WebpageConditionOperator
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The argument web condition is equal to the compared web condition.
     *
     * Generated from protobuf enum <code>EQUALS = 2;</code>
     */
    const EQUALS = 2;
    /**
     * The argument web condition is part of the compared web condition.
     *
     * Generated from protobuf enum <code>CONTAINS = 3;</code>
     */
    const CONTAINS = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EQUALS => 'EQUALS',
        self::CONTAINS => 'CONTAINS',
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
class_alias(WebpageConditionOperator::class, \Google\Ads\GoogleAds\V7\Enums\WebpageConditionOperatorEnum_WebpageConditionOperator::class);

