<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/errors/size_limit_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Errors;

class SizeLimitError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v7/errors/size_limit_error.protogoogle.ads.googleads.v7.errors"�
SizeLimitErrorEnum"q
SizeLimitError
UNSPECIFIED 
UNKNOWN
REQUEST_SIZE_LIMIT_EXCEEDED 
RESPONSE_SIZE_LIMIT_EXCEEDEDB�
"com.google.ads.googleads.v7.errorsBSizeLimitErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v7/errors;errors�GAA�Google.Ads.GoogleAds.V7.Errors�Google\\Ads\\GoogleAds\\V7\\Errors�"Google::Ads::GoogleAds::V7::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

