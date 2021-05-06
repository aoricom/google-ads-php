<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/offline_user_data_job_status.proto

namespace Google\Ads\GoogleAds\V7\Enums\OfflineUserDataJobStatusEnum;

use UnexpectedValueException;

/**
 * The status of an offline user data job.
 *
 * Protobuf type <code>google.ads.googleads.v7.enums.OfflineUserDataJobStatusEnum.OfflineUserDataJobStatus</code>
 */
class OfflineUserDataJobStatus
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
     * The job has been successfully created and pending for uploading.
     *
     * Generated from protobuf enum <code>PENDING = 2;</code>
     */
    const PENDING = 2;
    /**
     * Upload(s) have been accepted and data is being processed.
     *
     * Generated from protobuf enum <code>RUNNING = 3;</code>
     */
    const RUNNING = 3;
    /**
     * Uploaded data has been successfully processed.
     *
     * Generated from protobuf enum <code>SUCCESS = 4;</code>
     */
    const SUCCESS = 4;
    /**
     * Uploaded data has failed to be processed.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::SUCCESS => 'SUCCESS',
        self::FAILED => 'FAILED',
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
class_alias(OfflineUserDataJobStatus::class, \Google\Ads\GoogleAds\V7\Enums\OfflineUserDataJobStatusEnum_OfflineUserDataJobStatus::class);

