<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/errors/label_error.proto

namespace Google\Ads\GoogleAds\V7\Errors\LabelErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible label errors.
 *
 * Protobuf type <code>google.ads.googleads.v7.errors.LabelErrorEnum.LabelError</code>
 */
class LabelError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * An inactive label cannot be applied.
     *
     * Generated from protobuf enum <code>CANNOT_APPLY_INACTIVE_LABEL = 2;</code>
     */
    const CANNOT_APPLY_INACTIVE_LABEL = 2;
    /**
     * A label cannot be applied to a disabled ad group criterion.
     *
     * Generated from protobuf enum <code>CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION = 3;</code>
     */
    const CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION = 3;
    /**
     * A label cannot be applied to a negative ad group criterion.
     *
     * Generated from protobuf enum <code>CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION = 4;</code>
     */
    const CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION = 4;
    /**
     * Cannot apply more than 50 labels per resource.
     *
     * Generated from protobuf enum <code>EXCEEDED_LABEL_LIMIT_PER_TYPE = 5;</code>
     */
    const EXCEEDED_LABEL_LIMIT_PER_TYPE = 5;
    /**
     * Labels from a manager account cannot be applied to campaign, ad group,
     * ad group ad, or ad group criterion resources.
     *
     * Generated from protobuf enum <code>INVALID_RESOURCE_FOR_MANAGER_LABEL = 6;</code>
     */
    const INVALID_RESOURCE_FOR_MANAGER_LABEL = 6;
    /**
     * Label names must be unique.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAME = 7;</code>
     */
    const DUPLICATE_NAME = 7;
    /**
     * Label names cannot be empty.
     *
     * Generated from protobuf enum <code>INVALID_LABEL_NAME = 8;</code>
     */
    const INVALID_LABEL_NAME = 8;
    /**
     * Labels cannot be applied to a draft.
     *
     * Generated from protobuf enum <code>CANNOT_ATTACH_LABEL_TO_DRAFT = 9;</code>
     */
    const CANNOT_ATTACH_LABEL_TO_DRAFT = 9;
    /**
     * Labels not from a manager account cannot be applied to the customer
     * resource.
     *
     * Generated from protobuf enum <code>CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER = 10;</code>
     */
    const CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER = 10;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CANNOT_APPLY_INACTIVE_LABEL => 'CANNOT_APPLY_INACTIVE_LABEL',
        self::CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION => 'CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION',
        self::CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION => 'CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION',
        self::EXCEEDED_LABEL_LIMIT_PER_TYPE => 'EXCEEDED_LABEL_LIMIT_PER_TYPE',
        self::INVALID_RESOURCE_FOR_MANAGER_LABEL => 'INVALID_RESOURCE_FOR_MANAGER_LABEL',
        self::DUPLICATE_NAME => 'DUPLICATE_NAME',
        self::INVALID_LABEL_NAME => 'INVALID_LABEL_NAME',
        self::CANNOT_ATTACH_LABEL_TO_DRAFT => 'CANNOT_ATTACH_LABEL_TO_DRAFT',
        self::CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER => 'CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER',
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
class_alias(LabelError::class, \Google\Ads\GoogleAds\V7\Errors\LabelErrorEnum_LabelError::class);

