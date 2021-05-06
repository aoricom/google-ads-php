<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/feed_placeholder_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V7\Resources;

class FeedPlaceholderView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v7/enums/placeholder_type.protogoogle.ads.googleads.v7.enums"�
PlaceholderTypeEnum"�
PlaceholderType
UNSPECIFIED 
UNKNOWN
SITELINK
CALL
APP
LOCATION
AFFILIATE_LOCATION
CALLOUT
STRUCTURED_SNIPPET
MESSAGE		
PRICE

	PROMOTION
AD_CUSTOMIZER
DYNAMIC_EDUCATION
DYNAMIC_FLIGHT
DYNAMIC_CUSTOM
DYNAMIC_HOTEL
DYNAMIC_REAL_ESTATE
DYNAMIC_TRAVEL
DYNAMIC_LOCAL
DYNAMIC_JOB	
IMAGEB�
!com.google.ads.googleads.v7.enumsBPlaceholderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3
�
=google/ads/googleads/v7/resources/feed_placeholder_view.proto!google.ads.googleads.v7.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
FeedPlaceholderViewK
resource_name (	B4�A�A.
,googleads.googleapis.com/FeedPlaceholderViewa
placeholder_type (2B.google.ads.googleads.v7.enums.PlaceholderTypeEnum.PlaceholderTypeB�A:r�Ao
,googleads.googleapis.com/FeedPlaceholderView?customers/{customer_id}/feedPlaceholderViews/{placeholder_type}B�
%com.google.ads.googleads.v7.resourcesBFeedPlaceholderViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v7/resources;resources�GAA�!Google.Ads.GoogleAds.V7.Resources�!Google\\Ads\\GoogleAds\\V7\\Resources�%Google::Ads::GoogleAds::V7::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

