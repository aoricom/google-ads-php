<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/google_voice_call_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Enums;

class GoogleVoiceCallStatus
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
<google/ads/googleads/v7/enums/google_voice_call_status.protogoogle.ads.googleads.v7.enums"l
GoogleVoiceCallStatusEnum"O
GoogleVoiceCallStatus
UNSPECIFIED 
UNKNOWN

MISSED
RECEIVEDB�
!com.google.ads.googleads.v7.enumsBGoogleVoiceCallStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

