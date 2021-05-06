<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of video TrueView in-stream ad format (ad shown during video
 * playback, often at beginning, which displays a skip button a few seconds into
 * the video).
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.VideoTrueViewInStreamAdInfo</code>
 */
class VideoTrueViewInStreamAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>string action_button_label = 4;</code>
     */
    protected $action_button_label = null;
    /**
     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>string action_headline = 5;</code>
     */
    protected $action_headline = null;
    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>string companion_banner = 6;</code>
     */
    protected $companion_banner = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action_button_label
     *           Label on the CTA (call-to-action) button taking the user to the video ad's
     *           final URL.
     *           Required for TrueView for action campaigns, optional otherwise.
     *     @type string $action_headline
     *           Additional text displayed with the CTA (call-to-action) button to give
     *           context and encourage clicking on the button.
     *     @type string $companion_banner
     *           The MediaFile resource name of the companion banner used with the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>string action_button_label = 4;</code>
     * @return string
     */
    public function getActionButtonLabel()
    {
        return isset($this->action_button_label) ? $this->action_button_label : '';
    }

    public function hasActionButtonLabel()
    {
        return isset($this->action_button_label);
    }

    public function clearActionButtonLabel()
    {
        unset($this->action_button_label);
    }

    /**
     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>string action_button_label = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setActionButtonLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->action_button_label = $var;

        return $this;
    }

    /**
     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>string action_headline = 5;</code>
     * @return string
     */
    public function getActionHeadline()
    {
        return isset($this->action_headline) ? $this->action_headline : '';
    }

    public function hasActionHeadline()
    {
        return isset($this->action_headline);
    }

    public function clearActionHeadline()
    {
        unset($this->action_headline);
    }

    /**
     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>string action_headline = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setActionHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->action_headline = $var;

        return $this;
    }

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>string companion_banner = 6;</code>
     * @return string
     */
    public function getCompanionBanner()
    {
        return isset($this->companion_banner) ? $this->companion_banner : '';
    }

    public function hasCompanionBanner()
    {
        return isset($this->companion_banner);
    }

    public function clearCompanionBanner()
    {
        unset($this->companion_banner);
    }

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>string companion_banner = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanionBanner($var)
    {
        GPBUtil::checkString($var, True);
        $this->companion_banner = $var;

        return $this;
    }

}

