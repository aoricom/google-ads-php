<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/ad_network_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Enums;

class AdNetworkType
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
3google/ads/googleads/v7/enums/ad_network_type.protogoogle.ads.googleads.v7.enums"�
AdNetworkTypeEnum"�
AdNetworkType
UNSPECIFIED 
UNKNOWN

SEARCH
SEARCH_PARTNERS
CONTENT
YOUTUBE_SEARCH
YOUTUBE_WATCH	
MIXEDB�
!com.google.ads.googleads.v7.enumsBAdNetworkTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

